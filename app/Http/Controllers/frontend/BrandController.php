<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function brand(Request $request)
    {
        //
        $bname = $request->route('bName');
        $binding = [
            'path' => 'home',
            'result' => 'brand',
            'bName' => $bname
        ];
        return view('frontend.brand.brand' , $binding);
    }

}
