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
    public function cartAdd(Request $request)
    {
        //
        try{
            
            //Session::push();
            $msg = $request->specList;
        }
        catch(Exception $exception)
        {
            
            $msg = "更新失敗";
        }

        $binding = [
            'msg' => $msg,
        ];
        return response()->json( $binding , 200);
    }
    
}
