// JS for partial: header\n
var currentLink = window.location.href;
$(()=>{
    $('.the-nav a').each(function() {
        var linkUrl = $(this).attr('href');
        if (linkUrl === currentLink) {
            $(this).addClass('active');
        }
    });
});
if($(window).width() < 768){
    var nav_status = false;
    $('.bar-menu').on('click', ()=>{
        if(nav_status === false){
            $('.bar-menu').addClass('active');
            $('.the-nav').addClass('active');
            nav_status = true;
        }else{
            $('.the-nav').removeClass('active');
            $('.bar-menu').removeClass('active');
            nav_status = false;
        }
    })
}