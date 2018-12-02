"use strict";

//SCROLL TOP BUTTON
//-------------------------------------------------
(function ($) {
 var findWindowHeight = function () {
 return windowHeight = $(window).height();
 };

 var addScrollButton = function () {
 if ($(window).scrollTop() > windowHeight && !$('#scrollButton').size()) {
 var scrollButton = '<div id="scrollButton" class="scroll-button"/>';
 $('body').append(scrollButton);
 } else if ($(window).scrollTop() < windowHeight && $('#scrollButton').size()) {
 $('#scrollButton').remove();
 }
 };

 var scrollPage = function () {
 $('body, html').animate({
 scrollTop: 0
 }, 50);
 };

 var windowHeight = findWindowHeight();

 $(window).scroll(addScrollButton);
 $(window).resize(findWindowHeight);

 $('body').on('click', '#scrollButton', scrollPage);
 })(jQuery);

//SLIDER FRONT
//-------------------------------------------------

$(document).ready(function () {
    $('.top-block__slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 6000,
        arrows: false,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
});

//SIDEBAR MENU
//-------------------------------------------------

$("#sidebar-nav > ul > li > a").click(function (e) {
    $("#sidebar-nav li > ul").slideUp();
    $(this).next().is(":visible") || $(this).next().slideDown();

    e.preventDefault();

});

/*$("#sidebar-nav > ul > li").click(function (e) {
    e.preventDefault();
    console.log('pre');
    if (!$(this).hasClass('open')) { // если класса нет
        $(e.target).addClass('open'); // добавляем класс
        // $(this).next().is(":visible") || $(this).next().slideDown();
        console.log('no');
    } else if ($(this).hasClass('open')) { // если есть
        $(this).removeClass('open'); // убираем класс
        // $("#sidebar-nav li > ul").slideUp()
        console.log('yes');

    }
});*/


//SEARCH
//-------------------------------------------------

jQuery(document).ready(function($){
    $('input').attr('autocomplete', 'false');
    $('.header__search-text').keyup(function(eventObject){
        var searchTerm = $(this).val();
        // проверим, если в поле ввода более 2 символов, запускаем ajax
        if(searchTerm.length > 1){
            $.ajax({
                url : '/wp-admin/admin-ajax.php',
                type: 'POST',
                data:{
                    'action':'ies_ajax_search',
                    'term'  :searchTerm
                },
                success:function(result){
                    $('.ajax-search').fadeIn().html(result);
                }
            });
        } else if(searchTerm.length < 1) {
            $('.ajax-search').css('display','none');
        }
    });
});

//MOBILE MENU (plugin: slicknav)
//-------------------------------------------------
(function($) {
    $('#nav').slicknav({
        prependTo: '#mobile-nav'
    });

    //close slicknav menu after click outside an element
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.slicknav_menu').length && !$(event.target).is('.slicknav_menu')) {
            if ($('.slicknav_open').size()) {
                $('#nav').slicknav('close');
            }
        }
    });

    $('.slicknav_btn').on('click', function(){
        if ($(this).hasClass('slicknav_open')) $('#header').addClass('mmenu-open');
        else $('#header').removeClass('mmenu-open');
    })
})(jQuery);

//MESSAGE FOR DEV
//-------------------------------------------------

//animation form
(function($) {

    $('#contactForm').hide();

    $( "#js_form-toggle" ).click(function() { // задаем функцию при нажатиии на элемент с классом slide-toggle
        $('#contactForm').slideToggle(); // плавно скрываем, или отображаем все элементы <div>
    });

})(jQuery);

//send form
jQuery(document).ready(function($) {
    $("#contactForm").submit(function() {
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "./wp-content/themes/ies-ux/mail.php",      // здесь указываем путь ко второму файлу
            data: str,
            success: function(msg) {
                if(msg == 'OK') {
                    result = '<div class="ok"><i class="fas fa-rocket"></i>&nbsp;Повідомлення відправлено</div>';   // текст, если сообщение отправлено
                    $("#contact-form").show();
                }
                else {result = msg;}
                $('#note').html(result);
                $('#message', '#contactForm')
                    .val('');
                $('.input', '#contactForm')       // очищаем поля после того, как сообщение отправилось
                    .not(':button, :submit, :reset, :hidden')
                    .val('')
            }
        });
        return false;
    });
});

