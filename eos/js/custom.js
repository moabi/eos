jQuery(function () {

    var $ = jQuery,
        menu = $('#menu-categories').find('li'),
        listing = $('body.archive.tax-categorie').find('.eos_themes_posts:nth-child(3n)'),
        txtmenu = $('#menu-categories li a'),
        currentcat = $('#cat-brd li a').html(),
        homep = $('body.home #call'),
        toggleMenu = $('.toggleMenu');
    //mobile Menu
    toggleMenu.click(function (e) {
        e.preventDefault();
        var target = $(this).attr('data-target');
        console.log(target);
        $(target).toggleClass('active');
        $('#header-mobile-menu').toggleClass('active');
    });
    //find the current parent cat
    txtmenu.each(function () {
        var txx = $(this).html();
        if (txx === currentcat) {
            $(this).addClass('currentCatName');
        }
    });
    //front page, no empty p
    homep.find('p').each(function () {
        var $this = $(this);
        if ($this.html().replace(/\s|&nbsp;/g, '').length === 0) {
            $this.remove();
        }
    });
    //no margin for the third article
    listing.addClass('nomargin');


    $("#eosSlider,#blockslider > div > .royalSlider").royalSlider({
        // options go here
        // as an example, enable keyboard arrows nav
        autoScaleSlider: true,
        imgWidth : 640,
        imgHeight : 338,
        autoScaleSliderHeight : 500,
        controlNavigation : 'bullets',
        imageScaleMode : 'fill',
        thumbs: {
            // thumbnails options go gere
            spacing: 10,
            arrowsAutoHide: true
        },
        keyboardNavEnabled: true,
        autoPlay: {
            // autoplay options go gere
            enabled: true,
            pauseOnHover: true
        },
        fullscreen: {
            // fullscreen options go gere
            enabled: true,
            nativeFS: false

        }
    });

    $("#homeSlider").royalSlider({
        // options go here
        // as an example, enable keyboard arrows nav
        autoScaleSlider: true,
        imgWidth : 640,
        imgHeight : 338,
        autoScaleSliderHeight : 500,
        controlNavigation : 'none',
        imageScaleMode : 'fill',
        thumbs: {
            // thumbnails options go gere
            spacing: 10,
            arrowsAutoHide: true
        },
        keyboardNavEnabled: true,
        autoPlay: {
            // autoplay options go gere
            enabled: true,
            pauseOnHover: true
        },
        fullscreen: {
            // fullscreen options go gere
            enabled: true,
            nativeFS: false

        }
    });

});