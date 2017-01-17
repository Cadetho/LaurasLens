

String.prototype.filename=function(extension){
    var s= this.replace(/\\/g, '/');
    s= s.substring(s.lastIndexOf('/')+ 1);
    return extension? s.replace(/[?#].+$/, ''): s.split('.')[0];
}

$(document).scroll(function() {
	console.log("scrolled");
	var scrollPos = $(window).scrollTop(),
	temp_navbar = $('.navbar-fixed-top'),
	temp_icon = $('span.icon-logo');
	
	if(scrollPos>10) {
		temp_navbar.addClass('nav-scroll-change-color');
	} else {
		temp_navbar.removeClass('nav-scroll-change-color');
	}
});
$(document).ready(function() {

$("#lightSliderHeadID").lightSlider({
	item: 1,
	slideMove: 1,
	slideMargin: 0,
	mode: 'fade',
	cssEasing: 'ease',
	easing: '',
	speed: 1000,
	auto: false,
	loop: true,
	pause: 2000,
	pauseOnHover: false,
	controls: true,
	keyPress: true,
	adaptiveHeight: false,
	vertical: false,
	verticalHeight: 500,
	pager: false,
	gallery: false,
	galleryMargin: 15,
	thumbMargin: 5,
	enableTouch: true,
	enableDrag: true,
	onSliderLoad: function(el) {
		var slidecount = $('li.lslide').length;
		var x = 0;
		var result = new Array();
		result = getslidetext(slidecount, result);


		// $("#lightSliderHeadID li:nth-child(" + x + ")").append("<h1 class='slider-text'>" + output[0] + "</h1><h2 class='slider-text'>" + output[1] + "</h2>");
	},
	onAfterSlide: function (el) { 
		$('li.lslide.active > h1').toggleClass('slider-text-show');
		$('li.lslide.active > h2').toggleClass('slider-text-show');
		
	},
	onBeforeSlide: function(el) {
		$('li.lslide.active > h1').toggleClass('slider-text-show');
		$('li.lslide.active > h2').toggleClass('slider-text-show');
	}

});
function getslidetext(slidecount, result){
	if(slidecount>0){
				$.ajax({
				url: 'user/themes/lauraslens/slidertext/slidertext.php',
				data: {slide: slidecount},
				type: 'post',
				success: function(output) {
					output = output.replace(/\n/g, ",").split(",");
					result.push(output);
					slidecount--;
					getslidetext(slidecount, result);
				}
				});
	}else{
		console.log(result);
		result.reverse();
		console.log(result);
		for(i=1;i<result.length+1;i++){
			console.log(i);
				$("#lightSliderHeadID li:nth-child(" + i + ")").append("<h1 class='slider-text'>" + result[i-1][0] + "</h1><h2 class='slider-text'>" + result[i-1][1] + "</h2>");
		}
		$('#lightSliderHeadID li:nth-child(1) > h1').toggleClass('slider-text-show');
		$('#lightSliderHeadID li:nth-child(1) > h2').toggleClass('slider-text-show');
	}
				
}

});
