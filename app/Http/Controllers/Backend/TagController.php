<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class TagController extends Controller
{
    public function index()
    {
        return view('backend.pages.tags.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Tag::all();
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button class="edit btn btn-success btn-sm edit_btn" data-url="'. route('admin.tags.edit', ['id' => $row->id]) .'">Edit</button> ';
                    $actionBtn .= '<button class="delete btn btn-danger btn-sm delete_btn" data-url="'. route('admin.tags.delete', ['id' => $row->id]) .'">Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        $html = view('backend.pages.tags.create')->render();
        return response()->json(['html' => $html]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            Tag::create([
                'name' => $request->name,
                'description' => $request->description,
                'order' => $request->order ?? 0,
                'status' => 1,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Tag created successfully'
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
        $tag = Tag::findOrFail($id);
        $html = view('backend.pages.tags.edit', compact('tag'))->render();
        return response()->json(['html' => $html]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $tag = Tag::findOrFail($id);
            $tag->update([
                'name' => $request->name,
                'description' => $request->description,
                'order' => $request->order ?? 0,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Tag updated successfully'
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
            $tag = Tag::findOrFail($id);
            $tag->delete();

            return response()->json([
                'success' => true,
                'message' => 'Tag deleted successfully'
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