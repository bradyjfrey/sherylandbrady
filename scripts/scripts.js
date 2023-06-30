$(document).ready(function(){
    $('#notgoing').hide();
    $('#coming_no').change( function() {
        $('#going').hide();
        $('#notgoing').show();
    });
    $('#coming_yes').change( function() {
        $('#notgoing').hide();
        $('#going').show();
    });
});