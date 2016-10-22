(function() {

	$(document).ready(function() {

		$('.item').click(function(){
			$('.item').removeClass('active');
			$('.item').removeClass('left');
			$('.item').removeClass('right');
			$(this).addClass('active');
			if($(this).is( ":nth-child(1)")){
				$('.item:nth-child(3)').addClass('left');
				$('.item:nth-child(2)').addClass('right');
			}
			if($(this).is( ":nth-child(2)")){
				$('.item:nth-child(1)').addClass('left');
				$('.item:nth-child(3)').addClass('right');
			}
			if($(this).is( ":nth-child(3)")){
				$('.item:nth-child(2)').addClass('left');
				$('.item:nth-child(1)').addClass('right');
			}
		});
	
	});

})();