$(function() {
    $('.more-services').hide();
    $('#more-service').click(function() {
        $(this).hide();
        $('.more-services').show('slow');
    });
});