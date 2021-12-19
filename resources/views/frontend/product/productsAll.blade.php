@extends('frontend.layouts.master')

@section('headerColor') header_inside header_black @endsection
@section('inside-menuColor') text-black @endsection

@section('bodySections')

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

@section('scriptSection')

<script>
    $(function(){
         $.get('/productSection04' , function(data){
            
            //$('#productSection04').append(data);
            //$('#pSection04').addClass("section04 product2-1-section01");
            //$('#pcFluid').addClass("container-fluid");
            //$('#pWrap').addClass("product-wrap");
            // $('#pSliderNav').addClass("product_slider_nav");
            // alert($('#pSliderNav').attr('class'));
        });

        //

        
    });

</script>
@endsection