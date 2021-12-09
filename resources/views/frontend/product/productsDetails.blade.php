@extends('frontend.layouts.master')

@section('headerColor') header_inside header_black @endsection
@section('inside-menuColor') text-black @endsection

@section('bodySections')

<section class="products2-1-1-section01">
    <div class="container-custom">
        <div class="row">
            <div class="col-lg-8">
                <h2>製品一覽</h2>
                <div class="product2_slider_nav">
                    <div class="product2_slider_nav-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider_nav-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step02.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider_nav-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider_nav-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step04.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider_nav-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step05.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider_nav-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step06.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider_nav-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step06.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product2_slider">
                    <div class="product2_slider-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step02.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step04.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step05.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step06.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product2_slider-item">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/about/02/step06.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h3><span>irodori</span>飾品</h3>

                <div class="with-btn">
                    <h2>黃銅搖鈴 - 細</h2>
                    <a class="follow-bnt" href="">加入追蹤</a>
                </div>
                
                <ul class="nav color-list">
                    <li class="gold">金色</li>
                    <li class="silver">銀色</li>
                    <li class="rose-gold">玫瑰金</li>
                </ul>

                <div class="products-collapse-wrap">
                    <a class="toggle-btn" href="javascript:;" data-toggle="collapse" data-target="#products-collapse" aria-expanded="false" aria-controls="collapseExample">
                        <span></span>
                    </a>
                    <div class="collapse show" id="products-collapse">
                      <p>
                            極簡風格、滑順質感的桌上型黃銅搖鈴。運用富山縣高岡市傳統鑄造產業培育出來的鑄造技術，融合了現代生活的簡約造型。讓您每天享受黃銅獨特的清澈音色。
                        </p>
                    </div>
                </div>
                
                <ul class="nav detail-list">
                    <li><span>商品尺寸</span>H121φ40 mm</li>
                    <li><span>材質</span>黃銅（銅60%・鋅40%）</li>
                    <li><span>外箱尺寸</span>H57 W216 D70 mm</li>
                    <li><span>產地</span>日本富山縣</li>
                    <li><span>重量（含外箱）</span>229 g</li>
                    <li><span>製造方式</span>手工鑄造</li>
                </ul>
                <form action="">
                    <div class="form-group form-custom color-select gold">
                        <select class="form-control" id="">
                            <option>金色</option>
                            <option>銀色</option>
                            <option>玫瑰金</option>
                        </select>
                    </div>
                    <div class="form-group form-custom">
                        <select class="form-control" id="">
                            <option>H121φ40 mm</option>
                            <option>H121φ40 mm</option>
                            <option>H121φ40 mm</option>
                        </select>
                    </div>
                    <div class="form-group form-custom">
                        <select class="form-control" id="">
                            <option>H121φ40 mm</option>
                            <option>H121φ40 mm</option>
                            <option>H121φ40 mm</option>
                        </select>
                    </div>
                    <div class="qtyform" id='postform' method='POST' action='#'>
                        <input type='button' value='-' class='qtyminus' field='quantity' />
                        <input type='text' name='quantity' value='0' class='qty' />
                        <input type='button' value='+' class='qtyplus' field='quantity' />
                    </div>
                    <h4>NT$ 1,900</h4>
                    <button type="submit" class="btn btn-cart">
                        加入購物車
                    </button>
                </form>
                <ul class="nav share-list-2 justify-content-center">
                    <li><a class="icon_fb" href=""></a></li>
                    <li><a class="icon_tweet" href=""></a></li>
                    <li><a class="icon_pin" href=""></a></li>
                    <li><a class="icon_G" href=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="products2-1-1-section02">
    <div class="container-custom">
        <div class="row">
            <ul class="nav cart-detail-tab justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="">刻字服務</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">免費包裝服務</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">企業採購方案</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">能作製品保養</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">購物須知</a>
                </li>
            </ul>
        </div>
        <div class="product3_slider custom-arrow4">
            <a class="product3_slider-item" href="">
                <div class="img-wrap">
                    <div class="img-item">
                        <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                    </div>
                </div>
                <p>黃銅花型底座</p>
            </a>
            <a class="product3_slider-item" href="">
                <div class="img-wrap">
                    <div class="img-item">
                        <img src="/nousaku_html/images/index/product/02.jpg" alt="">
                    </div>
                </div>
                <p>黃銅花型底座</p>
            </a>
            <a class="product3_slider-item" href="">
                <div class="img-wrap">
                    <div class="img-item">
                        <img src="/nousaku_html/images/index/product/03.jpg" alt="">
                    </div>
                </div>
                <p>黃銅花型底座</p>
            </a>
            <a class="product3_slider-item" href="">
                <div class="img-wrap">
                    <div class="img-item">
                        <img src="/nousaku_html/images/index/product/04.jpg" alt="">
                    </div>
                </div>
                <p>黃銅花型底座</p>
            </a>
            <a class="product3_slider-item" href="">
                <div class="img-wrap">
                    <div class="img-item">
                        <img src="/nousaku_html/images/index/product/05.jpg" alt="">
                    </div>
                </div>
                <p>黃銅花型底座</p>
            </a>
            <a class="product3_slider-item" href="">
                <div class="img-wrap">
                    <div class="img-item">
                        <img src="/nousaku_html/images/index/product/06.jpg" alt="">
                    </div>
                </div>
                <p>黃銅花型底座</p>
            </a>
            <a class="product3_slider-item" href="">
                <div class="img-wrap">
                    <div class="img-item">
                        <img src="/nousaku_html/images/index/product/03.jpg" alt="">
                    </div>
                </div>
                <p>黃銅花型底座</p>
            </a>
            <a class="product3_slider-item" href="">
                <div class="img-wrap">
                    <div class="img-item">
                        <img src="/nousaku_html/images/index/product/05.jpg" alt="">
                    </div>
                </div>
                <p>黃銅花型底座</p>
            </a>
        </div>
    </div>
