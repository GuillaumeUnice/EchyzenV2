$(document).ready(function(){

    $('.add-update-form').click(function(event){
        $(event.target).attr('disabled','disabled')
            .prev().css('display','inline-block');
    });

    $('.add-update-form-many').click(function(event){
        $(event.target).attr('disabled','disabled')
            .parent().next().css('display','inline-block');
    });
});