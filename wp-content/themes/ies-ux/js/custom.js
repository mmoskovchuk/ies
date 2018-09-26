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
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        draggable: true,
        fade: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });
});

//SIDEBAR MENU
//-------------------------------------------------

$("#sidebar-nav > ul > li > a").click(function (e) {
    $("#sidebar-nav li > ul").slideUp(),
    $(this).next().is(":visible") || $(this).next().slideDown();

    if (!$("#sidebar-nav > ul > li").hasClass('open')) { // если класса нет
        $("#sidebar-nav > ul > li").addClass('open'); // добавляем класс
    } else { // если есть
        $("#sidebar-nav > ul > li").removeClass('open'); // убираем класс
    }

        e.stopPropagation();
});

