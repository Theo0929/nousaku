<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zh-tw">
<!--<![endif]-->

<head>
    @yield('metaDataCSRF')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>能作</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="能作">
    <meta name="description" content="">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="/nousaku_html/css/plugin.css">
    <link rel="stylesheet" href="/nousaku_html/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@300&display=swap">
    <link rel="stylesheet" href="/nousaku_html/css/custom.css">
    <link rel="stylesheet" href="/nousaku_html/css/myCss.css">
    <link rel="stylesheet" href="/nousaku_html/css/myCss2.css">

</head>

<body class="body">

    
    <div class="header @yield('headerColor')">
        {{-- @include('frontend.layouts.topMenu') --}}
        <div class="top-menu menu_sticker">
            <nav class="navbar navbar-expand-lg justify-content-between">
                <div class="logo-item">
                    <a href="#"></a>
                </div>
                <ul class="nav top-menu-nav">
                    <li>
                        <a class="car" href="/cart"></a>
                    </li>
                    <li class="d-lg-block d-none">
                        <a class="fb " href=""></a>
                    </li>
                    <li class="d-lg-block d-none">
                        <a class="ig" href=""></a>
                    </li>
                    <li>
                        <button class="navbar-toggler" data-target="#navigation" data-control="navigation" data-toggle="collapse"></button>
                    </li>
                </ul>
                
                <div class="collapse navbar-collapse" id="navigation">
                    <div class="mobile-over-auto">
                        <div class="top-icon-list">
                            <ul class="navbar-nav">
                                <li class="mobile-link has-ul">
                                    <a href="#">能作top<span>Nousaku</span></a>
                                    <ul class="nav sec-list">
                                        <h3>能作<span>Nousaku</span></h3>
                                        <li><a href="#">製品一覽</a></li>
                                        <li><a href="#">新製品</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-link has-ul">
                                    <p id="topMenu2">
                                    
                                    </p>
                                </li>
                                <li class="mobile-link has-ul">
                                    <a href="#">禮贈<span>Gift</span></a>
                                    <ul class="nav sec-list">
                                        <h3>禮贈<span>Gift</span></h3>
                                        <li><a href="#">製品一覽</a></li>
                                        <li><a href="#">新製品</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-link has-ul">
                                    <a href="#">特輯<span>Special</span></a>
                                    <ul class="nav sec-list">
                                        <h3>特輯<span>Special</span></h3>
                                        <li><a href="#">製品一覽</a></li>
                                        <li><a href="#">新製品</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">
                                        <div class="input-group-append">
                                            <button class="btn" type="button" id="button-addon2">
                                                <img src="/nousaku_html/images/index/menu/search.png" onmouseover="this.src='/nousaku_html/images/index/menu/search_hover.png'" onmouseout="this.src='/nousaku_html/images/index/menu/search.png'" alt="" />
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="top-icon-list2">
                            <ul class="nav">
                                <li><a href="/news">最新情報</a></li>
                                <li><a href="">購物須知</a></li>
                                <li><a href="">加入會員</a></li>
                                <li><a href="/contact">聯絡我們</a></li>
                                <li><a href="">運送流程</a></li>
                                <li><a href="">日本能作</a></li>
                                <li><a href="/FAQ">常見問題</a></li>
                                <li><a href="">企業合作</a></li>
                                <li><a href="">企業概要</a></li>
                                <li><a href="/stores">實體店</a></li>
                                <li><a href="">製品保養</a></li>
                                <li><a href="">富山產業觀光</a></li>
                            </ul>
                            <ul class="nav top-menu-nav">
                                <li class="d-lg-none d-block">
                                    <a class="fb" href=""></a>
                                </li>
                                <li class="d-lg-none d-block">
                                    <a class="ig" href=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="copy">
                            <p>© 能作｜NOUSAKU</p>
                        </div>
                    </div>
                </div>
            </nav>
        </div> 
        
    </div>

    <div class="content">
        <div class="inside-menu @yield('inside-menuColor')">
            <a class="inside-logo" href="">
                <img src="/nousaku_html/images/index/logo_black.png" alt="">
            </a>
            <p id="innerMenu2">
                 
            </p>
        </div>
        @yield('bodySections')
    </div>

    
    <div class="footer">
        <div class="container">
            @include('frontend.layouts.footer')
        </div>
    </div>
    <a href="#0" class="cd-top">top</a>
</body>
<script src="/nousaku_html/js/plugin.min.js"></script>
<script src="/nousaku_html/js/main.js"></script>
<script src="/nousaku_html/js/custom.js"></script>
<script src="/nousaku_html/js/custom2.js"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="/handle-window-session-storage/jquery.session.js"></script>
<script>
    $(function(){
        $.get('/topMenu2' , function(data){
            $('#topMenu2').append(data);
            //$('#productSection04').append(data);
        });
        $.get('/innerMenu2' , function(data){
            $('#innerMenu2').append(data);
            //$('#productSection04').append(data);
        });
        
    });
</script>

@yield('scriptSection')

</html>