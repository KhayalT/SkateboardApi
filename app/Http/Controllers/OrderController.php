<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->paginate(10);
        return OrderResource::collection($orders);
    }

    public function store(OrderRequest $request)
    {
        $order = new Order();
        $order->product_id = $request->input('product_id');
        $order->color_id = $request->input('color_id');
        $order->amount = $request->input('amount');
        $order->custom_print_photo = $request->input('custom_print_photo');
        $order->email = $request->input('email');
        $order->phone_number = $request->input('phone_number');
        $order->address = $request->input('address');
        $order->save();

        return new OrderResource($order);
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'delivery_date' => $request->input('preparation_date')
                ? 'after:preparation_date'
                : 'after:' . $order->preparation_date,
            'preparation_date' => 'after:' . $order->created_at,
        ]);

        $order->update($request->only(['delivery_date', 'preparation_date']));
        return new OrderResource($order);
    }
}
