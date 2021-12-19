@extends('frontend.layouts.master')

@section('headerColor') header_inside header_black @endsection
@section('inside-menuColor') text-black @endsection

@section('bodySections')

<section class="products-section-kv">
    <div class="title">製品</div>
    <div class="title2">Products</div>
</section>

<section class="products-section01">
    <div class="container">
        <h2>新製品<br>New products</h2>
    </div>
    <div class="products_slider custom-arrow2">
        <div class="products_slider-item">
            <div class="img-wrap">
                <div class="img-item">
                    <img src="/nousaku_html/images/index/news/01.jpg" alt="">
                </div>
            </div>
            <div class="products_slider-hover">
                <div class="products_slider-hover-item">
                    <div class="img-wrap">
                        <div class="img-item">
                            <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-item">
                        <h4>Snowflakes - S</h4>
                        <p>H65φ18 <br> H121φ37</p>
                        <a class="d-inline-block justify-content-end" href="">
                            <img src="/nousaku_html/images/index/menu/tool_shopcar_hover.png">
                            <img src="/nousaku_html/images/index//enter.png">
                        </a>
                        <ul class="nav color-list">
                            <li class="gold"></li>
                            <li class="silver"></li>
                            <li class="rose-gold"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="products_slider-item">
            <div class="img-wrap">
                <div class="img-item">
                    <img src="/nousaku_html/images/index/news/02.jpg" alt="">
                </div>
            </div>
            <div class="products_slider-hover">
                <div class="products_slider-hover-item">
                    <div class="img-wrap">
                        <div class="img-item">
                            <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-item">
                        <h4>Snowflakes - S</h4>
                        <p>H65φ18 <br> H121φ37</p>
                        <a class="d-inline-block justify-content-end" href="">
                            <img src="/nousaku_html/images/index/menu/tool_shopcar_hover.png">
                            <img src="/nousaku_html/images/index//enter.png">
                        </a>
                        <ul class="nav color-list">
                            <li class="gold"></li>
                            <li class="silver"></li>
                            <li class="rose-gold"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="products_slider-item">
            <div class="img-wrap">
                <div class="img-item">
                    <img src="/nousaku_html/images/index/news/03.jpg" alt="">
                </div>
            </div>
            <div class="products_slider-hover">
                <div class="products_slider-hover-item">
                    <div class="img-wrap">
                        <div class="img-item">
                            <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-item">
                        <h4>Snowflakes - S</h4>
                        <p>H65φ18 <br> H121φ37</p>
                        <a class="d-inline-block justify-content-end" href="">
                            <img src="/nousaku_html/images/index/menu/tool_shopcar_hover.png">
                            <img src="/nousaku_html/images/index//enter.png">
                        </a>
                        <ul class="nav color-list">
                            <li class="gold"></li>
                            <li class="silver"></li>
                            <li class="rose-gold"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="products_slider-item">
            <div class="img-wrap">
                <div class="img-item">
                    <img src="/nousaku_html/images/index/news/04.jpg" alt="">
                </div>
            </div>
            <div class="products_slider-hover">
                <div class="products_slider-hover-item">
                    <div class="img-wrap">
                        <div class="img-item">
                            <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-item">
                        <h4>Snowflakes - S</h4>
                        <p>H65φ18 <br> H121φ37</p>
                        <a class="d-inline-block justify-content-end" href="">
                            <img src="/nousaku_html/images/index/menu/tool_shopcar_hover.png">
                            <img src="/nousaku_html/images/index//enter.png">
                        </a>
                        <ul class="nav color-list">
                            <li class="gold"></li>
                            <li class="silver"></li>
                            <li class="rose-gold"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="products_slider-item">
            <div class="img-wrap">
                <div class="img-item">
                    <img src="/nousaku_html/images/index/news/04.jpg" alt="">
                </div>
            </div>
            <div class="products_slider-hover">
                <div class="products_slider-hover-item">
                    <div class="img-wrap">
                        <div class="img-item">
                            <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                        </div>
                    </div>
                    <div class="text-item">
                        <h4>Snowflakes - S</h4>
                        <p>H65φ18 <br> H121φ37</p>
                        <a class="d-inline-block justify-content-end" href="">
                            <img src="/nousaku_html/images/index/menu/tool_shopcar_hover.png">
                            <img src="/nousaku_html/images/index//enter.png">
                        </a>
                        <ul class="nav color-list">
                            <li class="gold"></li>
                            <li class="silver"></li>
                            <li class="rose-gold"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<p id="productSection04">
    <section class="section04 product2-1-section01" id="pSection04">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-lg-3 product-sidebar">
                    <h2>製品一覽</h2>
                    <ul class="product-list mb-30 d-lg-block d-none">
                        @foreach ($categoryList as $citem)
                            <li><a href="/productsAll/{{$citem->pcid}}">{{$citem->pcname}}</a></li>
                        @endforeach                    
                    </ul>
                    <div class="input-group d-lg-flex d-none">
                        <input type="text" class="form-control" placeholder="〜 NT 5，000">
                        <div class="input-group-append">
                            <button class="btn" type="button" id="button-addon2">
                                <img src="/nousaku_html/images/index/menu/search.png" onmouseover="this.src='images/index/menu/search_hover.png'" onmouseout="this.src='images/index/menu/search.png'" alt="" />
                            </button>
                            {{-- {{var_dump($productListBrand)}} --}}
                            {{-- @foreach ($productListBrand as $pbitem)
                                @foreach ($pbitem as $pbitem2)
                                    {{$pbitem2->brand}}
                                    {{$pbitem2->pgroup}}
                                @endforeach
                            @endforeach --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="product-wrap" id="pWrap">
                        <div class="d-lg-block d-none">
                            <ul class="product_slider custom-arrow3">
                                @foreach ($brandList as $bitem)
                                <li>{{$bitem->pbname}}</li>
                                @endforeach
                                <li>新製品</li>
                            </ul>
                        </div>
                        
                        <div class="product_slider_nav" id="pSliderNav">
                            @foreach ($brandList as $bitem)
                            <div class="product_slider_nav-item">
                                <div class="product-title">
                                    {{$bitem->pbname}} / {{$categoryName}}
                                    <input type="hidden" name="" id="" value = "{{$bcount = $loop->index + 1}}">
                                </div>
                                <div class="row show-more-item{{$bcount}}">
                                @foreach ($productList as $pitem)
                                    @if ($loop->index < 12 && $bitem->pbid == $pitem->brand)
                                        <a href="/productsDetails/{{$pitem->productid}}" class="product-item col-lg-3 col-6">
                                            <div class="img-wrap">
                                                <div class="img-item">
                                                    <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                                                </div>
                                            </div>
                                            <p>{{$pitem->pname}}</p>
                                        </a>
                                    @endif
                                @endforeach
                                </div>
                                <div class="row show-more-item{{$bcount}}">
                                @foreach ($productList as $pitem)
                                    
                                    @if ($loop->index >= 12  && $bitem->pbid == $pitem->brand)
                                    
                                        <a href="/productsDetails/{{$pitem->productid}}" class="product-item col-lg-3 col-6">
                                            <div class="img-wrap">
                                                <div class="img-item">
                                                    <img src="/nousaku_html/images/index/product/01.jpg" alt="">
                                                </div>
                                            </div>
                                            <p>{{$pitem->pname}}</p>
                                        </a>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="text-center">
                                    <a href="javascript:;" class="show-more-btn{{$bcount }}">
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
    
    </p>
@endsection