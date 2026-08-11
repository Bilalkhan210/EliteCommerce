<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'customer_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'payment_method' => 'required|in:cod,card',
            'total_amount' => 'required|numeric',
            // Conditional validation for card
            'card_number' => 'required_if:payment_method,card',
            'expiry_date' => 'required_if:payment_method,card',
            'cvv' => 'required_if:payment_method,card',
        ]);

        $order = Order::create($validated);

        return response()->json([
            'message' => 'Order placed successfully!',
            'order' => $order
        ], 201);
    }

    public function index()
    {
        return response()->json(Order::with('user')->get());
    }
}