</section>

<section class="products2-1-1-section03">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>您瀏覽的製品</h2>
                <div class="product4_slider custom-arrow5">
                    <a class="product4_slider-item" href="">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                            </div>
                        </div>
                        <p>黃銅花型底座</p>
                    </a>
                    <a class="product4_slider-item" href="">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/index/product/02.jpg" alt="">
                            </div>
                        </div>
                        <p>黃銅花型底座</p>
                    </a>
                    <a class="product4_slider-item" href="">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/index/product/03.jpg" alt="">
                            </div>
                        </div>
                        <p>黃銅花型底座</p>
                    </a>
                    <a class="product4_slider-item" href="">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/index/product/04.jpg" alt="">
                            </div>
                        </div>
                        <p>黃銅花型底座</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>其他人也看了</h2>
                <div class="product4_slider custom-arrow5">
                    <a class="product4_slider-item" href="">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                            </div>
                        </div>
                        <p>黃銅花型底座</p>
                    </a>
                    <a class="product4_slider-item" href="">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/index/product/02.jpg" alt="">
                            </div>
                        </div>
                        <p>黃銅花型底座</p>
                    </a>
                    <a class="product4_slider-item" href="">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/index/product/03.jpg" alt="">
                            </div>
                        </div>
                        <p>黃銅花型底座</p>
                    </a>
                    <a class="product4_slider-item" href="">
                        <div class="img-wrap">
                            <div class="img-item">
                                <img src="/nousaku_html/images/index/product/04.jpg" alt="">
                            </div>
                        </div>
                        <p>黃銅花型底座</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section06">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="" class="news_slider-item">
                    <div class="img-wrap">
                        <div class="img-item">
                            <img src="/nousaku_html/images/about/list_02.jpg" alt="">
                        </div>
                    </div>
                    <p class="text-date">日本酒與能作的酒器</p>
                    <p class="text-content over-3">是由100％錫鑄鐵和富山特產“ Etsunaka Toyama Sachi no Koseki”品牌製成的Nousaku清酒套裝。</p>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="" class="news_slider-item">
                    <div class="img-wrap">
                        <div class="img-item">
                            <img src="/nousaku_html/images/about/list_03.jpg" alt="">
                        </div>
                    </div>
                    <p class="text-date">何不給親人一個特殊的“春天”</p>
                    <p class="text-content over-3">柔軟而溫和的光澤適合您的手。它反映了人們甚至他們的內心的溫暖，並世代相傳。</p>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection