$(document).ready(function() {

    var str = "{{ $promotions }}",
        promotions = str.replace(/&quot;/g, '"'),
        list = JSON.parse(promotions);

    $.each(list, function(index, value) {
        var option = $('#promotion option:last').clone().attr('value', value['id']).text(value['nom'])
            .removeAttr('selected').removeAttr('disabled');
        $('#promotion option:last').parent().append(option);
    });


    $('#promotion').change(function() {

        $('#specialite option:first').siblings().remove();

        var promotion = $('#promotion > option:selected').attr('value');

        $.each(list[promotion-1]['specialites'], function(index, value) {


            var option = $('#specialite option:last').clone().attr('value', value['id']).text(value['nom'])
                .removeAttr('selected').removeAttr('disabled');
            $('#specialite option:last').parent().append(option);
        });

    });

});