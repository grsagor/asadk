<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Template;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class OrderController extends Controller
{
    public function index()
    {
        return view('backend.pages.orders.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Order::with(['user', 'templates'])->get();
            return DataTables::of($data)
                ->addColumn('user_name', function ($row) {
                    return $row->user ? $row->user->name : '-';
                })
                ->addColumn('total_items', function ($row) {
                    return $row->templates->count();
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button class="view btn btn-info btn-sm view_btn" data-url="'. route('admin.orders.show', ['id' => $row->id]) .'">View</button> ';
                    $actionBtn .= '<button class="edit btn btn-success btn-sm edit_btn" data-url="'. route('admin.orders.edit', ['id' => $row->id]) .'">Edit</button> ';
                    $actionBtn .= '<button class="delete btn btn-danger btn-sm delete_btn" data-url="'. route('admin.orders.delete', ['id' => $row->id]) .'">Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function show($id)
    {
        $order = Order::with(['user', 'templates'])->findOrFail($id);
        $html = view('backend.pages.orders.show', compact('order'))->render();
        return response()->json(['html' => $html]);
    }

    public function create()
    {
        $users = User::all();
        $templates = Template::all();
        $html = view('backend.pages.orders.create', compact('users', 'templates'))->render();
        return response()->json(['html' => $html]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'templates' => 'required|array',
            'templates.*' => 'exists:templates,id',
            'status' => 'required|in:pending,processing,completed,cancelled',
            'payment_status' => 'required|in:pending,paid,failed',
            'payment_method' => 'required|string',
            'total_amount' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $order = Order::create([
                'user_id' => $request->user_id,
                'status' => $request->status,
                'payment_status' => $request->payment_status,
                'payment_method' => $request->payment_method,
                'total_amount' => $request->total_amount,
            ]);

            // Attach templates with their prices
            foreach ($request->templates as $templateId) {
                $template = Template::find($templateId);
                if ($template) {
                    $order->templates()->attach($templateId, [
                        'price' => $template->price
                    ]);
                }
            }

            return response()->json([
                'success' => true,
                'message' => 'Order created successfully'
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
        $order = Order::with(['templates'])->findOrFail($id);
        $users = User::all();
        $templates = Template::all();
        $html = view('backend.pages.orders.edit', compact('order', 'users', 'templates'))->render();
        return response()->json(['html' => $html]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'templates' => 'required|array',
            'templates.*' => 'exists:templates,id',
            'status' => 'required|in:pending,processing,completed,cancelled',
            'payment_status' => 'required|in:pending,paid,failed',
            'payment_method' => 'required|string',
            'total_amount' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $order = Order::findOrFail($id);
            $order->update([
                'user_id' => $request->user_id,
                'status' => $request->status,
                'payment_status' => $request->payment_status,
                'payment_method' => $request->payment_method,
                'total_amount' => $request->total_amount,
            ]);

            // Sync templates with their prices
            $syncData = [];
            foreach ($request->templates as $templateId) {
                $template = Template::find($templateId);
                if ($template) {
                    $syncData[$templateId] = ['price' => $template->price];
                }
            }
            $order->templates()->sync($syncData);

            return response()->json([
                'success' => true,
                'message' => 'Order updated successfully'
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
            $order = Order::findOrFail($id);
            $order->templates()->detach(); // Remove template relationships
            $order->delete();

            return response()->json([
                'success' => true,
                'message' => 'Order deleted successfully'
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