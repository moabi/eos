jQuery(function () {

    var $ = jQuery;

    $('.js-filter').on('click', function (e) {
        e.preventDefault();
        var $target = '#' + $(this).attr('data-filter');
        $('.js-filter').removeClass('active');
        $(this).addClass('active');
        console.log($target);
        $('#active-term').empty();
        $($target).clone().removeClass('hidden').appendTo('#active-term');
    });
    //first item
    $activeTerm = $('.init-term');
    if ($activeTerm.length) {
        $activeTerm.clone().removeClass('hidden').appendTo('#active-term');
    }


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