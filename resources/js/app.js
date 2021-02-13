require('./bootstrap');

$(function () {
    $('.click').click(function () {
        console.log('here');
    });

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });

    $('.js-chosen').chosen();
});


