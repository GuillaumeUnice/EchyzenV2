$(document).ready(function() {

    var curr, next, prev, currSlideIdx = 0,
        nextSlideIdx = 1;
    $(document).on('click', '#cmpt-spec-list .pager li a:not(.active)', function(event) {
        event.preventDefault();
        nextSlideIdx = $(this).parents('li').index();
        $('#cmpt-spec-list>ul:nth-child(' + (currSlideIdx + 1) + ')>li:first-child').animate({
            'top': '-' + $(window).height() + 'px'
        }, 1000, 'easeInBack', function() {
            $(this).parents('ul').removeClass('active');
        });
        $('#cmpt-spec-list>ul:nth-child(' + (currSlideIdx + 1) + ')>li:last-child').animate({
            'top': $(window).height()
        }, 1000, 'easeInBack', function() {
            $(this).parents('ul').removeClass('active');
        });
        $('#cmpt-spec-list>ul:nth-child(' + (nextSlideIdx + 1) + ')>li:first-child').css({
            'top': $(window).height()
        }).delay(750).animate({
            'top': 0
        }, 1000, 'easeOutBack', function() {
            $(this).parents('ul').addClass('active');
        });
        $('#cmpt-spec-list>ul:nth-child(' + (nextSlideIdx + 1) + ')>li:last-child').css({
            'top': '-' + $(window).height() + 'px'
        }).delay(750).animate({
            'top': 0
        }, 1000, 'easeOutBack', function() {
            $(this).parents('ul').addClass('active');
        });
        
        currSlideIdx = $(this).parents('li').index();
        $('#cmpt-spec-list .pager li a.active').removeClass();
        $(this).addClass('active');
    }).on('click', '#cmpt-spec-list .arr.right', function(event) {
        event.preventDefault();
        curr = $('#cmpt-spec-list .pager li a.active');
        if (curr.parents('li').next('li').length) {
            next = curr.parents('li').next('li');
        } else {
            next = curr.parents('ul').find('li:first-child');
        }
        next.addClass('active').find('a').trigger('click');
        curr.removeClass('active');
    }).on('click', '#cmpt-spec-list .arr.left', function(event) {
        event.preventDefault();
        curr = $('#cmpt-spec-list .pager li a.active');
        if (curr.parents('li').next('li').length) {
            prev = curr.parents('li').next('li');
        } else {
            prev = curr.parents('ul').find('li:first-child');
        }
        prev.addClass('active').find('a').trigger('click');
        curr.removeClass('active');
    });

});