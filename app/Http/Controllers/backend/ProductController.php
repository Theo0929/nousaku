<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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
        $brandList = DB::select('select * from product_brand where deleteflag = ?', array(0));
        $categoryList = DB::select('select * from product_category where deleteflag = ?', array(0));
        $statusList = array(
            array('0' , '上架銷售中'), 
            array('1' , '缺貨中') , 
            array('3' ,'即將開賣')
        );
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'brandList' => $brandList,
            'statusList' => $statusList,
            'categoryList' => $categoryList,
            'productList' => $productList,
        ];
        return view('backend.product.index' , $binding);
    }
    public function create()
    {
        $brandList = DB::select('select * from product_brand where deleteflag = ?', array(0));
        $categoryList = DB::select('select * from product_category where deleteflag = ?', array(0));
        $statusList = array(
            array('0' , '上架銷售中'), 
            array('1' , '缺貨中') , 
            array('3' ,'即將開賣')
        );
        $colorList = array(
            array('0' , '金棕'), 
            array('1' , '銀') , 
            array('2' , '藍') , 
            array('3' , '粉紅') , 
            array('4' , '玫瑰金') , 
            array('5' , '黃銅') , 
            array('6' , '白銅') , 
            array('7' ,'銅')
        );
        $binding = [
            'user' => 'user',
            'result' => 'orders',
            'brandList' => $brandList,
            'statusList' => $statusList,
            'colorList' => $colorList,
            'categoryList' => $categoryList,
        ];
        return view('backend.product.create' , $binding);
    }
    public function edit(Request $request)
    {
        //
        $productEdit = DB::select('select * from product where productid = ? and deleteflag = ?', array($request->pid,0));    
        $brandList = DB::select('select * from product_brand where deleteflag = ?', array(0));
        $categoryList = DB::select('select * from product_category where deleteflag = ?', array(0));
        $statusList = array(
            array('0' , '上架銷售中'), 
            array('1' , '缺貨中') , 
            array('3' ,'即將開賣')
        );
        $colorList = array(
            array('0' , '金棕'), 
            array('1' , '銀') , 
            array('2' , '藍') , 
            array('3' , '粉紅') , 
            array('4' , '玫瑰金') , 
            array('5' , '黃銅') , 
            array('6' , '白銅') , 
            array('7' ,'銅')
        );
        $binding = [ 
            'user' => 'user',
            'result' => 'orders',
            'brandList' => $brandList,
            'statusList' => $statusList,
            'colorList' => $colorList,
            'categoryList' => $categoryList,
            'productEdit' => $productEdit
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
            weight=:weight,material=:material,origin=:origin,designer=:designer,spec=:spec,
            remark=:remark,status=:status 
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
                'spec' => $request->spec ,
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

    public function insert(Request $request)
    {
        try{
            $insertsql = 
            'insert into product ( pname, pgroup, mark, brand, category, price, productno, description, size, 
            color, pattern, capacity, weight, material, origin, designer, spec, remark, status) 
            values (:pname , :pgroup , :mark , :brand , :category , :price , :productno ,:description , :size, 
            :color , :pattern , :capacity ,:weight, :material, :origin, :designer, :spec, :remark, :status) ';

            DB::beginTransaction();
            DB::insert($insertsql , [
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
                'spec' => $request->spec ,
                'remark' => $request->remark ,
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
}


