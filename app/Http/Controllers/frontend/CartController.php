<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart(Request $request)
    {
        try{
            $cartOrderList = array();
            if($request->session()->has('cartList'))
            {
                $cartList = $request->session()->get('cartList');
                foreach ($cartList as $cartItem) {
                    $cartOrder = DB::table('product')
                    ->where('deleteflag' , 0)
                    ->where('productid' , $cartItem)
                    ->first();
                    array_push($cartOrderList , $cartOrder);
                }
            }
            else
            {
                $cartList = "";
            }
        }
        catch(Exception $exception)
        {

        }
        $totalPrice = 0;
        $checkPrice = 0;
        $binding = [
            'msg' => 'msg',
            'cartOrderList' => $cartOrderList,
            'cartList' => $cartList,
            'totalPrice' => $totalPrice,
            'checkPrice' => $checkPrice,
        ];
        return view('frontend.cart.cart' , $binding);
    }

    public function cartAdd(Request $request)
    {
        try{
            
            if($request->session()->has('cartList'))
            {
                $productIdList = $request->session()->get('cartList');
                if(in_array($request->specList, $productIdList))
                {

                }
                else
                {
                    array_push($productIdList, $request->specList);
                    $request->session()->put('cartList' , $productIdList);
                }
            }
            else
            {
                $productIdList = array($request->specList);
                $request->session()->put('cartList', $productIdList);
            }

            $msg = $request->pname."已加入購物車";
        }
        catch(Exception $exception)
        {
            
            $msg = "加入購物車失敗";
        }

        $binding = [
            'msg' => $msg,
        ];
        return response()->json( $binding , 200);
    }
    public function cartCheckout(Request $request)
    {
        try{
            $insertsql = 'insert into orders (receivename , receivemail , receivephone , receivepost , 
            receivecity , receivedist , receiveaddr , payway , invoice , unitid , invoicetitle , check1 , check2 , 
            checkPrice , discountPrice , totalPrice) 
            values ( :receivename , :receivemail , :receivephone , :receivepost , :receivecity , 
            :receivedist , :receiveaddr , :payway , :invoice , :unitid , :invoicetitle , :check1 , :check2 , 
            :checkprice , :discountprice , :totalprice)';

            DB::beginTransaction();
            DB::insert($insertsql , [
                'receivename' => $request->receiveName ,
                'receivemail' => $request->receiveMail ,
                'receivephone' => $request->receivePhone ,
                'receivepost' => $request->receivePost ,
                'receivecity' => $request->receiveCity ,
                'receivedist' => $request->receiveDist ,
                'receiveaddr' => $request->receiveAddr ,
                'payway' => $request->payway ,
                'invoice' => $request->invoice ,
                'unitid' => $request->unitId ,
                'invoicetitle' => $request->invoiceTitle ,
                'check1' => $request->check1 ,
                'check2' => $request->check2 ,
                'checkprice' => $request->checkPrice ,
                'discountprice' => $request->discountPrice ,
                'totalprice' => $request->totalPrice 
            ]);
            

            //$selectsql = 'select orderid from orders order by orderid desc limit 1';
            $orderItem = DB::select('select orderid from orders order by orderid desc limit 1');
            $orderid = "";
            foreach ($orderItem as $key ) {
                $orderid = $key->orderid;
            }
            for ($i=0; $i < count($request->productid); $i++) { 
                $insertsql = 'insert into order_product (orderid , productid , pname , spec , extraservice1 , 
                extraservice2 , extraservice3 , productprice , extraserviceprice , firstprice ) 
                values (:orderid , :productid , :pname , :spec , :extraservice1 , 
                :extraservice2 , :extraservice3 , :productprice , :extraserviceprice , :firstprice);';

                // $productid = "";
                // if($request->productid[$i] != null)
                // {
                //     $productid = $request->productid[$i];
                // }
                // $pname = "";
                // if($request->pname[$i] != null)
                // {
                //     $pname = $request->pname[$i];
                // }
                // $spec = "";
                // if($request->spec[$i] != null)
                // {
                //     $spec = $request->spec[$i];
                // }
                // $extraService1 = "";
                // if($request->extraService1[$i] != null)
                // {
                //     $extraService1 = $request->extraService1[$i];
                // }
                // $extraService2 = "";
                // if($request->extraService2[$i] != null)
                // {
                //     $extraService2 = $request->extraService2[$i];
                // }
                // $extraService3 = "";
                // if($request->extraService3[$i] != null)
                // {
                //     $extraService3 = $request->extraService3[$i];
                // }
                // $productPrice = "0";
                // if($request->productPrice[$i] != null)
                // {
                //     $productPrice = $request->productPrice[$i];
                // }
                // $extraServicePrice = "0";
                // if($request->extraServicePrice[$i] != null)
                // {
                //     $extraServicePrice = $request->extraServicePrice[$i];
                // }
                // $firstPrice = "0";
                // if($request->firstPrice[$i] != null)
                // {
                //     $firstPrice = $request->firstPrice[$i];
                // }
                // DB::insert($insertsql , [
                //     'orderid' => $orderid ,
                //     'productid' =>  $productid,
                //     'pname' => $pname,
                //     'spec' => $spec,
                //     'extraservice1' => $extraService1,
                //     'extraservice2' => $extraService2 ,
                //     'extraservice3' => $extraService3 ,
                //     'productprice' => $productPrice ,
                //     'extraserviceprice' => $extraServicePrice ,
                //     'firstprice' => $firstPrice,
                // ]);
                DB::insert($insertsql , [
                    'orderid' => $orderid ,
                    'productid' =>  $request->productid[$i],
                    'pname' => $request->pname[$i],
                    'spec' => $request->spec[$i],
                    'extraservice1' => $request->extraService1[$i],
                    'extraservice2' => $request->extraService2[$i] ,
                    'extraservice3' => $request->extraService3[$i] ,
                    'productprice' => $request->productPrice[$i] ,
                    'extraserviceprice' => $request->extraServicePrice[$i] ,
                    'firstprice' => $request->firstPrice[$i],
                ]);
            }
            DB::commit();
            $request->session()->forget('cartList');
            $msg = "新增成功";
        }
        catch(Exception $exception)
        {
            DB::rollBack();
            $msg = $exception->getMessage();
        }

        $binding = [
            'msg' => $msg,
            'orderid' => $orderid,
        ];
        return response()->json( $binding , 200);
    }
    public function cartOrder(Request $request)
    {
        $cartOrderList = DB::select('select * from orders where orderid = ?' , array($request->orderid));
        $cartOrderProductList = DB::select('select * from order_product where orderid = ?' , array($request->orderid));
        $orderid = $request->orderid;
        // while (strlen($orderid) < 10) {
        //     $orderid = "0" + $orderid;
        // }
        $binding = [
            'msg' => 'msg',
            'orderid' => $orderid,
            'cartOrderList' => $cartOrderList,
            'cartOrderProductList' => $cartOrderProductList,
        ];
        return view('frontend.cart.order' , $binding);
    }
}
