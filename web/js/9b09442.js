/* Created by Kevin Carnaille - 30/07/2015 */

$(document).ready(function(){

    $('#main_nav li').each(function(){

        $(this).mouseover(function(){
            var l = $(this).offset().left;
            var width = $(this).width();

            $('#underscore').width(width).css({
               'left' : l - 10 + 'px'
            });

        });

        $(this).mouseout(function(){
            $('#underscore').width(0);
        });

    });


});