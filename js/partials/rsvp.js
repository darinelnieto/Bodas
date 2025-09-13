// JS for partial: rsvp\n
$(()=>{
    $('.wpcf7-list-item-label').before(`<span class="radio-animate"></span>`);
    $('.radio-contain').on('click', '.wpcf7-list-item label', function(){
        var radio = $('input[type="radio"]', this);
        if(radio.prop('checked')){
            $(this).parent().parent().children('.wpcf7-list-item').removeClass('active');
            $(this).parent().addClass('active');
        }
    });
});