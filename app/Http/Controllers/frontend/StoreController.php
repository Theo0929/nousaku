<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stores()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'store',
        ];
        return view('frontend.store.stores' , $binding);
    }
    public function storeDetails()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'storeDetails',
        ];
        return view('frontend.store.storeDetails' , $binding);
    }

}
