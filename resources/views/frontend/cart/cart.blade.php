@extends('frontend.layouts.master')
@section('headerColor') header_inside header_black @endsection
@section('inside-menuColor') text-black @endsection

@section('metaDataCSRF')
    <meta name="csrf-token" content="{{ csrf_token()}}">
@endsection

@section('bodySections')

<section class="order-section01">
    <div class="container">
        <div class="order_white_con">
            <div class="order_main_title">1. 登入</div>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    請輸入手機號碼註冊新帳號，或是以現有帳號登入。
                    <div class="order_phone_input flex main_form">
                        <div class="flex-1">
                            <input type="tel" placeholder="您的手機號碼">
                        </div>
                        <div class="input_right_btn_div">
                            <a href="javascript:;" class="input_right_btn">送出</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a href="javascript:;" class="order_title_abtn">Silver Vip</a><br>
                    累計金額5萬NTD<br>
                    點數回饋 3 % +生日月提供點數300點
                    {{-- {{var_dump($cartOrderList)}}
                    {{var_dump($cartList)}} --}}
                </div>
            </div>
        </div>
    </div>
</section>
<form action="/cartCheckout" method="POST" id="cartCheckoutForm">
<section class="order-section02 main_form">
    <div class="container">
        <div class="order_white_con">
            <div class="order_main_title position-relative">
                <div class="order_main_title">2. 確認訂單明細　<div class="order_main_title_sub">共{{count($cartOrderList)}}個商品</div></div>
                <a href="javascript:;" class="order_main_title_abtn">客製服務介紹 &gt;</a>
            </div>
            <hr>
            <div class="order_list">
                <div class="order_list_title hide-lg">
                    <div class="row">
                        <div class="col-lg-3 order_list_th">商品資料</div>
                        <div class="col-lg-3 order_list_th">客製服務</div>
                        <div class="col-lg-2 order_list_th text-start">單件價格</div>
                        <div class="col-lg-1 order_list_th">數量</div>
                        <div class="col-lg-2 order_list_th text-start">小計</div>
                        <div class="col-lg-1 order_list_th"></div>
                    </div>
                </div>
                @foreach ($cartOrderList as $cartOrder)
                <div class="order_list_box">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="order_list_title_mobile show-lg">商品資料</div>
                            <div class="flex">
                                <div class="order_list_photo">
                                    <img src="/nousaku_html/images/new/img01.jpg">
                                </div>
                                <div class="flex-1">
                                    {{$cartOrder->pname}}
                                    <input type="hidden" id="pname" name="pname[{{$loop->index}}]" value="{{$cartOrder->pname}}"><br>
                                    {{$cartOrder->spec}}
                                    <input type="hidden" id="spec" name="spec[{{$loop->index}}]" value="{{$cartOrder->spec}}">
                                    <input type="hidden" id="productid_{{$loop->index}}" name="productid[{{$loop->index}}]" value="{{$cartOrder->productid}}">
                                    <input type="hidden" id="temp" name="temp" value="{{$totalPrice += $cartOrder->price}}">
                                    <input type="hidden" id="temp" name="temp" value="{{$checkPrice += $cartOrder->price}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 order_list_service_div">
                            <div class="order_list_title_mobile show-lg">客製服務</div>
                            <div class="input_row">無</div>
                            <div class="flex input_row">
                                <div class="order_list_service_input">
                                    <input type="hidden" id="extraService1temp_{{$loop->index}}" value="0">
                                    <select id="extraService1_{{$loop->index}}" name="extraService1[{{$loop->index}}]" onchange="countExtraService2({{$loop->index}})">
                                        <option class="hide" value="-1">選擇包裝</option>
                                        <option value="0">無包裝</option>
                                        <option value="1">一般包裝 +0</option>
                                        <option value="2">特殊包裝 +150</option>
                                    </select>
                                </div>
                                <div class="flex-1">
                                    <a href="javascript:;" onclick="popup('#popup_pack')" class="order_list_service_abtn">介紹</a>
                                </div>
                            </div>
                            <div class="flex input_row">
                                <div class="order_list_service_input">
                                    <label>
                                        <input type="hidden" name="extraService2[{{$loop->index}}]" value="3">
                                        <input type="checkbox" id="extraService2_{{$loop->index}}" 
                                        name="extraService2[{{$loop->index}}]" value="{{$loop->index}}">刻字服務 +350
                                    </label>
                                </div>
                                <div class="flex-1">
                                    <a href="javascript:;" onclick="popup('#popup_lettering')" class="order_list_service_abtn">編輯</a>
                                </div>
                            </div>
                            <div class="flex input_row">
                                <div class="order_list_service_input">
                                    <label>
                                        <input type="hidden" name="extraService3[{{$loop->index}}]" value="3">
                                        <input type="checkbox" id="extraService3_{{$loop->index}}" 
                                        name="extraService3[{{$loop->index}}]">萬用小卡 +0
                                    </label>
                                </div>
                                <div class="flex-1">
                                    <a href="javascript:;" onclick="popup('#popup_card')" class="order_list_service_abtn">編輯</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="order_list_title_mobile show-lg">單件價格</div>
                            <div class="input_row" id="productPriceDiv_{{$loop->index}}" >NT$ {{$cartOrder->price}} </div>
                            <input type="hidden" id="productPrice_{{$loop->index}}" name="productPrice[{{$loop->index}}]" value="{{$cartOrder->price}}">
                            <div class="input_row" id="extraServicePriceDiv_{{$loop->index}}" >NT$ 0</div>
                            <input type="hidden" id="extraServicePrice_{{$loop->index}}" name="extraServicePrice[{{$loop->index}}]" value="0">
                        </div>
                        <div class="col-lg-1 text-center text-lg-start">
                            <div class="order_list_title_mobile show-lg">數量</div>
                            <div class="input_row" id="qty">1</div>
                        </div>
                        <div class="col-lg-2">
                            <div class="order_list_title_mobile show-lg">小計</div>
                            <div class="input_row" id="firstPriceDiv_{{$loop->index}}">NT$ {{$cartOrder->price}}</div>
                            <input type="hidden" id="firstPrice_{{$loop->index}}" name="firstPrice[{{$loop->index}}]" value="{{$cartOrder->price}}">
                        </div>
                        <div class="col-lg-1 text-center order_list_btns_div">
                            <a href="" class="order_list_delete_btn" id="cartDelete_{{$loop->index}}">刪除</a>
                        </div>
                    </div>
                    <div class="order_list_box_udline"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="order-section03 main_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="order_white_con order_discount_box">
                    <div class="order_discount_box_title">適用優惠</div>
                    <div class="row input_row">
                        <div class="col-md-2">
                            <div class="order_discount_box_stitle brown">紅利點數</div>
                        </div>
                        <div class="col-md-6">
                            <div class="flex">
                                <div class="order_discount_input_text">999點</div>
                                <div class="flex-1">
                                    <input type="tel" placeholder="本次折抵">
                                </div>
                                <div class="input_right_btn_div">
                                    <a href="javascript:;" class="input_right_btn">送出</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <span class="order_discount_box_notice">一次最多能使用的點數額度為1000NTD</span>
                        </div>
                    </div>
                    <div class="row input_row">
                        <div class="col-md-2">
                            <div class="order_discount_box_stitle brown">禮物卷</div>
                        </div>
                        <div class="col-md-6">
                            <div class="flex">
                                <div class="flex-1">
                                    <input type="tel" placeholder="輸入禮物卷條碼編號">
                                </div>
                                <div class="input_right_btn_div">
                                    <a href="javascript:;" class="input_right_btn">送出</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="order_total_box">
                    <div class="flex input_row">
                        <div class="order_total_box_title">小計：</div>
                        <div class="flex-1 text-end" id="checkPriceDiv">NT$ {{$checkPrice}}</div>
                        <input type="hidden" name="checkPrice" id="checkPrice" value="{{$checkPrice}}">
                    </div>
                    <div class="flex input_row">
                        <div class="order_total_box_title"></div>
                        <div class="flex-1 text-end" id="discountPriceDiv">-NT$ 0</div>
                        <input type="hidden" name="discountPrice" id="discountPrice" value="">
                    </div>
                    <div class="flex order_total_box_total_div">
                        <div class="order_total_box_title">合計：</div>
                        <div class="flex-1 text-end order_total_box_total" id="totalPriceDiv" >NT$ {{$totalPrice}} </div>
                        <input type="hidden" name="totalPrice" id="totalPrice" value="{{$totalPrice}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="order-section04 main_form">
    <div class="container">
        <div class="order_white_con">
            <div class="order_main_title">3. 選擇送貨及付款方式</div>
            <hr>
            <div class="row order_personal_info">
                <div class="col-lg-6">
                    <div class="input_row_big">
                        <div class="input_title">收貨人</div>
                        <div class="input_row">
                            <input type="text" id="receiveName" name="receiveName" value="預設帶入會員資料"  required>
                        </div>
                        <div class="flex">
                            <div class="flex-1">
                                <input type="text" id="receiveMail" name="receiveMail" value="example@123.com" placeholder="email"  required>
                            </div>
                            <div class="input_right_btn_div">
                                <a href="javascript:;" class="input_right_btn">驗證</a>
                            </div>
                        </div>
                    </div>
                    <div class="input_row_big">
                        <div class="input_title">連絡電話</div>
                        <input type="text" id="receivePhone" name="receivePhone" value="預設帶入會員資料"  required>
                    </div>
                    <div class="input_row_big">
                        <div class="input_title">送貨地址</div>
                        <div class="flex input_row input_address_row">
                            <div class="input_address_div">
                                <select id="receivePost" name="receivePost">
                                    <option class="hide" value="-1">郵遞區號</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="input_address_div">
                                <select id="receiveCity" name="receiveCity">
                                    <option class="hide" value="-1">縣市</option>
                                    <option value="1">台北市</option>
                                </select>
                            </div>
                            <div class="input_address_div">
                                <select id="receiveDist" name="receiveDist" required>
                                    <option class="hide" value="-1">鄉鎮市區</option>
                                    <option value="1">中正區</option>
                                </select>
                            </div>
                        </div>
                        <input type="text" id="receiveAddr" name="receiveAddr" placeholder="地址" value="忠孝東路1號" required>
                    </div>
                    <div class="input_row_big">
                        <div class="input_title">付款方式</div>
                        <select id="payway" name="payway">
                            <option value="1">信用卡</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input_row_big">
                        <div class="input_title">電子發票資訊</div>
                        <div class="input_row">
                            <label>
                                <input type="radio" id="invoice" name="invoice" value="0" checked="checked">個人
                            </label>
                        </div>
                        <div class="input_row">
                            <label>
                                <input type="radio" id="invoice" name="invoice" value="1">公司戶
                            </label>
                        </div>
                    </div>
                    <div class="input_row_big">
                        <div class="input_title">統一編號</div>
                        <input type="text" id="unitId" name="unitId">
                    </div>
                    <div class="input_row_big">
                        <div class="input_title">發票抬頭</div>
                        <input type="text" id="invoiceTitle" name="invoiceTitle">
                    </div>
                    <div class="input_row_big">
                        電子發票會於訂單交易完成後，寄送至您的電子信箱
                    </div>
                </div>
            </div>
            <div class="order_agree_items">
                <div class="input_row_big">
                    <label>
                        <input type="checkbox" id="check1" name="check1">我同意辦理退／換貨時，將由能作代為處理銷售憑證(發票處理／銷售折讓) ，以利加速退款流程
                    </label>
                </div>
                <div class="input_row_big">
                    <label>
                        <input type="checkbox" id="check2" name="check2">我已經詳細閱讀，並同意接受能作<a href="javascript:;" class="order_agree_items_a">隱私權政策</a>與<a href="javascript:;" class="order_agree_items_a">服務條款</a>內容
                    </label>
                </div>
            </div>
            <div class="btn_div text-center">
                {{-- <a href="javascript:;" class="btn_yellow" id="checkOut">前往結帳</a> --}}
                @if (count($cartOrderList) < 1)
                    <button type="button" class="btn_yellow" id="keepShopping">繼續選購</button>
                @else
                    <button type="button" class="btn_yellow" id="checkOut">前往結帳</button>
                @endif
                
            </div>
        </div>
    </div>
