@extends('frontend.layouts.master')

@section('headerColor') header_inside header_black @endsection
@section('inside-menuColor') text-black @endsection


@section('bodySections')
    
<section class="store-section01">
    <div class="container">
        <h2>聯絡我們</h2>
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

<section class="contactus-section01">
    <div class="container-custom">
        <div class="text-center">
            <p>非常感謝您聯絡能作。<br class="d-block d-lg-none">如果您要寄送圖片，麻煩請從下方電子郵件連絡我們。<br>信件中別忘了註記您的聯絡方式，我們會儘快與您聯絡。</p>
            <a class="email-link" href="mailto:nousaku@nousaku-preciousmetal.com">nousaku@nousaku-preciousmetal.com</a>
        </div>
        
        <form action="">
            <div class="form-group mb-50">
                <label for="">諮詢項目 *</label>
                <div class="form-custom-select">
                    <select class="form-control" id="">
                        <option>商品問題</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group mb-50">
                        <label for="">企業名稱 <span class="color1">*</span></label>
                        <input type="text" class="form-control form-custom" id="" placeholder="非企業填寫個人即可">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-50">
                        <label for="">姓名 <span class="color1">*</span></label>
                        <input type="text" class="form-control form-custom" id="" placeholder="姓名">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-50">
                        <label for="">Email <span class="color1">*</span></label>
                        <input type="email" class="form-control form-custom" id="" placeholder="Email">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-50">
                        <label for="">聯絡電話 <span class="color1">*</span></label>
                        <input type="text" class="form-control form-custom" id="" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group mb-50">
                <label for="">如何得知能作</label>
                <div class="form-custom-select">
                    <select class="form-control" id="">
                        <option>請選擇項目</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="form-group mb-100">
                <label for="">訊息</label>
                <textarea class="form-control form-custom" name="" id="" cols="30" rows="1" placeholder="請輸入您的訊息，我們將有專人儘快回覆"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-style01">送出</button>
            </div>
        </form>
    </div>
</section>

@endsection