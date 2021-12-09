<?php

namespace App\Http\Controllers\Backend;

use App\http\Controllers\Controller;
use Illuminate\Http\Request;

class OCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ocardindex ()
    {
        //
        // $ocardSendMsg = [
        //     'key' => 'nousaku_web',
        //     'secret' => 'qts30krukw044cu3cwuegr2zaofaqhaf',
        //     'for_web' => '1'
        // ];

        $ocardSendMsg = [
            'key' => 'ocard_pos',
            'secret' => 'd8db49fe7770c8d84f50e6e07cc457a3',
            'for_web' => '1'
        ];
        $ocardToken = $this->httpRequestCurl('https://api.ocard.co/api2/auth/' , $ocardSendMsg);

        $user = 'ocardmember';
        $binding = [
            'user' => $user,
            'result' => $ocardToken,
        ];
        return view('backend.OCard.ocardindex' , $binding);
    }
    public function ocardtest (Request $request)
    {
        //
        // $ocardSendMsg = [
        //     'key' => 'nousaku_web',
        //     'secret' => 'qts30krukw044cu3cwuegr2zaofaqhaf',
        //     'for_web' => '1'
        // ];
        // $ocardToken = $this->httpRequestCurl('https://api.ocard.co/api2/auth/' , $ocardSendMsg);

        // $ocardSendMsg = [
        //     'uid' => $ocardToken->data->uid,
        //     'token' => $ocardToken->data->token,
        //     'cell' => $request->cell,
        //     'field' => 'point,vip,coupon,coupon_group,spend,record,cash_discount,
        //     tag,carrier,last_visit,next_vip,line_id,month_spend,deposit'
        // ];

        $ocardSendMsg = [
            'uid' => $request->uid,
            'token' => $request->token,
            'cell' => $request->cell,
            'field' => 'point,vip,coupon,coupon_group,spend,record,cash_discount,
            tag,carrier,last_visit,next_vip,line_id,month_spend,deposit'
        ];

        $ocardToken = $this->httpRequestCurl('https://api.ocard.co/api2/getProfile/' , $ocardSendMsg);

        $user = 'ocardmember';
        $binding = [
            'user' => $user,
            'result' => $ocardToken,
        ];
        return view('backend.OCard.ocardtest' , $binding);
    }
    function httpRequestCurl($api, $data_string) {

        $proxy = 'proxy.cht.com.tw:8080';
        $ch = curl_init($api);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data_string));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'content-type:application/x-www-form-urlencoded; ',
            'charset=UTF-8' ));
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
