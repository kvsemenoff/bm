

$(document).ready(function(){

    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });

    $(".az-select").click(function(){
        $(this).find('.az-options').slideToggle(0);
        $(this).toggleClass('az-select-focus');
    });

    (function($) {
      $(function() {
       $('select').styler();
      });
    })(jQuery);

    $('body').scrollspy({ target: '.navbar-example' });



    $('a[name="js-modal"]').click(function(e) {
         e.preventDefault();
        var  id = $(this).attr('href'),
        winW = $(window).width(),
        winH = $(window).height();
        var posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;            
        $(id).css("top", posTop+50);            
        $(id).fadeIn();
        $('#mask').fadeIn();
        $('body').addClass('bodyclasspopup');       
        $('.dffixedbutton__view').animate({'left': '-320px'}, 700);
    });
    $('.window .dfclosemob, #mask').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();     
        $('body').removeClass('bodyclasspopup');
        $('.dffixedbutton__view').animate({'left': '0px'}, 900);        
    }); 



     jQuery(function(){
        jQuery('.bs-example').jScrollPane();
    });
 });


