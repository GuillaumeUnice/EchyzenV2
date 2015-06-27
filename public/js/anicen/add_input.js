$(document).ready(function(){
    $('#add-input').click(function(){

        $(".input-to-add:last").find('.form-control').attr('required','required')
            .prev('.input-group-addon').addClass('required');



        var c = $(".input-to-add:last").clone();

        $(c).find('.form-control').each(function(){

            var name = $(this).attr('name'),
                value = name.split('['),
                value_next = value[1].split(']');
            name = value[0]+'['+(parseInt(value_next[0])+1)+']';

            $(this).attr('name',name).val('');
        });
        $(".input-to-add:last").parent().append('<br/>').append(c);
    });
});