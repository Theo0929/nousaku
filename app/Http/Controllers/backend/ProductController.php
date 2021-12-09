<?php

namespace App\Http\Controllers\Backend;

use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productList = DB::select('select * from product where deleteflag = ?', array(0));
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'productList' => $productList,
        ];
        return view('backend.product.index' , $binding);
    }

    public function edit(Request $request)
    {
        //
        $productEdit = DB::select('select * from product where productid = ? and deleteflag = ?', array($request->pid,0));
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'productEdit' => $productEdit,
        ];
        return view('backend.product.edit' , $binding);
    }

    public function update(Request $request)
    {
        try{
            $updatesql = 
            'update product SET pname=:pname, pgroup=:pgroup, mark=:mark, 
            brand=:brand, category=:category, price=:price,productno=:productno,
            description=:description,size=:size,color=:color, pattern=:pattern,capacity=:capacity, 
            weight=:weight,material=:material,origin=:origin,
            designer=:designer,remark=:remark,status=:status 
            WHERE productid = :productid';

            DB::beginTransaction();
            DB::update($updatesql , [
                'pname' => $request->pname ,
                'pgroup' => $request->pgroup ,
                'mark' => $request->mark ,
                'brand' => $request->brand ,
                'category' => $request->category ,
                'price' => $request->price ,
                'productno' => $request->productno ,
                'description' => $request->description ,
                'size' => $request->size ,
                'color' => $request->color ,
                'pattern' => $request->pattern ,
                'capacity' => $request->capacity ,
                'weight' => $request->weight ,
                'material' => $request->material ,
                'origin' => $request->origin ,
                'designer' => $request->designer ,
                'remark' => $request->remark ,
                'status' => $request->status ,
                'productid' => $request->productid ,
            ]);

            DB::commit();
            $msg = "更新成功";
        }
        catch(Exception $exception)
        {
            DB::rollBack();
            $msg = "更新失敗";
        }

        $binding = [
            'msg' => $msg,
        ];
        return response()->json( $binding , 200);
    }
}
