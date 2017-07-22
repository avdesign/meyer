/* Add Custom Code Jquery
 ========================================================*/
$(document).ready(function(){
	// Fix hover on IOS
	$('body').bind('touchstart', function() {}); 

	// quick bav bar - fixed
	jQuery(function(){
		function scroll_to(div){
			$('html, body').animate({
				scrollTop: $(div).offset().top-80
			},800);
		}
		$(".list_diemneo ul li").each(function(){
			$(this).click(function(){
				$('.list_diemneo ul li').removeClass("active");
				$(this).addClass("active");
				var neoindext=$(this).index()+1;
				scroll_to(".box-content"+neoindext);
				var neodiv = (".box-content"+neoindext);
				console.log(neodiv);
				var x = $(neodiv).position();
				$(".custom-scoll").css("top",x.top);
				return true;
			});
		});
	});
	jQuery(function(){
		var windowswidth = $(window).width();
		var containerwidth = $('.container').width();
		var widthcss = (windowswidth-containerwidth)/2-70;
		
		var rtl = jQuery( 'body' ).hasClass( 'rtl' );
		if( !rtl ) {
			jQuery(".custom-scoll").css("left",widthcss);
		}else{
			jQuery(".custom-scoll").css("right",widthcss);
		}
		var x = $(".box-content1").position();
	});

	// Messenger posmotion
	$( "#close-posmotion-header" ).click(function() {
		$('.promotion-top').toggleClass('hidden-promotion');
		$('body').toggleClass('hidden-promotion-body');

		if($(".promotion-top").hasClass("hidden-promotion")){
			$.cookie("open", 0);
			
		} else{
			$.cookie("open", 1);
		}

	});
	
	if($.cookie("open") == 0){
		$('.promotion-top').addClass('hidden-promotion');
		$('body').addClass('hidden-promotion-body');
	}


	// Messenger Top Link
	$('.list-msg').owlCarousel2({
		pagination: false,
		center: false,
		nav: false,
		dots: false,
		loop: true,
		slideBy: 1,
		autoplay: true,
		margin: 30,
		autoplayTimeout: 4500,
		autoplayHoverPause: true,
		autoplaySpeed: 1200,
		startPosition: 0, 
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			768:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});

	// Slider Brands Home 1 - etrostores
	jQuery(document).ready(function($) {
	    var slider1 = $(".slider-brand-layout1 .slider-brand");
	    slider1.owlCarousel2({    
	    margin:30,
	    nav:true,
	    loop:true,
	    dots: false,
	    navText: ['',''],
	    responsive:{
	            0:{
	                items:1
	            },
	            480:{
	                items:2
	            },
	            768:{
	                items:4
	            },
	            992:{
	                items:5
	            },
	            1200:{
	                items:5
	            },
	        },
	    })
	});

	// Slider Brands Home 2 - etrostores
	jQuery(document).ready(function($) {
	    var slider2 = $(".slider-brand-layout3 .slider-brand");
	    slider2.owlCarousel2({    
	    margin:0,
	    nav:false,
	    loop:true,
	    dots: false,
	    navText: ['',''],
	    responsive:{
	            0:{
	                items:2
	            },
	            480:{
	                items:2
	            },
	            768:{
	                items:3
	            },
	            992:{
	                items:5
	            },
	            1200:{
	                items:6
	            },
	        },
	    })
	});

	// Close pop up countdown
	 $( "#so_popup_countdown .customer a" ).click(function() {
	  $('body').toggleClass('hidden-popup-countdown');
	 });
	// =========================================


	// click header search header 
	jQuery(document).ready(function($){
		$( ".search-header-w .icon-search" ).click(function() {
		$('#sosearchpro .search').slideToggle(200);
		$(this).toggleClass('active');
		});
	});

	

});
