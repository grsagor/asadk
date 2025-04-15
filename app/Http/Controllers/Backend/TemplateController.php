<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\Category;
use App\Models\LicenseType;
use App\Models\TemplateFeature;
use App\Models\TemplateImage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TemplateController extends Controller
{
    public function index()
    {
        return view('backend.pages.templates.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Template::with(['category', 'author']);
            return DataTables::of($data)
                ->addColumn('category_name', function ($row) {
                    return $row->category->name ?? 'N/A';
                })
                ->addColumn('thumbnail', function ($row) {
                    $thumbnail = $row->images()->where('is_thumbnail', true)->first();
                    return $thumbnail ? '<img src="' . asset($thumbnail->image_url) . '" height="50">' : 'No Image';
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('admin.templates.edit', ['id' => $row->id]) . '" class="btn btn-success btn-sm">Edit</a> ';
                    $actionBtn .= '<button class="delete btn btn-danger btn-sm delete_btn" data-url="' . route('admin.templates.delete', ['id' => $row->id]) . '">Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'thumbnail'])
                ->make(true);
        }
    }

    public function create()
    {
        $categories = Category::all();
        $licenseTypes = LicenseType::all();
        return view('backend.pages.templates.create', compact('categories', 'licenseTypes'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'short_description' => 'required|string',
            'regular_price' => 'required|numeric|min:0',
            'framework' => 'required|string',
            'browser_compatibility' => 'required|string',
            'documentation_status' => 'required|string',
            'support_period' => 'required|string',
            'demo_url' => 'nullable|url',
            'features' => 'required|array|min:1',
            'features.*' => 'required|string',
            'images' => 'required|array|min:1',
            'images.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'licenses' => 'required|array|min:1',
            'licenses.*' => 'exists:license_types,id',
            'template_file' => 'required|file|mimes:zip,rar|max:51200', // 50MB max
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $template = Template::create([
                'user_id' => Auth::id(),
                'category_id' => $request->category_id,
                'title' => $request->title,
                'description' => $request->description,
                'short_description' => $request->short_description,
                'regular_price' => $request->regular_price,
                'framework' => $request->framework,
                'browser_compatibility' => $request->browser_compatibility,
                'documentation_status' => $request->documentation_status,
                'support_period' => $request->support_period,
                'demo_url' => $request->demo_url,
            ]);
            if ($request->hasFile('template_file')) {
                $file = $request->file('template_file');
                $fileName = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/template_files'), $fileName);

                $template->update([
                    'template_file' => 'uploads/template_files/' . $fileName
                ]);
            }

            foreach ($request->features as $feature) {
                TemplateFeature::create([
                    'template_id' => $template->id,
                    'feature_name' => $feature
                ]);
            }

            if (!file_exists(public_path('uploads/templates'))) {
                mkdir(public_path('uploads/templates'), 0777, true);
            }

            foreach ($request->file('images') as $index => $image) {
                $fileName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/templates'), $fileName);

                TemplateImage::create([
                    'template_id' => $template->id,
                    'image_url' => 'uploads/templates/' . $fileName,
                    'is_thumbnail' => $index === 0,
                    'is_main' => $index === 0,
                    'display_order' => $index
                ]);
            }

            $template->licenses()->attach($request->licenses);

            return redirect()->route('admin.templates.index')
                ->with('success', 'Template created successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
            return redirect()->back()
                ->with('error', 'Something went wrong!')
                ->withInput();
        }
    }

    public function edit($id)
    {
        $template = Template::with(['features', 'images', 'licenses'])->findOrFail($id);
        $categories = Category::all();
        $licenseTypes = LicenseType::all();
        return view('backend.pages.templates.edit', compact('template', 'categories', 'licenseTypes'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'short_description' => 'required|string',
            'regular_price' => 'required|numeric|min:0',
            'framework' => 'required|string',
            'browser_compatibility' => 'required|string',
            'documentation_status' => 'required|string',
            'support_period' => 'required|string',
            'demo_url' => 'nullable|url',
            'features' => 'required|array|min:1',
            'features.*' => 'required|string',
            'new_images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'licenses' => 'required|array|min:1',
            'licenses.*' => 'exists:license_types,id',
            'template_file' => 'nullable|file|mimes:zip,rar|max:51200', // 50MB max
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $template = Template::findOrFail($id);

            if ($request->hasFile('template_file')) {
                // Delete old file if exists
                if ($template->template_file && file_exists(public_path($template->template_file))) {
                    unlink(public_path($template->template_file));
                }

                $file = $request->file('template_file');
                $fileName = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/template_files'), $fileName);

                $template->template_file = 'uploads/template_files/' . $fileName;
            }

            $template->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'description' => $request->description,
                'short_description' => $request->short_description,
                'regular_price' => $request->regular_price,
                'framework' => $request->framework,
                'browser_compatibility' => $request->browser_compatibility,
                'documentation_status' => $request->documentation_status,
                'support_period' => $request->support_period,
                'demo_url' => $request->demo_url,
                'template_file' => $template->template_file
            ]);

            $template->features()->delete();
            foreach ($request->features as $feature) {
                TemplateFeature::create([
                    'template_id' => $template->id,
                    'feature_name' => $feature
                ]);
            }

            if ($request->hasFile('new_images')) {
                foreach ($request->file('new_images') as $index => $image) {
                    $fileName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('uploads/templates'), $fileName);

                    TemplateImage::create([
                        'template_id' => $template->id,
                        'image_url' => 'uploads/templates/' . $fileName,
                        'display_order' => $template->images()->count() + $index
                    ]);
                }
            }

            $template->licenses()->sync($request->licenses);

            return redirect()->route('admin.templates.index')
                ->with('success', 'Template updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Something went wrong!')
                ->withInput();
        }
    }

    public function delete($id)
    {
        try {
            $template = Template::with('images')->findOrFail($id);

            foreach ($template->images as $image) {
                if (file_exists(public_path($image->image_url))) {
                    unlink(public_path($image->image_url));
                }
            }
            if ($template->template_file && file_exists(public_path($template->template_file))) {
                unlink(public_path($template->template_file));
            }
            $template->delete();

            return response()->json([
                'success' => true,
                'message' => 'Template deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function deleteImage($id)
    {
        try {
            $image = TemplateImage::findOrFail($id);

            if (file_exists(public_path($image->image_url))) {
                unlink(public_path($image->image_url));
            }

            $image->delete();

            return response()->json([
                'success' => true,
                'message' => 'Image deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function download($id)
    {
        $template = Template::findOrFail($id);

        if (!$template->template_file || !file_exists(public_path($template->template_file))) {
            return redirect()->back()->with('error', 'Template file not found!');
        }

        return response()->download(public_path($template->template_file));
    }
}
