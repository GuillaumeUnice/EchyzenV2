$(document).ready(function(){
    $("#competence").select2({
        tags: true
    })

    $("#competence + span + .input-group-addon")
        .css('width','20% !important')
        .css('background-color','#eee')
        .css('border-color','#ccc');

    $("#competence + .select2-container--default .select2-selection--multiple")
        .css('border-radius','0px');
});