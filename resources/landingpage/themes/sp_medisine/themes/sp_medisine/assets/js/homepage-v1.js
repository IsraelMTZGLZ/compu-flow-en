/* Home page 1 */
if($('.categories-top .categories_slider').length > 0){
	$('.categories-top .categories_slider').each(function(){
		$(this).owlCarousel({
			loadedClass: 'owl-carousel owl-loaded',
			responsive:{
				0:{
					items:1
				},
				480:{
					items:3
				},
				768:{
					items:4
				},
				992:{
					items:5
				},
				1400:{
					items:6
				}
			},
			autoplay:false,
			loop:true,
			nav:true,
			navText: ["<i class='icon-chevron-left'></i>", "<i class='icon-chevron-right'></i>"],
			dots:false,
			autoplaySpeed: 500,
			navSpeed:500,
			dotsSpeed:500,
			autoplayHoverPause:true,
			margin:30
		}); 
	});
}

if($('.cat-wrap-slider').length > 0){
	$('.cat-wrap-slider').each(function(){
		$(this).owlCarousel({
			loadedClass: 'owl-carousel owl-loaded',
			responsive:{
				0:{
					items:2
				},
				480:{
					items:3
				},
				768:{
					items:4
				},
				992:{
					items:5
				},
				1200:{
					items:6
				}
			},
			autoplay:false,
			loop:true,
			nav:true,
			navText: ["<i class='icon-chevron-left'></i>", "<i class='icon-chevron-right'></i>"],
			dots:false,
			autoplaySpeed: 500,
			navSpeed:500,
			dotsSpeed:500,
			autoplayHoverPause:true,
			margin:30
		}); 
	});
}

if($('.sptestimonial').length > 0){
	$('.sptestimonial').each(function(){
		$(this).owlCarousel({
			loadedClass: 'owl-carousel owl-loaded',
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
				992:{
					items:1
				},
				1200:{
					items:1
				}
			},
			center: true,
			autoplay:false,
			loop:true,
			nav:true,
			navText: ["<i class='icon-chevron-left'></i>", "<i class='icon-chevron-right'></i>"],
			dots:false,
			autoplaySpeed: 500,
			navSpeed:500,
			dotsSpeed:500,
			autoplayHoverPause:true,
			margin:30
		}); 
	});
}