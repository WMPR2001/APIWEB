/*!
* Start Bootstrap - Shop Item v5.0.6 (https://startbootstrap.com/template/shop-item)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-item/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

 $(document).ready(function(){
	$('.count').prop('disabled', true);
	   $(document).on('click','.plus',function(){
		$('.count').val(parseInt($('.count').val()) + 1 );
	});
	$(document).on('click','.minus',function(){
		$('.count').val(parseInt($('.count').val()) - 1 );
			if ($('.count').val() == 0) {
				$('.count').val(1);
			}
		});
 });