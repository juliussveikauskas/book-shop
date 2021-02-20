require('./bootstrap');

$(function () {
    $('.click').click(function () {
        console.log('here');
    });

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });

    $('.js-chosen').chosen();

    $('#checkbox-register').on('change', function(){
        $('#password').attr('type',$('#checkbox-register').prop('checked')==true?"text":"password");
    });
});


