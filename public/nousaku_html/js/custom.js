$(function() {
    var lastscroll = 0;
    
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        var scroll_height = 780;
        var window_width = $(window).width();

        if (scroll > scroll_height ) {
            $(".sticker").addClass("stick");
            $(".menu_sticker").addClass("stick");
            $(".inside-menu").addClass("stick");
            
            if(window_width > 992){
                if(scroll > lastscroll ){
                    $(".sticker").addClass("stickdown");
                    $(".menu_sticker").addClass("stickdown");
                    $(".inside-menu").addClass("stickdown");
                    
                    $(".sticker").removeClass("stickup");
                    $(".menu_sticker").removeClass("stickup");
                    $(".inside-menu").removeClass("stickup");
                }else {
                    $(".sticker").addClass("stickup");
                    $(".menu_sticker").addClass("stickup");
                    $(".inside-menu").addClass("stickup");

                    $(".sticker").removeClass("stickdown");
                    $(".menu_sticker").removeClass("stickdown");
                    $(".inside-menu").removeClass("stickdown");
                }
            }
        }else {
            $(".sticker").removeClass("stick stickup stickdown");
            $(".menu_sticker").removeClass("stick stickup stickdown");
            $(".inside-menu").removeClass("stick stickup stickdown");
        }
        
        lastscroll = scroll;
    });

    $(window).on('mo_scroll', function() {
        var mo_scroll = $(window).scrollTop();
        var mo_window_width = $(window).width();

        if (mo_window_width < 991 && mo_scroll < 350) {
            $(".menu_sticker").removeClass("stick");
        }else {
            $(".menu_sticker").addClass("stick");
        };
    });

    $(".show-more-btn1").click(function(e) {
        $(".show-more-item1:hidden").slice(0, 1).css({opacity: 0, display: 'flex'}).animate({
                opacity: 1
            }, 1000);
        if ($(".show-more-item1:hidden").length < 1) $(this).fadeOut();
        $('.product_slider_nav').slick('setPosition');
    });
    $(".show-more-btn2").click(function(e) {
        $(".show-more-item2:hidden").slice(0, 1).css({opacity: 0, display: 'flex'}).animate({
                opacity: 1
            }, 1000);
        if ($(".show-more-item2:hidden").length < 1) $(this).fadeOut();
        $('.product_slider_nav').slick('setPosition');
    });
    $(".show-more-btn3").click(function(e) {
        $(".show-more-item3:hidden").slice(0, 1).css({opacity: 0, display: 'flex'}).animate({
                opacity: 1
            }, 1000);
        if ($(".show-more-item3:hidden").length < 1) $(this).fadeOut();
        $('.product_slider_nav').slick('setPosition');
    });
    $(".show-more-btn4").click(function(e) {
        $(".show-more-item4:hidden").slice(0, 1).css({opacity: 0, display: 'flex'}).animate({
                opacity: 1
            }, 1000);
        if ($(".show-more-item4:hidden").length < 1) $(this).fadeOut();
        $('.product_slider_nav').slick('setPosition');
    });
    $(".show-more-btn5").click(function(e) {
        $(".show-more-item5:hidden").slice(0, 1).css({opacity: 0, display: 'flex'}).animate({
                opacity: 1
            }, 1000);
        if ($(".show-more-item5:hidden").length < 1) $(this).fadeOut();
        $('.product_slider_nav').slick('setPosition');
    });
    $(".show-more-btn6").click(function(e) {
        $(".show-more-item6:hidden").slice(0, 1).css({opacity: 0, display: 'block'}).animate({
                opacity: 1
            }, 1000);
        if ($(".show-more-item6:hidden").length < 1) $(this).fadeOut();
    });

    $('.qtyplus').click(function(e) {
        e.preventDefault();
        fieldName = $(this).attr('field');
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        if (!isNaN(currentVal)) {
          $('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
          $('input[name=' + fieldName + ']').val(0);
        }
      });

      $(".qtyminus").click(function(e) {
        e.preventDefault(); 
        fieldName = $(this).attr('field');
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        if (!isNaN(currentVal) && currentVal > 0) {
          $('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
          $('input[name=' + fieldName + ']').val(0);
        }
      });

    $('.mobile-link').click(function(event) {
        $(this).toggleClass('active').siblings().removeClass('active');
    });

    $('.mo-menu').click(function(event) {
        $(this).closest('.product-sidebar').toggleClass('mo-menu-show');
    });
    
    $('.banner_slider').slick({
        dots: false, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        slidesToShow: 1, //要顯示的幻燈片數量
        adaptiveHeight: false, //響應高度
        autoplay: 1000,
        arrows: false,
        fade: true,
        autoplaySpeed: 5000,
        pauseOnFocus: false,
        autoplay: true,
    });

    $('.specil_slider').slick({
        dots: true, //原點
        arrows: true,
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        slidesToShow: 1, //要顯示的幻燈片數量
        adaptiveHeight: false, //響應高度
        autoplay: 1000,
        autoplaySpeed: 5000,
        fade: true,
        autoplay: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                dots: false, 
            }
        }]
    });

    $('.banner_slider_mo').slick({
        dots: true, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        slidesToShow: 1, //要顯示的幻燈片數量
        adaptiveHeight: false, //響應高度
        autoplay: false,
        arrows: false,
        autoplaySpeed: 5000,
        pauseOnFocus: false
    });

    $('.about_slider_index').slick({
        dots: true, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        slidesToShow: 1, //要顯示的幻燈片數量
        adaptiveHeight: false, //響應高度
        autoplay: false,
        arrows: false,
        autoplaySpeed: 5000,
        pauseOnFocus: false
    });

    $('.about_slider').slick({
        dots: false, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        slidesToShow: 3, //要顯示的幻燈片數量
        arrows: true,
        autoplaySpeed: 5000,
        pauseOnFocus: false,
        centerMode: true,
        centerPadding: '0px',
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }]
    });

    $('.about_slider2').slick({
        dots: false, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        slidesToShow: 3, //要顯示的幻燈片數量
        arrows: true,
        autoplaySpeed: 5000,
        pauseOnFocus: false,
        centerMode: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }]
    });
    // On before slide change
    
    $('.news_slider').slick({
        dots: true, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        adaptiveHeight: false, //響應高度
        autoplay: false,
        arrows: false,
        autoplaySpeed: 5000,
        centerMode: true,
        centerPadding: '400px',
        slidesToShow: 2,
        responsive: [
            {
                breakpoint: 1921,
                settings: {
                    centerPadding: '300px',
                }
            },
            {
                breakpoint: 1441,
                settings: {
                    centerPadding: '150px',
                }
            },
            {
                breakpoint: 1281,
                settings: {
                    centerPadding: false,
                    enterMode: false,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '30px',
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $('.products_slider').slick({
        dots: true, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        adaptiveHeight: false, //響應高度
        autoplay: false,
        arrows: true,
        autoplaySpeed: 5000,
        centerMode: true,
        centerPadding: '400px',
        slidesToShow: 2,
        responsive: [
            {
                breakpoint: 1921,
                settings: {
                    centerPadding: '300px',
                }
            },
            {
                breakpoint: 1441,
                settings: {
                    centerPadding: '150px',
                }
            },
            {
                breakpoint: 1281,
                settings: {
                    centerPadding: false,
                    enterMode: false,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '30px',
                    slidesToScroll: 1,
                }
            }
        ]
    });

    // $('.products_slider-hover').slick({
    //     dots: true, //原點
    //     infinite: true, //無限循環滑動
    //     speed: 800, //滑動/淡入動畫速度
    //     slidesToShow: 1, //要顯示的幻燈片數量
    //     adaptiveHeight: false, //響應高度
    //     autoplay: false,
    //     arrows: false,
    //     autoplaySpeed: 5000,
    //     pauseOnFocus: false
    // });

    $('.products2-2_slider').slick({
        dots: false, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        slidesToShow: 1, //要顯示的幻燈片數量
        arrows: true,
        autoplaySpeed: 5000,
        pauseOnFocus: false,
        centerMode: true,
        centerPadding: '430px',
        responsive: [
            {
                breakpoint: 1441,
                settings: {
                    centerPadding: '300px',
                }
            },
            {
                breakpoint: 1281,
                settings: {
                    centerPadding: '150px',
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '30px',
                    slidesToScroll: 1,
                    arrows: false,
                }
            }
        ]
    });

    // $('.products2-2_slider2').slick({
    //     dots: true, //原點
    //     infinite: true, //無限循環滑動
    //     speed: 800, //滑動/淡入動畫速度
    //     slidesToShow: 1, //要顯示的幻燈片數量
    //     arrows: false,
    //     autoplaySpeed: 5000,
    //     pauseOnFocus: false,
    //     responsive: [{
    //         breakpoint: 991,
    //         settings: {
    //             dots: false,
    //         }
    //     }]
    // });

    $('.product3_slider').slick({
        dots: false, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        adaptiveHeight: false, //響應高度
        slidesToShow: 6,
        autoplay: false,
        arrows: true,
        autoplaySpeed: 5000,
        responsive: [{
            breakpoint: 991,
            settings: {
                arrows: false,
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }]
    });

    $('.product4_slider').slick({
        dots: false, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        adaptiveHeight: false, //響應高度
        slidesToShow: 3,
        autoplay: false,
        arrows: true,
        autoplaySpeed: 5000,
        responsive: [{
            breakpoint: 991,
            settings: {
                arrows: false,
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }]
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      $('.product3_slider').slick('setPosition');
    })
    

    $('.map_slider').slick({
        dots: true, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        adaptiveHeight: false, //響應高度
        autoplay: false,
        arrows: false,
        autoplaySpeed: 5000,
        slidesToShow: 3,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

    $('.recruit_slider').slick({
        dots: false, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        slidesToShow: 3, //要顯示的幻燈片數量
        adaptiveHeight: false, //響應高度
        autoplay: false,
        arrows: true,
        autoplaySpeed: 5000,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

    $('.clients_slider').slick({
        dots: true, //原點
        infinite: true, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        slidesToShow: 3, //要顯示的幻燈片數量
        adaptiveHeight: false, //響應高度
        autoplay: false,
        arrows: true,
        autoplaySpeed: 5000,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

    $('.faq_slider').slick({
        dots: false, //原點
        infinite: false, //無限循環滑動
        speed: 800, //滑動/淡入動畫速度
        slidesToShow: 4, //要顯示的幻燈片數量
        adaptiveHeight: false, //響應高度
        autoplay: false,
        arrows: true,
        autoplaySpeed: 5000,
        variableWidth: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                variableWidth: false,
            }
        }]
    });

    $('.faq_item').each(function(i){
        var _this = $(this).attr('data-a',i+1);
        var _thisidd = $(this).attr('data-a');
  
        $(this).find('.number').html(_thisidd);
    });

    $(".product_slider_nav").slick({
        arrows: false,
        dots: false,
        adaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        asNavFor: '.product_slider'
    });

    $(".product_slider").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        variableWidth: true,
        asNavFor: ".product_slider_nav",
        arrows: false,
        dots: false,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 3,
            }
        }]
    });

    $(".product2_slider_nav").slick({
        arrows: false,
        dots: false,
        adaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        asNavFor: '.product2_slider',
    });

    $(".product2_slider").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: ".product2_slider_nav",
        arrows: false,
        dots: false,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                variableWidth: false,
            }
        }]
    });
});