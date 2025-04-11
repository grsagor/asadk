<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class SkillController extends Controller
{
    public function index()
    {
        return view('backend.pages.skills.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Skill::all();
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button class="edit btn btn-success btn-sm edit_btn" data-url="'. route('admin.skills.edit', ['id' => $row->id]) .'">Edit</button> ';
                    $actionBtn .= '<button class="delete btn btn-danger btn-sm delete_btn" data-url="'. route('admin.skills.delete', ['id' => $row->id]) .'">Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        $html = view('backend.pages.skills.create')->render();
        return response()->json(['html' => $html]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'proficiency' => 'required|integer|min:0|max:100',
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
            Skill::create([
                'name' => $request->name,
                'proficiency' => $request->proficiency,
                'description' => $request->description,
                'order' => $request->order ?? 0,
                'status' => 1,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Skill created successfully'
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
        $skill = Skill::findOrFail($id);
        $html = view('backend.pages.skills.edit', compact('skill'))->render();
        return response()->json(['html' => $html]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'proficiency' => 'required|integer|min:0|max:100',
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
            $skill = Skill::findOrFail($id);
            $skill->update([
                'name' => $request->name,
                'proficiency' => $request->proficiency,
                'description' => $request->description,
                'order' => $request->order ?? 0,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Skill updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!'
            ], 500);
        }
    }

    public function delete($id)
    {
        try {
            $skill = Skill::findOrFail($id);
            $skill->delete();

            return response()->json([
                'success' => true,
                'message' => 'Skill deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!'
            ], 500);
        }
    }
}