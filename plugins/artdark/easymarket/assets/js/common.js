$(document).ready(function(){
    $('.cback').magnificPopup({
        type: 'inline'
    });
});


function closeModal(time) {
    setTimeout(function () {
        $('.mfp-close').click();
    }, time);
}


// stars modals

$(document).on('click', '.stars .star', function() {
    var count = $(this).length;
    for(var i=0;i<count;i++){
        if($(this).hasClass('active')){
            $(this).nextAll().removeClass('active');
        } else {
            $(this).prevAll('div').addClass('active');
            $(this).addClass('active');
        }
    }
});

$(document).on('click', '.stars .star', function() {
    var count = $('.stars .active').length;

    $("#stars").val(count);
});


//Focusout
$(document).on('focusin', '.fline input', function(){
    $(this).next('div').addClass('active');
});
$(document).on('focusout', '.fline input', function(){
    var count = $('input.order').length;
    for(var i=0;i<count;i++){
        if($('input.order').eq(i).val() == ''){
            $('input.order').eq(i).next().removeClass('active');
        }
    }
});