$(function(){
    _init_button();
    _init_popup();
});

function _init_button(){
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
    $('.js_choice_button').each(function () {
        $(this).on('click', function () {
            let isCorrect = $(this).find('.is_correct')[0].value;
            let choiceId = $(this).find('.choice_id')[0].value;
            if(isCorrect == 1){
                document.getElementsByClassName('correct_img')[0].hidden = false;
                document.getElementsByClassName('error_img')[0].hidden = true;
            }else{
                document.getElementsByClassName('error_img')[0].hidden = false;
                document.getElementsByClassName('correct_img')[0].hidden = true;
            }
            document.getElementsByClassName('img_bg_view')[0].hidden = false;

            const elements = document.getElementsByClassName('choice_button');
            for(let i = 0; i < elements.length; i ++) {
                let element = elements[i];
                if(element.getElementsByClassName('is_correct')[0].value == 1){
                    element.classList.add('choice_correct_button');
                }else{
                    element.classList.add('choice_error_button');
                }
                element.classList.remove('js_choice_button');
            }
            document.getElementsByClassName('solved_area')[0].hidden = false;

            var sendData = {
                'question_id': document.getElementById('question_id').value,
                'choice_id': choiceId,
                'is_correct': isCorrect,
            }

            ajax_send_post('/question/solved/result',sendData);

        });
        $('.correct_error_img_remove_button').each(function () {
            $(this).on('click', function () {
                const elements = document.getElementsByClassName('correct_error_img_remove_button');
                for(let i = 0; i < elements.length; i ++) {
                    elements[i].hidden = true;
                }
            });
        });
    });

    $('.js_heart_icon_in_quesiton').each(function () {
        $(this).on('click', function () {
            var parentNode = $(this).closest('.heart_count_icon_in_quesiton');
            var countNode = parentNode.find(".js_like_count");
            var count = parseInt(parentNode.find(".js_like_count_num").val());
            var sendData = null;
            var questionId = parentNode.find(".js_question_id").val();
            var questionLikeId = parentNode.find(".js_question_like_id").val();

            if(parentNode.hasClass('liked')){
                parentNode.removeClass('liked');
                parentNode.addClass('noliked');
                var newCount = count - 1;
                parentNode.find(".js_like_count_num").val(newCount);
                countNode.text(newCount);
                var sendData = {
                    'question_id': questionId,
                    'liked': 0,
                    'question_like_id': questionLikeId,
                }

            }else{
                parentNode.removeClass('noliked');
                parentNode.addClass('liked');
                var newCount = count + 1;
                parentNode.find(".js_like_count_num").val(newCount);
                countNode.text(newCount);
                var sendData = {
                    'question_id': questionId,
                    'liked': 1,
                    'question_like_id': questionLikeId,
                }
            }
            ajax_send_post('/like/question/update',sendData);
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

function ajax_send_post(url,sendData){
    console.log('ajax_send_post');

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        data: sendData,
    })
    .done((data) => {
        console.log("ok");
        console.log(data);
    })
    .fail((data) => {
        console.log("ng");
        console.log(data);
    })
    .always((data) => {
    });
}
