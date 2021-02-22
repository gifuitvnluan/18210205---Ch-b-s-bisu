$(document).ready(function () {
    jQuery(window).load(function () {
        if ($(document).width() > 767) {
            $('#page_banner').css('margin-top', $('.hd_menu_all .menu_main').outerHeight() + 'px');
        } else {
            $('#page_banner').css('margin-top', $('.menu_sp').outerHeight() + 'px');
        }

        $( window ).scroll(function() {
            if ($(document).width() > 767) {
                $('#page_banner').css('margin-top', $('.hd_menu_all .menu_main').outerHeight() + 'px');
            } else {
                $('#page_banner').css('margin-top', $('.menu_sp').outerHeight() + 'px');
            }
        });

        $('#business01_02 .cont_divbg .all_point .item_point').click(function () {
            console.log('ss');
            if ($(document).width() > 767) {
                $tophd = $('.hd_menu_all .menu_main').outerHeight();
            } else {
                $tophd = $('.menu_sp').outerHeight() + 30;
            }
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - $tophd
                    }, 900);
                    return false;
                } else {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 0
                    }, 900);
                }
            }
        });
    });
});