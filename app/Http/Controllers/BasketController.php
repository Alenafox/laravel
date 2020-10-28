<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket(){
        $orderId = session('orderId');
        if (!is_null($orderId)){
            $order = Order::FindOrFail($orderId);
        }
        return view('basket', compact('order'));
    }
    public function basketPlace(){
        return view('order');
    }
    public function basketAdd($product_id){
        $orderId = session('orderId');
        if (is_null($orderId)){
            $order = Order::create()->id;
            session(['orderId'->$order->id]);
        } else {
            $order = Order::find($orderId);
        }
        if ($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot();
            $pivotRow->count++;
            $pivotRow->update();
        } else{
            $order->products()->attach($productId);
        }
        
        return redirect()->route('basket');
    }
    public function basketRemove($product_id){
        $orderId = session('orderId');
        if (is_null($orderId)){
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);
        if ($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot();
            $pivotRow->count++;
            $pivotRow->update();
        } else{
            $order->products()->attach($productId);
        }
        return redirect()->route('basket');
    }
}
