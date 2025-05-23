<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.pages.categories.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::all();
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button class="edit btn btn-success btn-sm edit_btn" data-url="'. route('admin.categories.edit', ['id' => $row->id]) .'">Edit</button> ';
                    $actionBtn .= '<button class="delete btn btn-danger btn-sm delete_btn" data-url="'. route('admin.categories.delete', ['id' => $row->id]) .'">Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('backend.pages.categories.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories,name',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
            ]);

            return redirect()->route('admin.categories.index')
                ->with('success', 'Category created successfully');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Something went wrong!')
                ->withInput();
        }
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.pages.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories,name,'.$id,
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $category = Category::findOrFail($id);
            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
            ]);

            return redirect()->route('admin.categories.index')
                ->with('success', 'Category updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Something went wrong!')
                ->withInput();
        }
    }

    public function delete($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();

            return response()->json([
                'success' => true,
                'message' => 'Category deleted successfully'
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