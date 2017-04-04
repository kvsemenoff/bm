

$(document).ready(function(){
    (function($) {
      $(function() {
       $('select').styler();
      });
    })(jQuery);


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
        jQuery('.scrollspy-example').jScrollPane();
    });
 });


