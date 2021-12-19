@extends('frontend.layouts.master')
@section('headerColor') header_inside header_black @endsection
@section('inside-menuColor') text-black @endsection
@section('bodySections')

<section class="store-section01">
    <div class="container">
        <h2>實體店</h2>
    </div>
    <div class="right-list">
        <ul class="nav">
            <li><a href="/news">最新消息</a></li>
            <li><a href="/FAQ">常見問題</a></li>
            <li><a href="/contact">聯絡我們</a></li>
            <li><a href="/store">實體店</a></li>
            <li><a class="search-btn" href=""></a></li>
        </ul>
    </div>
</section>

<section class="store-section02 store-section02-bg01"></section>

<section class="store-section03">
    <div class="container">
        <h2>Nousaku Precious 大直店</h2>
        <p class="text-content">富山縣高岡市辦公園區8-1 <span><img src="/nousaku_html/images/index/location_icon.png"></span></p>
        <p class="border-b-custom d-inline-block">0766-63-0002</p>
        <p>營業時間  10：00-18：00</p>
        <div class="line"></div>
        <p>Kuzushi-Tare系列超大尺寸和錫錠，多盤方形套裝。</p>
        <p>一套碗，讓您以更涼爽、更美味的方式享受夏季傳統的素面。</p>
        <p>錫具有很高的導熱性，因此只需將其放入冰箱 1 到 2 分鐘即可使整個碗冷卻，非常適合夏天的素面。</p>
    </div>
</section>

<section class="about-section03 mb-0">
    <div class="about_slider custom-arrow">
        <div class="about-slick">
            <div class="img-wrap">
                <div class="img-item">
                    <img src="/nousaku_html/images/store/img01.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="about-slick">
            <div class="img-wrap">
                <div class="img-item">
                    <img src="/nousaku_html/images/store/img02.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="about-slick">
            <div class="img-wrap">
                <div class="img-item">
                    <img src="/nousaku_html/images/store/img03.jpg" alt="">
                </div>
            </div>
        </div><div class="about-slick">
            <div class="img-wrap">
                <div class="img-item">
                    <img src="/nousaku_html/images/store/img01.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="store-section4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102309.00193549824!2d136.89877296428267!3d36.74281897860449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff7787ee12fc5a3%3A0x36fa430fe381fb2e!2z5pel5pys5a-M5bGx57ij6auY5bKh5biC!5e0!3m2!1szh-TW!2stw!4v1635834378845!5m2!1szh-TW!2stw" width="100%" height="720" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<div class="back-item text-center pt-50 pb-50">
    <a href="\store" class="btn-back">
        返回列表
    </a>
</div>

@endsection