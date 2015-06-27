$(document).ready(function(){

    $("#specialites").select2({
        tags: true
    })

    $('#valider_offre').click(function(){
        $('#offre__validation__form').show();
    });

});/**
 * Created by camille on 16/06/15.
 */
