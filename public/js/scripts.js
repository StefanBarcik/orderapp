$(document).ready(function(){
    $('#select').on('change', function() {
        $('.progress-bar').attr('class','progress-bar w-50');
        $('.progress-bar').attr('ariavalue-now','50');
        $('#price').val($(this).val());
        $('#product').val($("#select option:selected").text());
    });
    $('#date').on('change', function () {
        $('.progress-bar').attr('class','progress-bar w-100');
        $('.progress-bar').attr('ariavalue-now','100');
    });
});
