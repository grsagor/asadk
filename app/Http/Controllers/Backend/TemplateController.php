<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class TemplateController extends Controller
{
    public function index()
    {
        return view('backend.pages.templates.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Template::with(['category', 'tags'])->get();
            return DataTables::of($data)
                ->addColumn('category_name', function ($row) {
                    return $row->category ? $row->category->name : '-';
                })
                ->addColumn('tags', function ($row) {
                    return $row->tags->pluck('name')->implode(', ');
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button class="edit btn btn-success btn-sm edit_btn" data-url="'. route('admin.templates.edit', ['id' => $row->id]) .'">Edit</button> ';
                    $actionBtn .= '<button class="delete btn btn-danger btn-sm delete_btn" data-url="'. route('admin.templates.delete', ['id' => $row->id]) .'">Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $html = view('backend.pages.templates.create', compact('categories', 'tags'))->render();
        return response()->json(['html' => $html]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'file_path' => 'required|string',
            'preview_url' => 'nullable|url',
            'order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $template = Template::create([
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'file_path' => $request->file_path,
                'preview_url' => $request->preview_url,
                'order' => $request->order ?? 0,
                'status' => 1,
            ]);

            if ($request->has('tags')) {
                $template->tags()->sync($request->tags);
            }

            return response()->json([
                'success' => true,
                'message' => 'Template created successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function edit($id)
    {
        $template = Template::with('tags')->findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        $html = view('backend.pages.templates.edit', compact('template', 'categories', 'tags'))->render();
        return response()->json(['html' => $html]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'file_path' => 'required|string',
            'preview_url' => 'nullable|url',
            'order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $template = Template::findOrFail($id);
            $template->update([
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'file_path' => $request->file_path,
                'preview_url' => $request->preview_url,
                'order' => $request->order ?? 0,
            ]);

            if ($request->has('tags')) {
                $template->tags()->sync($request->tags);
            }

            return response()->json([
                'success' => true,
                'message' => 'Template updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function delete($id)
    {
        try {
            $template = Template::findOrFail($id);
            $template->tags()->detach(); // Remove tag relationships
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
}