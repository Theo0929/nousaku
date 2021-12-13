<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
        $statusList = array(
            array('0' , '啟用'), 
            array('1' , '未啟用')
        );
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'pBrandList' => $pBrandList,
            'statusList' => $statusList
        ];
        return view('backend.brand.index' , $binding);
    }

    public function edit(Request $request)
    {
        //
        $pBrandEdit = DB::select('select * from product_brand where pbid = ? and deleteflag = ?', array($request->pbid,0));
        $statusList = array(
            array('0' , '啟用'), 
            array('1' , '未啟用')
        );
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'pBrandEdit' => $pBrandEdit,
            'statusList' => $statusList
        ];
        return view('backend.brand.edit' , $binding);
    }
    public function create(Request $request)
    {
        //
        $statusList = array(
            array('0' , '啟用'), 
            array('1' , '未啟用')
        );
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'statusList' => $statusList
        ];
        return view('backend.brand.create' , $binding);
    }

    public function update(Request $request)
    {
        try{
            $updatesql = 
            'update product_brand SET pbname=:pbname , status=:status
            WHERE pbid = :pbid';

            DB::beginTransaction();
            DB::update($updatesql , [
                'pbname' => $request->pbname ,
                'status' => $request->status ,
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

    public function insert(Request $request)
    {
        try{
            $insertsql = 
            'insert into product_brand (pbname , status) 
            values (:pbname , :status)';

            DB::beginTransaction();
            DB::insert($insertsql , [
                'pbname' => $request->pbname ,
                'status' => $request->status
            ]);

            DB::commit();
            $msg = "新增成功";
        }
        catch(Exception $exception)
        {
            DB::rollBack();
            $msg = "新增失敗";
        }

        $binding = [
            'msg' => $msg,
        ];
        return response()->json( $binding , 200);
    }

    public function deleteFlag(Request $request)
    {
        try{
            $updatesql = 
            'update product_brand SET deleteFlag = 1 
            WHERE pbid = :pbid';

            DB::beginTransaction();
            DB::update($updatesql , [
                'pbid' => $request->pbid
            ]);

            DB::commit();
            $msg = "刪除成功";
        }
        catch(Exception $exception)
        {
            DB::rollBack();
            $msg = "刪除失敗";
        }

        $binding = [
            'msg' => $msg,
        ];
        return response()->json( $binding , 200);
    }
}
