<section class="section section_padding">
<div class=" container">
	<div class="row">
		<div class="col-md-12">
			<div class="bs-example">
			  <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example clearfix">
			    <div class="sidebar">
						<a href="#" class="button button__blue">Записаться на МЭС</a>
			    	<div class="search clearfix">
							<input type="text" value="" placeholder="Поиск">
							<button></button>	
						</div>
						<a href="#" class="hashtag hashtag__medium">#Про МЗС</a>
						<a href="#" class="hashtag hashtag__medium">#База знаний</a>
						<div class="hashtags">
							<span>Связанные хештеги</span>
							<a href="#" class="hashtag hashtag__sm">#Жесткий разбор с Петром Осиповыс <i>13</i></a>
							<a href="#" class="hashtag hashtag__sm">#Декларация <i>8</i></a>
							<a href="#" class="hashtag hashtag__sm">#Точка Б <i>6</i></a>
							<a href="#" class="hashtag hashtag__sm">#Взрыв мозга <i>2</i></a>
						</div>
			    </div>
			    <div class="inner">
		
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- animated button -->
<div class="dffixedbutton dffixedbutton__view">	
	<a href="#jspopupmenu" name="js-modal"></a>
</div>

<div id="mask" class="mask bgpopup"></div>

<div class="dfpopupinside window" id="jspopupmenu">
	<span class="dfm3c dfm3c__view">МЗС<b>Wiki</b></span>

	<div class="dfrightmenu">
		<a href="#" class="dflink dflink__view caplink"># Про МЗС</a>
		<a href="#" class="dflink dflink__view"># Темы МЗС</a>
		<a href="#" class="dflink dflink__view"># Спикеры</a>
		<a href="#" class="dflink dflink__view"># Тренеры</a>
		<a href="#" class="dflink dflink__view"># Кейсы участников</a>
		<a href="#" class="dflink dflink__view"># Люди, неформальное общение</a>
		<a href="#" class="dflink dflink__view"># Формат обучения</a>
		<a href="#" class="dflink dflink__view paddingbot"># Условия обучения</a>
		<a href="#" class="dflink dflink__view caplink"># База знаний </a>
		<a href="#" class="dflink dflink__view"># Технологии</a>
		<a href="#" class="dflink dflink__view"># Метафизика</a>
	</div>
	<div class="clearfix"></div>
</div>



<script>
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
	$('.window .dd-close, #mask').click(function (e) {
		e.preventDefault();
		$('#mask, .window').hide();		
		$('body').removeClass('bodyclasspopup');
		$('.dffixedbutton__view').animate({'left': '0px'}, 900);		
	}); 

</script>