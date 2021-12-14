@extends('frontend.layouts.master')
@section('headerColor') header_inside header_black @endsection
@section('inside-menuColor') text-black @endsection

@section('metaDataCSRF')
    <meta name="csrf-token" content="{{ csrf_token()}}">
@endsection

@section('bodySections')
@foreach ($cartOrderList as $citem)
<section class="order-section01">
    <div class="container">
        <div class="order_white_con">
            <div class="position-relative">
                <p>您的訂單編號</p>
                <div class="order_serial">{{$orderid}}
                </div>
                <div class="order_time">
                    訂購日期<br>
                    {{$citem->createdate}}
                </div>
            </div>
            <hr>
            <br>
            <div class="order_f_subtitle">您的訂單詳情</div>
            <div class="order_list">
                <div class="order_list_title hide-lg">
                    <div class="row">
                        <div class="col-lg-3 order_list_th">商品資料</div>
                        <div class="col-lg-4 order_list_th">客製服務</div>
                        <div class="col-lg-2 order_list_th text-start">單件價格</div>
                        <div class="col-lg-1 order_list_th">數量</div>
                        <div class="col-lg-2 order_list_th text-start">小計</div>
                    </div>
                </div>
                @foreach ($cartOrderProductList as $cpitem)
                <div class="order_list_box">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="order_list_title_mobile show-lg">商品資料</div>
                            <div class="flex">
                                <div class="order_list_photo">
                                    <img src="/nousaku_html/images/new/img01.jpg">
                                </div>
                                <div class="flex-1">
                                    {{$cpitem->pname}}<br>
                                    {{$cpitem->spec}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 order_list_service_div">
                            <div class="order_list_title_mobile show-lg">客製服務</div>
                            <div class="input_row">無</div>
                            <div class="input_row">
                                @if ($cpitem->extraservice1 == 0)
                                    無包裝
                                @elseif($cpitem->extraservice1 == 1)
                                一般包裝 +0
                                @elseif($cpitem->extraservice1 == 2)
                                特殊包裝 +150
                                @endif
                            </div>
                            <div class="flex input_row">
                                <div class="order_list_service_input">
                                    @if ($cpitem->extraservice2 != "")
                                        刻字服務 +350
                                    @else
                                        無刻字服務
                                    @endif
                                    </div>
                                <div class="flex-1">
                                    <a href="javascript:;" onclick="popup('#popup_lettering')" class="order_list_service_abtn">詳情</a>
                                </div>
                            </div>
                            <div class="flex input_row">
                                <div class="order_list_service_input">
                                    @if ($cpitem->extraservice3 != "")
                                        萬用小卡 +0
                                    @else
                                        無萬用小卡
                                    @endif
                                </div>
                                <div class="flex-1">
                                    <a href="javascript:;" onclick="popup('#popup_card')" class="order_list_service_abtn">詳情</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="order_list_title_mobile show-lg">單件價格</div>
                            <div class="input_row">NT$ {{$cpitem->productprice}} </div>
                            <div class="input_row">NT$ {{$cpitem->extraserviceprice}}</div>
                        </div>
                        <div class="col-lg-1 text-center text-lg-start">
                            <div class="order_list_title_mobile show-lg">數量</div>
                            1
                        </div>
                        <div class="col-lg-2">
                            <div class="order_list_title_mobile show-lg">小計</div>
                            NT$ {{$cpitem->firstprice}}
                        </div>
                    </div>
                    <div class="order_list_box_udline"></div>
                </div>
                @endforeach

            </div>
            <hr>
            <div class="row">
                <div class="col-lg-9">
                    <div class="order_discount_box">
                        <div class="order_discount_box_title">適用優惠</div>
                        <div class="flex input_row">
                            <div class="order_f_discount_title">
                                <div class="brown">紅利點數</div>
                            </div>
                            <div class="flex-1">999點</div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="order_total_box">
                        <div class="flex input_row">
                            <div class="order_total_box_title">小計：</div>
                            <div class="flex-1 text-end">NT$ {{$citem->checkprice}}</div>
                        </div>
                        <div class="flex input_row">
                            <div class="order_total_box_title"></div>
                            <div class="flex-1 text-end">-NT$ {{$citem->discountprice}}</div>
                        </div>
                        <div class="flex order_total_box_total_div">
                            <div class="order_total_box_title">合計：</div>
                            <div class="flex-1 text-end order_total_box_total">NT$ {{$citem->totalprice}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order-section04 main_form">
    <div class="container">
        <div class="order_white_con">
            <div class="order_main_title">選擇送貨及付款方式</div>
            <hr>
            <div class="row order_personal_info">
                <div class="col-lg-6">
                    <div class="input_row_big">
                        <div class="input_title">收貨人</div>
                        <div class="input_row order_personal_info_text">
                            {{$citem->receivename}}<br>
                            {{$citem->receivemail}}
                        </div>
                    </div>
                    <div class="input_row_big">
                        <div class="input_title">連絡電話</div>
                        <div class="input_row order_personal_info_text">{{$citem->receivephone}}</div>
                    </div>
                    <div class="input_row_big">
                        <div class="input_title">送貨地址</div>
                        <div class="input_row order_personal_info_text">{{$citem->receiveaddr}}</div>
                    </div>
                    <div class="input_row_big">
                        <div class="input_title">付款方式</div>
                        <div class="input_row order_personal_info_text">
                            @if ($citem->payway == "0")
                                信用卡
                            @else
                                無信用卡
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input_row_big">
                        <div class="input_title">電子發票資訊</div>
                        <div class="input_row order_personal_info_text">
                            @if ($citem->invoice == "0")
                                個人
                            @else
                                公司
                            @endif
                        </div>
                    </div>
                    <div class="input_row_big">
                        <div class="input_title">統一編號</div>
                        <div class="input_row order_personal_info_text">{{$citem->unitid}}</div>
                    </div>
                    <div class="input_row_big">
                        <div class="input_title">發票抬頭</div>
                        <div class="input_row order_personal_info_text">{{$citem->invoicetitle}}</div>
                    </div>
                </div>
            </div>
            <div class="btn_div text-center">
                <a href="/productsAll" class="btn_yellow">繼續選購</a>
            </div>
        </div>
    </div>
</section>
	<!-- order_popup -->
	<!-- 刻字服務 -->
	<div class="popup" id="popup_lettering">
		<div class="popup_bg"></div>
		<div class="order_popup_con">
			<div class="order_popup_title">刻字服務</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="flex input_row_md">
						<div class="popup_lettering_title">字型樣式</div>
						<div class="flex-1 bold">行書</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="flex input_row_md">
						<div class="popup_lettering_title">選擇字體大小</div>
						<div class="flex-1 bold">大</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="flex input_row_md">
						<div class="popup_lettering_title">選擇雕刻位置</div>
						<div class="flex-1 bold">中間</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="flex input_row_md">
						<div class="popup_lettering_title">橫書/直書</div>
						<div class="flex-1 bold">直書</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="flex input_row_md">
						<div class="popup_lettering_title">輸入文字</div>
						<div class="flex-1 bold">輸入文字輸入文字</div>
					</div>
				</div>
			</div>
			<div class="btn_div">
				<a href="javascript:;" class="btn_yellow btn_fw popup_close">確認</a>
			</div>
		</div>
		<div class="popup_close_btn">
			<img src="/nousaku_html/images/btn_back.png">
		</div>
	</div>
	<!-- 萬用小卡 -->
	<div class="popup" id="popup_card">
		<div class="popup_bg"></div>
		<div class="order_popup_con">
			<div class="order_popup_title">萬用小卡</div>
			<div class="order_popup_title_sub">小卡文字</div>
			<p class="bold">小卡文字小卡文字小卡文字小卡文字小卡文字小卡文字小卡文字小卡 文字小卡文字小卡文字小卡文字小卡文字小卡文字小卡文字小卡文字 小卡文字小卡文字小卡文字小卡文字小卡文字小卡文字小卡文字小卡 文字小卡文字小卡文字小卡文字小卡文字小卡文字小卡文字</p>
			<div class="btn_div">
				<a href="javascript:;" class="btn_yellow btn_fw popup_close">確認</a>
			</div>
		</div>
		<div class="popup_close_btn">
			<img src="/nousaku_html/images/btn_back.png">
		</div>
	</div>

@endforeach
    <script>
       
    </script>
@endsection