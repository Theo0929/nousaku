@extends('frontend.layouts.master')

@section('headerColor') header_inside header_black @endsection
@section('inside-menuColor') text-black @endsection

@section('bodySections')

<section class="products-section-kv">
    <div class="title">製品</div>
    <div class="title2">Products</div>
</section>

<div id="productSct04">
<section class="section04">
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-lg-3 product-sidebar">
                <h2>製品一覽</h2>
                <ul class="product-list mb-30 d-lg-block d-none">
                    @foreach ($categoryList as $citem)
                        <li><a href="/category/{{$citem->pcid}}">{{$citem->pcname}}</a></li>
                    @endforeach
                    
                </ul>
                <div class="input-group d-lg-flex d-none">
                    <input type="text" class="form-control" placeholder="〜 NT 5，000">
                    <div class="input-group-append">
                        <button class="btn" type="button" id="button-addon2">
                            <img src="/nousaku_html/images/index/menu/search.png" onmouseover="this.src='images/index/menu/search_hover.png'" onmouseout="this.src='images/index/menu/search.png'" alt="" />
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="product-wrap">
                    <div class="d-lg-block d-none">
                        <ul class="product_slider custom-arrow3">
                            @foreach ($brandList as $bitem)
                            <li>{{$bitem->pbname}}</li>
                            @endforeach
                            <li>新製品</li>
                        </ul>
                    </div>
                    
                    <div class="product_slider_nav">
                        @foreach ($brandList as $bitem)
                        <div class="product_slider_nav-item">
                            <div class="product-title">
                                {{$bitem->pbname}}
                            </div>
                            <div class="row show-more-item{{$loop->index + 1}}">
                                <a href="/productsDetails/1015" class="product-item col-lg-3 col-6">
                                    <div class="img-wrap">
                                        <div class="img-item">
                                            <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                                        </div>
                                    </div>
                                    <p>貝爾·斯利姆</p>
                                </a>
                                
                            </div>
                            <div class="row show-more-item{{$loop->index + 1}}">
                                <a href="/productsDetails/1015" class="product-item col-lg-3 col-6">
                                    <div class="img-wrap">
                                        <div class="img-item">
                                            <img src="/nousaku_html/images/index/product/02.jpg" alt="">
                                        </div>
                                    </div>
                                    <p>啤酒杯</p>
                                </a>
                                
                            </div>
                            <div class="text-center">
                                <a href="javascript:;" class="show-more-btn{{$loop->index + 1}}">
                                    更多製品
                                </a>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection