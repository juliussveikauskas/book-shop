require('./bootstrap');

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.click').click(function () {
        console.log('here');
    });

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });

    $('.js-chosen').chosen();

    $('#checkbox-register').on('change', function () {
        $('#password').attr('type', $('#checkbox-register').prop('checked') == true ? "text" : "password");
    });

    let time = 0;
    $.fn.updateDropdowns = function (element, url, value) {
        clearTimeout(time);
        time = setTimeout(function () {
            $.post(url, {name: value}, function (author) {
                element.append($('<option value="' + author.id + '" selected>' + author.name + '</option>'));
                element.trigger("chosen:updated");
            });
        }, 500);
    }

    $('.js-options-select-authors').on('chosen:no_results', function (evt, params) {
        $(this).updateDropdowns($(this), '/authors', $('#authors_chosen').find('.chosen-search-input').val());
    });

    $('.js-options-select-genres').on('chosen:no_results', function (evt, params) {
        $(this).updateDropdowns($(this), '/genres', $('#genres_chosen').find('.chosen-search-input').val());
    });

});