</section>
</form>
	<!-- order_popup -->
	<!-- 包裝說明 -->
	<div class="popup" id="popup_pack">
		<div class="popup_bg"></div>
		<div class="order_popup_con">
			<div class="position-relative">
				<div class="order_popup_top_sub">費用 +0</div>
			</div>
			<div class="order_popup_title">一般包裝</div>
			<p>說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字</p>
			<img src="/nousaku_html/images/pack_pic01.jpg">
			<hr>
			<div class="position-relative">
				<div class="order_popup_top_sub">費用 +150</div>
			</div>
			<div class="order_popup_title">特殊包裝</div>
			<p>說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字</p>
			<img src="/nousaku_html/images/pack_pic02.jpg">
			<div class="btn_div">
				<a href="javascript:;" class="btn_yellow btn_fw popup_close">返回</a>
			</div>
		</div>
		<div class="popup_close_btn">
			<img src="/nousaku_html/images/btn_back.png">
		</div>
	</div>
	<!-- 刻字服務 -->
	<div class="popup" id="popup_lettering">
		<div class="popup_bg"></div>
		<div class="order_popup_con main_form">
			<div class="order_popup_title">刻字服務</div>
			<p>說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字</p>
			<form>
				<div class="input_row_md">
					<select class="select-center">
						<option class="hide">選擇字型樣式</option>
						<option>新細明體</option>
					</select>
				</div>
				<div class="input_row_md">
					<select class="select-center">
						<option class="hide">選擇字體大小</option>
						<option>16pt</option>
					</select>
				</div>
				<div class="input_row_md">
					<select class="select-center">
						<option class="hide">選擇雕刻位置</option>
						<option>上方</option>
					</select>
				</div>
				<div class="input_row_md">
					<select class="select-center">
						<option class="hide">橫書/直書</option>
						<option>橫書</option>
					</select>
				</div>
				<div class="input_row_md">
					<input type="text" placeholder="輸入文字(5字內)" class="text-center">
				</div>
			</form>
			<div class="popup_lettering_example">
				<div class="popup_lettering_example_title">說明參考</div>
				<div class="popup_lettering_example_btn">
					<img src="/nousaku_html/images/btn_open.png">
				</div>
				<div class="popup_lettering_example_con">
					<img src="/nousaku_html/images/words.png">
				</div>
			</div>
			<div class="btn_div row">
				<div class="col-6">
					<a href="javascript:;" class="btn_black btn_fw popup_close">返回</a>
				</div>
				<div class="col-6">
					<a href="javascript:;" class="btn_yellow btn_fw popup_close">儲存</a>
				</div>
			</div>
			<div class="popup_lettering_info">
				<p>注意事項</p>
				<p>注意事項 能作提供刻字服務，讓您可在商品篆刻中文、英文、數字、部分特殊符號。排版與字型大小則交由能作為您設計。下列限制字數僅供參考。由於字數或筆畫限制，我們可能無法依照您的需求提供服務。</p>
				<p>清酒杯類：4～5個字、 片口、暖酒壺類：5～6個字。、純錫杯、隨行杯類：5~6個字。無論是直書、橫書，限制行數皆為2行。</p>
				<p>文字內容欄一次可輸入多筆刻字需求，因此欄位內最多可輸入40個半形文字。但這並非是實際可篆刻之文字數，煩請留意。</p>
			</div>
		</div>
		<div class="popup_close_btn">
			<img src="/nousaku_html/images/btn_back.png">
		</div>
	</div>
	<!-- 萬用小卡 -->
	<div class="popup" id="popup_card">
		<div class="popup_bg"></div>
		<div class="order_popup_con main_form">
			<div class="position-relative">
				<div class="order_popup_top_sub">費用 +0</div>
			</div>
			<div class="order_popup_title">萬用小卡</div>
			<p>說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字</p>
			<img src="/nousaku_html/images/card_pic01.jpg">
			<hr>
			<p>小卡文字 (300字以內)</p>
			<textarea id="card_textarea"></textarea>
			<p>剩餘字元 <span class="brown" id="card_textnum">300</span><span class="brown">字</span></p>
			<div class="btn_div">
				<a href="javascript:;" class="btn_yellow btn_fw popup_close">送出</a>
			</div>
		</div>
		<div class="popup_close_btn">
			<img src="/nousaku_html/images/btn_back.png">
		</div>
	</div>
	<!-- 購物車 -->
	<div class="buycar">
		<div class="buycar_bg"></div>
		<div class="buycar_main">
			<div class="buycar_head">
				<div class="buycar_title">
					<div class="buycar_title_icon">
						<img src="/nousaku_html/images/tool_shopcar_black.png">
					</div>
					購物車
				</div>
			</div>
			<div class="buycar_list main_form">
				<div class="buycar_list_item">
					<div class="flex">
						<div class="buycar_item_img">
							<img src="/nousaku_html/images/index/product/06.jpg">
						</div>
						<div class="buycar_item_con">
							<div class="buycar_item_title">TAMA</div>
							<div class="buycar_item_sub">黃銅色</div>
							<div class="buycar_amount flex">
								<div class="buycar_amount_title">數量</div>
								<div class="amount_select flex">
									<div class="amount_select_btn left">
										<div><img src="/nousaku_html/images/btn_minus.png"></div>
									</div>
									<div class="amount_select_input">
										<input type="text" value="0">
									</div>
									<div class="amount_select_btn right">
										<div><img src="/nousaku_html/images/btn_plus.png"></div>
									</div>
								</div>
							</div>
							<div class="buycar_item_price">NT$2,650</div>
						</div>
					</div>
					<a href="javascript:;" class="buycar_delete_btn">刪除</a>
					<div class="buycar_list_item_botline"><div></div></div>
				</div>
				<div class="buycar_list_item">
					<div class="flex">
						<div class="buycar_item_img">
							<img src="/nousaku_html/images/index/product/06.jpg">
						</div>
						<div class="buycar_item_con">
							<div class="buycar_item_title">TAMA</div>
							<div class="buycar_item_sub">黃銅色</div>
							<div class="buycar_amount flex">
								<div class="buycar_amount_title">數量</div>
								<div class="amount_select flex">
									<div class="amount_select_btn left">
										<div><img src="/nousaku_html/images/btn_minus.png"></div>
									</div>
									<div class="amount_select_input">
										<input type="text" value="0">
									</div>
									<div class="amount_select_btn right">
										<div><img src="/nousaku_html/images/btn_plus.png"></div>
									</div>
								</div>
							</div>
							<div class="buycar_item_price">NT$2,650</div>
						</div>
					</div>
					<a href="javascript:;" class="buycar_delete_btn">刪除</a>
					<div class="buycar_list_item_botline"><div></div></div>
				</div>
				<div class="buycar_list_item">
					<div class="flex">
						<div class="buycar_item_img">
							<img src="/nousaku_html/images/index/product/06.jpg">
						</div>
						<div class="buycar_item_con">
							<div class="buycar_item_title">TAMA</div>
							<div class="buycar_item_sub">黃銅色</div>
							<div class="buycar_amount flex">
								<div class="buycar_amount_title">數量</div>
								<div class="amount_select flex">
									<div class="amount_select_btn left">
										<div><img src="/nousaku_html/images/btn_minus.png"></div>
									</div>
									<div class="amount_select_input">
										<input type="text" value="0">
									</div>
									<div class="amount_select_btn right">
										<div><img src="/nousaku_html/images/btn_plus.png"></div>
									</div>
								</div>
							</div>
							<div class="buycar_item_price">NT$2,650</div>
						</div>
					</div>
					<a href="javascript:;" class="buycar_delete_btn">刪除</a>
					<div class="buycar_list_item_botline"><div></div></div>
				</div>
			</div>
			<div class="buycar_result">
				<div class="buycar_total">總額 NT$2,650</div>
				<div class="buycar_result_info">折扣與運費，會於付款流程畫面中顯示</div>
				<div class="row">
					<div class="col-6">
						<a href="javascript:;" class="btn_yellow btn_fw">繼續購物</a>
					</div>
					<div class="col-6">
						<a href="javascript:;" class="btn_yellow btn_fw">前往結帳</a>
					</div>
				</div>
			</div>
		</div>
		<div class="buycar_close">×</div>
	</div>
    <script>
        $(function(){
            $('#keepShopping').on('click' , function(e){
                location.assign("/productsAll");
            });
            $('#checkOut').on('click' , function(e){
                if ($('#check1').is(':checked')) {
                    if ($('#check2').is(':checked')) {
                        $("#cartCheckoutForm").submit();
                    } 
                    else 
                    {
                        alert('請同意隱私權政策與服務條款內容!');
                    }   
                } 
                else 
                {
                    alert('請同意代為處理銷售憑證!');
                }
            });

            $("#cartCheckoutForm").on("submit" , function(e){
                e.preventDefault();
                var postData = $(this).serializeArray();
                var formUrl = $(this).attr("action");
                $.ajaxSetup({
                    headers : {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: formUrl,
                    type: "POST",
                    data: postData,
                    success:function (data , textStatus , jqXHR) {
                        alert(data.msg);
                        location.assign("/cartOrder/" + data.orderid);
                    },
                    error: function (jqXHR , status , error){
                        alert(stauts + " : " + error);
                    }
                });

            });
        
            $("input[name^='extraService2']").change(function (e) {

                countExtraService($(this).val());
                checked = $(this)
                //判斷是否選取
                if ($(this).is(':checked')) {
                } 
                else 
                {
                }
            });

        });
        function countExtraService(index)
        {
            var extraPrice = $("#extraServicePrice_" + index).val();
            var firstPrice = $("#firstPrice_" + index).val();
            var checkPrice = $("#checkPrice").val();
            var totalPrice = $("#totalPrice").val();
            if($("#extraService2_" + index).prop("checked"))
            {
                extraPrice = parseInt(extraPrice) + 350;
                firstPrice = parseInt(firstPrice) + 350;
                checkPrice = parseInt(checkPrice) + 350;
                totalPrice = parseInt(totalPrice) + 350;
            }
            else
            {
                extraPrice = parseInt(extraPrice) - 350;
                firstPrice = parseInt(firstPrice) - 350;
                checkPrice = parseInt(checkPrice) - 350;
                totalPrice = parseInt(totalPrice) - 350;
            }
            $("#extraServicePriceDiv_" + index).html('NT$ ' + extraPrice);
            $("#extraServicePrice_" + index).val(extraPrice);
            $("#firstPriceDiv_" + index).html('NT$ ' + firstPrice);
            $("#firstPrice_" + index).val(firstPrice);
            $("#checkPriceDiv").html('NT$ ' + checkPrice);
            $("#checkPrice").val(checkPrice);
            $("#totalPriceDiv").html('NT$ ' + totalPrice);
            $("#totalPrice").val(totalPrice);
        };
        function countExtraService2(index)
        {
            var extraPrice = $("#extraServicePrice_" + index).val();
            var firstPrice = $("#firstPrice_" + index).val();
            var checkPrice = $("#checkPrice").val();
            var totalPrice = $("#totalPrice").val();

            if($("#extraService1_" + index).val() == 2)
            {
                extraPrice = parseInt(extraPrice) + 150;
                firstPrice = parseInt(firstPrice) + 150;
                checkPrice = parseInt(checkPrice) + 150;
                totalPrice = parseInt(totalPrice) + 150;
                $("#extraService1temp_" + index).val(1);
            }
            else if($("#extraService1temp_" + index).val() == 1)
            {
                extraPrice = parseInt(extraPrice) - 150;
                firstPrice = parseInt(firstPrice) - 150;
                checkPrice = parseInt(checkPrice) - 150;
                totalPrice = parseInt(totalPrice) - 150;
                $("#extraService1temp_" + index).val(0);
            }
            $("#extraServicePriceDiv_" + index).html('NT$ ' + extraPrice);
            $("#extraServicePrice_" + index).val(extraPrice);
            $("#firstPriceDiv_" + index).html('NT$ ' + firstPrice);
            $("#firstPrice_" + index).val(firstPrice);
            $("#checkPriceDiv").html('NT$ ' + checkPrice);
            $("#checkPrice").val(checkPrice);
            $("#totalPriceDiv").html('NT$ ' + totalPrice);
            $("#totalPrice").val(totalPrice);
            
        };
    </script>
@endsection