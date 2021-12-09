<?php

namespace App\Http\Controllers\Backend;

use App\http\Controllers\Controller;
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
        $pCategoryList = DB::select('select * from product_Category where deleteflag = ?', array(0));
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'pCategoryList' => $pCategoryList,
        ];
        return view('backend.Category.index' , $binding);
    }

    public function edit(Request $request)
    {
        //
        $pCategoryEdit = DB::select('select * from product_Category where pcid = ? and deleteflag = ?', array($request->pcid,0));
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'pCategoryEdit' => $pCategoryEdit,
        ];
        return view('backend.Category.edit' , $binding);
    }

    public function update(Request $request)
    {
        try{
            $updatesql = 
            'update product_Category SET pcname=:pcname 
            WHERE pcid = :pcid';

            DB::beginTransaction();
            DB::update($updatesql , [
                'pcname' => $request->pcname ,
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
}
