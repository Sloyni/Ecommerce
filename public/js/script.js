$(document).ready(function(){
    $('#top-navbar .search-group input').focus(function(){
        $(this).parent().addClass('active')
    })
    $('#top-navbar .search-group input').focusout(function(){
        $(this).parent().removeClass('active')
    })
    var homeSlider = new Swiper('#home-slider', {
        direction: 'vertical',
        pagination: {
            el: '#home-slider-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"><i class="material-icons">'+$(this.$el).find('.swiper-slide').eq(index).attr('icon')+'</i></span>';
            },
        },
        on: {
            init: function(){
                if($(this.$el).find('.swiper-slide').eq(this.activeIndex).attr('theme')=='dark'){
                    if($(this.$el).hasClass('light')){
                        $(this.$el).removeClass('light')
                    }
                    $(this.$el).addClass('dark')
                } else {
                    if($(this.$el).hasClass('dark')){
                        $(this.$el).removeClass('dark')
                    }
                    $(this.$el).addClass('light')
                }
            }
        },
        autoplay: {
            delay: 3000,
        },
    });
    homeSlider.on('slideChange', function () {
        if($(homeSlider.$el).find('.swiper-slide').eq(homeSlider.activeIndex).attr('theme')=='dark'){
            if($(homeSlider.$el).hasClass('light')){
                $(homeSlider.$el).removeClass('light')
            }
            $(homeSlider.$el).addClass('dark')
        } else {
            if($(homeSlider.$el).hasClass('dark')){
                $(homeSlider.$el).removeClass('dark')
            }
            $(homeSlider.$el).addClass('light')
        }
    });
    $('div[data-nav-dropdown]').each(function(){
        active_dropdown = null
        $("div[data-nav-dropdown='myaccount']").children('.nav-dropdown-body').addClass('active')
        active_dropdown = $("div[data-nav-dropdown='myaccount']")
        timeoutIdDefault = setTimeout(function(){
            $(active_dropdown).children('.nav-dropdown-body').removeClass('active')
            $(active_dropdown).removeClass('active')
        },3000)
        $(active_dropdown).children('.nav-dropdown-body').data('timeoutId', timeoutIdDefault)

        $(this).children('.nav-dropdown-btn').on('mouseenter',function(){
            $(active_dropdown).children('.nav-dropdown-body').removeClass('active')
            $(active_dropdown).removeClass('active')
            active_dropdown = $(this).parent()
            clearTimeout($(this).parent().children('.nav-dropdown-body').data('timeoutId'));
            $(this).parent().children('.nav-dropdown-body').addClass('active')
            $(this).parent().addClass('active')
        })
        $(this).children('.nav-dropdown-body').on('mouseenter',function(){
            $(active_dropdown).children('.nav-dropdown-body').removeClass('active')
            $(active_dropdown).removeClass('active')
            active_dropdown = $(this).parent()
            clearTimeout($(this).parent().children('.nav-dropdown-body').data('timeoutId'));
            $(this).parent().children('.nav-dropdown-body').addClass('active')
            $(this).parent().addClass('active')
        })
        $(this).children('.nav-dropdown-btn').on('mouseleave',function(){
            var el = this, timeoutId = setTimeout(function(){
                $(el).parent().children('.nav-dropdown-body').removeClass('active')
                $(el).parent().removeClass('active')
            },350)
            $(this).parent().children('.nav-dropdown-body').data('timeoutId', timeoutId)
        })
        $(this).children('.nav-dropdown-body').on('mouseleave',function(){
            var el = this, timeoutId = setTimeout(function(){
                $(el).parent().children('.nav-dropdown-body').removeClass('active')
                $(el).parent().removeClass('active')
            },350)
            $(this).parent().children('.nav-dropdown-body').data('timeoutId', timeoutId)
        })
    })
    $('div[height-equal-width').each(function(){
        $(this).css('max-height',$(this).width())
    })


    var stickyNavTop =  $('#top-navbar').offset().top;

        var stickyNav = function(){
        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyNavTop) {
            $('#top-navbar').addClass('sticky');
        } else {
            $('#top-navbar').removeClass('sticky');
        }
    };

    stickyNav();
    $(window).scroll(function() {
        stickyNav();
    });

    $( window ).resize(function() {
        $('div[height-equal-width').each(function(){
            $(this).css('max-height',$(this).width())
        })
    })
    var stylesSlider = new Swiper('#stylesSlider', {
        slidesPerView: 2,
        spaceBetween: 40,
        centeredSlides: true,
        autoplay: {
            delay: 100500,
            disableOnInteraction: false,
        },
        loop:true,
        navigation: {
            nextEl: '#stylesSlider .swiper-button-next',
            prevEl: '#stylesSlider .swiper-button-prev',
        },
    });
})
