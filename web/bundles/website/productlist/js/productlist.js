$(function() {
    $('.product-display').on('click', '.product-list', function(){
        $(this).find(".product-type-list").removeClass("hide-type-list").addClass("show-type-list");
    });     

    $('.product-display').on('mouseleave', '.product-list', function(){
        $(this).find(".product-type-list").removeClass("show-type-list").addClass("hide-type-list");
    });


});
