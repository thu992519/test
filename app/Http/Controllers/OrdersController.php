<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    public function indexorder(){
        
        return view('order/order');
    }
    public function create(){
        
        return view('order/create');
    }
   public function store(Request $request){
        $tea=$request->validate([
            'item'=>'required',
            'qty'=>'required',
            'ice'=>'required',
            'sugar'=>'required',
        ]);
        Order::create($tea);
        return redirect()->route(route:'order')->with('notice','點餐完成!');

   }
}
