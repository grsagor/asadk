<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LicenseType;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class LicenseTypeController extends Controller
{
    public function index()
    {
        return view('backend.pages.license-type.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = LicenseType::all();
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="'. route('admin.license.types.edit', ['id' => $row->id]) .'" class="edit btn btn-success btn-sm">Edit</a> ';
                    $actionBtn .= '<button class="delete btn btn-danger btn-sm delete_btn" data-url="'. route('admin.license.types.delete', ['id' => $row->id]) .'">Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('backend.pages.license-type.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:license_types,name',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            LicenseType::create([
                'name' => $request->name,
                'description' => $request->description,
            ]);

            return redirect()->route('admin.license.types.index')
                ->with('success', 'License type created successfully');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Something went wrong!')
                ->withInput();
        }
    }

    public function edit($id)
    {
        $licenseType = LicenseType::findOrFail($id);
        return view('backend.pages.license-type.edit', compact('licenseType'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:license_types,name,'.$id,
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $licenseType = LicenseType::findOrFail($id);
            $licenseType->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);

            return redirect()->route('admin.license.types.index')
                ->with('success', 'License type updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Something went wrong!')
                ->withInput();
        }
    }

    public function delete($id)
    {
        try {
            $licenseType = LicenseType::findOrFail($id);
            $licenseType->delete();

            return response()->json([
                'success' => true,
                'message' => 'License type deleted successfully'
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