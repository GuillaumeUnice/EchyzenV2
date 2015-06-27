$(document).ready(function(){

    $(".select-multiple.specialites").select2({
        tags: true
    });

    $('.valider_offre').click(function(){
        $(this).parent().parent().parent()
            .next('#offre__validation__form').css('display','block');
    });

});