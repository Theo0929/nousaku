<?php

namespace App\Http\Controllers\Backend;

use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pBrandList = DB::select('select * from product_brand where deleteflag = ?', array(0));
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'pBrandList' => $pBrandList,
        ];
        return view('backend.brand.index' , $binding);
    }

    public function edit(Request $request)
    {
        //
        $pBrandEdit = DB::select('select * from product_brand where pbid = ? and deleteflag = ?', array($request->pbid,0));
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'pBrandEdit' => $pBrandEdit,
        ];
        return view('backend.brand.edit' , $binding);
    }

    public function update(Request $request)
    {
        try{
            $updatesql = 
            'update product_brand SET pbname=:pbname 
            WHERE pbid = :pbid';

            DB::beginTransaction();
            DB::update($updatesql , [
                'pbname' => $request->pbname ,
                'pbid' => $request->pbid
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
