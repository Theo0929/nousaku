<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pCategoryList = DB::select('select * from product_category where deleteflag = ?', array(0));
        $statusList = array(
            array('0' , '啟用'), 
            array('1' , '未啟用')
        );
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'statusList' => $statusList,
            'pCategoryList' => $pCategoryList,
        ];
        return view('backend.category.index' , $binding);
    }

    public function edit(Request $request)
    {
        //
        $pCategoryEdit = DB::select('select * from product_category where pcid = ? and deleteflag = ?', array($request->pcid,0));
        $statusList = array(
            array('0' , '啟用'), 
            array('1' , '未啟用')
        );
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'statusList' => $statusList,
            'pCategoryEdit' => $pCategoryEdit,
        ];
        return view('backend.category.edit' , $binding);
    }
    public function create()
    {
        //
        $statusList = array(
            array('0' , '啟用'), 
            array('1' , '未啟用')
        );
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'statusList' => $statusList,
        ];
        return view('backend.category.create' , $binding);
    }
    public function update(Request $request)
    {
        try{
            $updatesql = 
            'update product_category SET pcname=:pcname ,status=:status 
            WHERE pcid = :pcid';

            DB::beginTransaction();
            DB::update($updatesql , [
                'pcname' => $request->pcname ,
                'status' => $request->status ,
                'pcid' => $request->pcid
            ]);

            DB::commit();
            $msg = "更新成功";
        }
        catch(Exception $exception)
        {
            DB::rollBack();
            $msg = "更新失敗" . $exception;
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
            'insert into product_category (pcname , status) 
            values (:pcname , :status)';

            DB::beginTransaction();
            DB::update($insertsql , [
                'pcname' => $request->pcname ,
                'status' => $request->status
            ]);

            DB::commit();
            $msg = "新增成功";
        }
        catch(Exception $exception)
        {
            DB::rollBack();
            $msg = "新增失敗" . $exception;
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
            'update product_category SET deleteflag = 1  
            WHERE pcid = :pcid';

            DB::beginTransaction();
            DB::update($updatesql , [
                'pcid' => $request->pcid 
            ]);

            DB::commit();
            $msg = "刪除成功";
        }
        catch(Exception $exception)
        {
            DB::rollBack();
            $msg = "刪除失敗" . $exception;
        }

        $binding = [
            'msg' => $msg,
        ];
        return response()->json( $binding , 200);
    }
}
