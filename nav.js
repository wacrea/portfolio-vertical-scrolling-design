$(function() {
	$('ul a').bind('click',function(event){
			
			// Recupération de l'endroit où le visiteur veut aller
			var href = $(this).attr("href");


			var p = $(href);
			var position = p.position();

			$('html,body').animate({scrollTop: position.top}, 'slow');
	});

	$('#top').click(function() {

			$('html,body').animate({scrollTop: 0}, 'slow');

		  });

		  

		  $(window).scroll(function(){

			 if($(window).scrollTop()<300){

				$('#top').fadeOut();

			 }else{

				$('#top').fadeIn();

			 }
	});

});