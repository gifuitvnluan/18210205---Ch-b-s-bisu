$(document).ready(function () {

    // back top
    $(function () {
        var topBtn = $('.div_backtop');
        topBtn.hide();
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                topBtn.fadeIn();
            } else {
                topBtn.fadeOut();
            }
        });
        topBtn.click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    });


    // tel sp
    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

    if (!isMobile) {
        $('a[href^="tel:"]').on('click', function (e) {
            e.preventDefault();
        });
    }

    AOS.init({
        disable: 'mobile',
        once: true,
    });

    $(document).scroll(function (i) {
        if($(this).scrollTop()>100){
            $('.hd_menu_all .menu_main, .menu_sp').stop().addClass('hd_bg');
        }else{
            $('.hd_menu_all .menu_main, .menu_sp').stop().removeClass('hd_bg');
        }
    })

    if($(document).width()>767){
        /*Menu PC*/
        $(".hd_menu_all .menu_main ul li:nth-child(1)").hover(
            function () {
                $('.hd_menu_all .menu_sub .all_contentsub ul.sub_business').stop().addClass('active');
                $('.hd_menu_all .menu_sub .all_contentsub ul.sub_about, .hd_menu_all .menu_sub .all_contentsub ul.sub_recruit').stop().removeClass('active');
            }
        );
        $(".hd_menu_all .menu_main ul li:nth-child(2)").hover(
            function () {
                $('.hd_menu_all .menu_sub .all_contentsub ul.sub_about').stop().addClass('active');
                $('.hd_menu_all .menu_sub .all_contentsub ul.sub_business, .hd_menu_all .menu_sub .all_contentsub ul.sub_recruit').stop().removeClass('active');
            }
        );
        $(".hd_menu_all .menu_main ul li:nth-child(3)").hover(
            function () {
                $('.hd_menu_all .menu_sub .all_contentsub ul.sub_recruit').stop().addClass('active');
                $('.hd_menu_all .menu_sub .all_contentsub ul.sub_business, .hd_menu_all .menu_sub .all_contentsub ul.sub_about').stop().removeClass('active');
            }
        );

        $(document).mouseup(function (e) {
            var container = $(".hd_menu_all .menu_sub");

            if (!container.is(e.target) && container.has(e.target).length === 0) {
                $('.hd_menu_all .menu_sub .all_contentsub ul.sub_business, .hd_menu_all .menu_sub .all_contentsub ul.sub_about, .hd_menu_all .menu_sub .all_contentsub ul.sub_recruit').stop().removeClass('active');
            }
        });
    }else{
        $('.btn_menu').click(function(){
            $('#menu_hambur', this).toggleClass('open');
            $(this).next().slideToggle();

        });
        $('.menu_sp .div_menu>ul>li .btn_sub_menu').click(function(){
            $(this).next().slideToggle();
            $(this).toggleClass('minus');
        })
    }

});