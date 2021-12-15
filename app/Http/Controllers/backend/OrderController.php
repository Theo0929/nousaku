<?php

namespace App\Http\Controllers\Backend;

use App\Models\Orders;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
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
        $orderProduct = DB::select('select op.* , p.productno , p.jancode from order_product op join product p on op.productid = p.productid 
        where op.deleteflag = 0 and p.deleteFlag = 0 and op.orderid = ?' , array($request->orderid));
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'orderEdit' => $orderEdit,
            'orderProduct' => $orderProduct,
            
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
    public function orderUpdate(Request $request, Orders $orders)
    {
        try{
            $updatesql = 
            'update orders SET status=:status 
            WHERE orderid = :orderid';

            DB::beginTransaction();
            DB::update($updatesql , [
                'status' => $request->status ,
                'orderid' => $request->orderid ,
            ]);

            DB::commit();
            $msg = "更新成功";
        }
        catch(Exception $exception)
        {
            DB::rollBack();
            $msg = "更新失敗 " + $exception->getMessage();
        }

        $binding = [
            'msg' => $msg,
        ];
        return response()->json( $binding , 200);
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
