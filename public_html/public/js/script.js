// $('#filtr').click(function(){
//     $(this).load('http://sss/product-list/index');
//     $('#filtr').toggleClass('btn-invis');
// });
$('#filtr').load('http://sss/product-list/index');
$(document).ready(function() {
$(function() {
    $( "#slider_price" ).slider({
        range: true,
        min: 0,
        max: 1000000,
        step: 1000,
        values: [ 0, 1000000 ],
        slide: function( event, ui ) {
            $( "#productsearch-min_price" ).val(ui.values[ 0 ]);
            $("#productsearch-max_price").val(ui.values[1]); }
    });
    $( "#productsearch-min_price" ).val($("#slider_price").slider( "values", 0 ) );
    $("#productsearch-max_price").val($("#slider_price").slider( "values", 1 ) );
});
$(function() {
    $( "#slider_length" ).slider({
        range: true,
        min: 1.5,
        max: 5,
        step: 0.10,
        values: [ 1.5, 5 ],
        slide: function( event, ui ) {
            //Поле минимального значения
            $( "#productsearch-min_length" ).val(ui.values[0]);
            //Поле максимального значения
            $("#productsearch-max_length").val(ui.values[1]); }
    });
    //Записываем значения ползунков в момент загрузки страницы
    //То есть значения по умолчанию
    $( "#productsearch-min_length" ).val($("#slider_length").slider( "values", 0 ) );
    $("#productsearch-max_length").val($("#slider_length").slider( "values", 1 ) );
});
$(function() {
    $( "#slider_width" ).slider({
        range: true,
        min: 1.5,
        max: 5,
        step: 0.10,
        values: [ 1.5, 5 ],
        slide: function( event, ui ) {
            //Поле минимального значения
            $( "#productsearch-min_width" ).val(ui.values[0]);
            //Поле максимального значения
            $("#productsearch-max_width").val(ui.values[1]); }
    });
    //Записываем значения ползунков в момент загрузки страницы
    //То есть значения по умолчанию
    $( "#productsearch-min_width" ).val($("#slider_width").slider( "values", 0 ) );
    $("#productsearch-max_width").val($("#slider_width").slider( "values", 1 ) );
});
$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
});