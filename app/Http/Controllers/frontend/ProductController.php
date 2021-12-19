<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products($category = 0)
    {
        //
        $binding = $this->getProductsAll($category);
        return view('frontend.product.products' , $binding);
    }
    public function productsAll($category = 0)
    {
        //
        //$productList = DB::select('select * from product where deleteflag = ?  group by pgroup', array(0));
        
        $binding = $this->getProductsAll($category);

        return view('frontend.product.productsAll' , $binding);
    }
    public function productsNew()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'products',
        ];
        return view('frontend.product.productsNew' , $binding);
    }
    public function productsDetails(Request $request)
    {
        //
        $productEdit = DB::table('product')
                ->where('productid', $request->pid)
                ->where('deleteflag',0)
                ->first();
        
        $specList = DB::select('select spec , color , productid from product where deleteflag = ? and pgroup = ? group by spec , color ,productid', 
                array(0 , $productEdit->pgroup));    
        
        $binding = [ 
            'user' => 'user',
            'result' => 'productsDetails',
            'specList' => $specList,
            'productEdit' => $productEdit
        ];

        return view('frontend.product.productsDetails' , $binding);
    }
    public function productSection04()
    {        
        $productList = DB::select('select * from product where deleteflag = ?', array(0));
        $brandList = DB::select('select * from product_brand where deleteflag = ?', array(0));
        $categoryList = DB::select('select * from product_category where deleteflag = ?', array(0));
        $statusList = array(
            array('0' , '上架銷售中'), 
            array('1' , '缺貨中') , 
            array('3' ,'即將開賣')
        );
        $binding = [
            'path' => 'home',
            'result' => 'products',
            'brandList' => $brandList,
            'statusList' => $statusList,
            'categoryList' => $categoryList,
            'productList' => $productList,
        ];

         return view('frontend.product.pSection04' , $binding);
        //return view('frontend.product.p1' , $binding);
    }

    private function getProductsAll($category)
    {
        $categoryName = "";
        if ($category == 0) {
            
            $productList = DB::select('select * from product where deleteflag = ? group by pgroup', array(0));
            $productList1 = DB::select('select * from product where deleteflag = ? and pgroup is null' , array(0));
            $productList += $productList1 ;
        }
        else
        {
            $categorySelected = DB::table('product_category')
            ->where('deleteflag' , 0)
            ->where('pcid' , $category)
            ->first();
            $categoryName = $categorySelected -> pcname;
            $productList = DB::select('select * from product where deleteflag = ? and category = ? group by pgroup', array(0, $category));
            $productList1 = DB::select('select * from product where deleteflag = ? and category = ? and pgroup is null' , array(0 , $category));
            $productList += $productList1 ;
        }

        $productListBrand = array();

        $brandList = DB::select('select * from product_brand where deleteflag = ?', array(0));
        
        $categoryList = DB::select('select * from product_category where deleteflag = ?', array(0));
        $statusList = array(
            array('0' , '上架銷售中'), 
            array('1' , '缺貨中') , 
            array('3' ,'即將開賣')
        );
        $binding = [
            'path' => 'home',
            'result' => 'products',
            'brandList' => $brandList,
            'statusList' => $statusList,
            'categoryList' => $categoryList,
            'productList' => $productList,
            'productListBrand' => $productListBrand,
            'categoryName' => $categoryName
        ];
        return $binding;
    }
}
