$(function(){
    _init_button();
    _init_popup();
});

function _init_button(){
    console.log("dddd");
    $('.submit_button').each(function () {
        $(this).on('click', function () {
            $(".w_click_prohibition_area").hide();
            $(".loading_area").show();
            oForm = $(this).parents('form');
            oForm.attr('action', $(this).data('action'));
            oForm.find('textarea.tagify').each(function () {
                $(this).tagify('serialize');
            });
            if ($(this).data('target') == '_blank') {
                oForm.attr('target', $(this).data('target'));
            } else {
                oForm.attr('target', '');
            }
            oForm.submit();
            console.log($(this).data('action'));
        });
    });
}

function _init_popup() {
    $('.popup_open').click(function() {
        console.log("_init_popup");
        _popup_open($(this).data('popup_area_name'));
    });
    $('.popup_close').click(function() {
        _popup_close();
    });
}
function _popup_close() {
    $('.popup_area').each(function(){
        $(this).removeClass('open');
    });
}
function _popup_open(className) {
    $('.popup_area').removeClass('view');
    $('.popup_area').each(function(){
        if($(this).hasClass(className)) {
            $(this).addClass('open');
        }
    });
}
