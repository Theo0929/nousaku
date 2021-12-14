<?php

namespace App\Http\Controllers\Backend;

use App\Models\Orders;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orderList = DB::select('select * from orders where deleteflag = 0');
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'orderList' => $orderList
        ];
        return view('backend.order.index' , $binding);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function orderEdit(Request $request)
    {
        //
        $orderEdit = DB::select('select * from orders where deleteflag = 0 and orderid= ?' , array($request->orderid));
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'orderEdit' => $orderEdit,
            
        ];
        return view('backend.order.edit', $binding);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
