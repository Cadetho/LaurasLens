String.prototype.filename=function(extension){
    var s= this.replace(/\\/g, '/');
    s= s.substring(s.lastIndexOf('/')+ 1);
    return extension? s.replace(/[?#].+$/, ''): s.split('.')[0];
}

$(document).scroll(function() {
	var scrollPos = $(window).scrollTop(),
	temp_navbar = $('.navbar-fixed-top'),
	temp_icon = $('span.icon-logo');
	
	if(scrollPos>10) {
		temp_navbar.addClass('nav-scroll-change-color');
	} else {
		temp_navbar.removeClass('nav-scroll-change-color');
	}
});

	var imglinks = [];
	var imgloc = [
		[0,0,0,0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0,0,0,0]
	];
	var currentx = 0;
	var currenty = 0;
	var gridwArr = [0];
$(document).ready(function() {
	$(window).on("load", function(){
	var gridwidth = $('.grid').width();
	
	gridwArr.push(gridwidth*0.1);
	gridwArr.push(gridwidth*0.2);
	gridwArr.push(gridwidth*0.3);
	gridwArr.push(gridwidth*0.4);
	gridwArr.push(gridwidth*0.5);
	gridwArr.push(gridwidth*0.6);
	gridwArr.push(gridwidth*0.7);
	gridwArr.push(gridwidth*0.8);
	gridwArr.push(gridwidth*0.9);
	gridwArr.push(gridwidth);
	$('.grid > div').each(function(){
		img = $(this).children()[0];
		imgwidth = $(img).width();
		imgheight = $(img).height();
		widthflag = 0;
		heightflag = 0;
		
		if(imgwidth < gridwArr[1]){
			widthflag = 1;
			imgwidth = gridwArr[1];
			$(this).width(gridwArr[1]);
			$(img).width(gridwArr[1]);
		}else if(imgwidth < gridwArr[2]){
			widthflag = 2;
			imgwidth = gridwArr[2];
			$(this).width(gridwArr[2]);
			$(img).width(gridwArr[2]);
		}else if(imgwidth < gridwArr[3]){
			widthflag = 3;
			imgwidth = gridwArr[3];
			$(this).width(gridwArr[3]);
			$(img).width(gridwArr[3]);
		}else if(imgwidth < gridwArr[4]){
			widthflag = 4;
			imgwidth = gridwArr[4];
			$(this).width(gridwArr[4]);
			$(img).width(gridwArr[4]);
		}else if(imgwidth < gridwArr[5]){
			widthflag = 5;
			imgwidth = gridwArr[5];
			$(this).width(gridwArr[5]);
			$(img).width(gridwArr[5]);
		}
		
		if(imgheight<gridwArr[2]){
			heightflag = 1;
			$(this).height(gridwArr[1]);
		} else if(imgheight<gridwArr[3]){
			heightflag = 2;
			$(this).height(gridwArr[2]);
		} else if(imgheight<gridwArr[4]){
			heightflag = 3;
			$(this).height(gridwArr[3]);
		} else if(imgheight<gridwArr[5]){
			heightflag = 4;
			$(this).height(gridwArr[4]);
		} else if(imgheight<gridwArr[6]){
			heightflag = 6;
			$(this).height(gridwArr[6]);
		} else if(imgheight<gridwArr[7]){
			heightflag = 7;
			$(this).height(gridwArr[7]);
		} else if(imgheight<gridwArr[8]){
			heightflag = 8;
			$(this).height(gridwArr[8]);
		} else if(imgheight<gridwArr[9]){
			heightflag = 9;
			$(this).height(gridwArr[9]);
		} else{
			heightflag = 10;
			$(this).height(gridwArr[10]);
		}
		
		imglinks.push({img: this, w: widthflag, h: heightflag});	
	});
	sortimgsize(0, imglinks.length-1);
	var left =0;
	var top = 0;
	var len = imglinks.length;
	$(imglinks[len-1].img).css("top", "0");
	$(imglinks[len-1].img).css("left", "0");
	setimgloc(0,0, imglinks[len-1].w, imglinks[len-1].h);
	imglinks.pop();
	while(imglinks.length>0){
			nextimg = getnextimg();
				setimgloc(currentx, currenty, imglinks[nextimg].w, imglinks[nextimg].h);
				left=currentx*gridwidth/10;
				top=currenty*gridwidth/10;
				$(imglinks[nextimg].img).css("top", top);
				$(imglinks[nextimg].img).css("left", left);
				imglinks.splice(nextimg, 1);
		}
	console.log(imgloc.length);
	$('.gallery_wrap').css("height", imgloc.length*gridwidth*0.1+"px");	
	
	
	
	});
	$('iframe#twitter-widget-0').ready(function(){
		facebook = $('div.fb-follow');
		facebook.height('28px');
		inWrapWidth = parseInt(facebook.css('margin-left').replace('px', '')) + 78*2;
		$('#button-inner-wrap').width(inWrapWidth);
		outWrapWidth = $('#button-wrapper').width();
		marginL = outWrapWidth/3 - inWrapWidth/2;
		marginR = 2*outWrapWidth/3 - inWrapWidth/2;
		$('#button-inner-wrap').css('margin-left', marginL).css('margin-right', marginR);
	});
	
	$("div#about-right-wrap").append($("div#button-wrapper"));
	$('#lightSliderHeadID-wrapper').addClass('scroll-section');
	$('div.about-wrapper').addClass('scroll-section');
	$('section.section-intro').addClass('scroll-section');

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
	if(!($('li.lslide.active > h1').hasClass('slider-text-show'))){
		$('li.lslide.active > h1').toggleClass('slider-text-show');
		$('li.lslide.active > h2').toggleClass('slider-text-show');
	}
	},
	onBeforeSlide: function(el) {
	if(($('li.lslide.active > h1').hasClass('slider-text-show'))){
		$('li.lslide.active > h1').toggleClass('slider-text-show');
		$('li.lslide.active > h2').toggleClass('slider-text-show');
	}
	}

});
function addimglocrow(count){
	for(i=0;i<=count;i++){
		imgloc.push([0,0,0,0,0,0,0,0,0,0]);
	}
}

function setimgloc(x, y, width, height){
	
	if(imgloc.length<y+height){
		addimglocrow(y+height-imgloc.length+1);
	}
	
	for(i=0; i<width; i++){
		for (j=0; j<height; j++){
			imgloc[j+y][i+x]=1;
		}
	}
}
function getnextimg(){
	
	var flag=true;
	var i=0;
	var j=0;

	var nextimg = 0;
	while(flag){
		
		if(imgloc[i][j]==0){
			currentx=j;
			currenty=i;
			flag=false;
			}
		else{
			if(j==imgloc[i].length-1){
				j=0;
				i++;
			} else {
				j++;
			}
		}
	}
	width=findnextimgwidth();
	nextimg = findBestFit(width);
	return nextimg;
}
function findBestFit(width){
		console.log(currentx + "," + currenty + "  " + width);
	for(g=0;g<imgloc.length;g++){
		console.log(imgloc[g]);
	}
	var nextimg = 0;
	var maxwidth=0;
	for(i=imglinks.length-1;i>=0;i--){
		if(imglinks[i].w>width){
			nextimg=i;
			maxwidth=width;
		} else if (i==0){
			if(width==0){ 
			var flag=true;
			while(flag){
				if(currentx==imgloc[currenty].length){
					currenty++;
					currentx=0;
					flag=false;
				} else {
					if(imgloc[currenty][currentx]==0){
						imgloc[currenty][currentx]=1;
					} else {
						flag=false;
						}
					}
				}
			
				if(currenty==imgloc.length){
					addimglocrow(1);
				}
				width=findnextimgwidth();
				nextimg = findBestFit(width);
			} else {
				width--;
				nextimg = findBestFit(width);
			}
		}
	}
	return nextimg;
}

function findnextimgwidth(){
	var width=0;
	var flag=true;
	var z=currentx;
	while(flag){
		if(z<imgloc[currenty].length){
		if(imgloc[currenty][z]==0){
			width++;
		} else if(imgloc[currenty][z]==1){
			flag=false;
		}
		z++;
		} else {
			flag=false;
		}
	}

	for(z=currentx;z<=imgloc[0].length-1;z++){
		if(imgloc[currenty][z]==0){
			width++;
		} else {
			flag=true;
		}
	}
		
	return width;
}
function sortimgsize(lowerIndex, higherIndex){
	var i = lowerIndex;
	var j = higherIndex;
	var pivot = imglinks[Math.round(lowerIndex+(higherIndex-lowerIndex)/2)].w + imglinks[Math.round(lowerIndex+(higherIndex-lowerIndex)/2)].h;
	while (i<=j){
		while (( imglinks[i].w+imglinks[i].h) < pivot){
			i++;
		}
		while (( imglinks[j].w+imglinks[j].h) > pivot){
			j--;
		}
		if(i<=j){
			arrayspotswitch(i,j);
			i++;
			j--;
		}
	}
	
	if(lowerIndex < j){ sortimgsize(lowerIndex, j);}
	if(i< higherIndex){ sortimgsize(i, higherIndex);}
}

function arrayspotswitch(i, j){
	var temp = imglinks[i];
	imglinks[i]=imglinks[j];
	imglinks[j]=temp;
}
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
		result.reverse();
		for(i=1;i<result.length+1;i++){
				$("#lightSliderHeadID li:nth-child(" + i + ")").append("<h1 class='slider-text'>" + result[i-1][0] + "</h1><h2 class='slider-text'>" + result[i-1][1] + "</h2>");
				var width = $("#lightSliderHeadID li:nth-child(" + i + ") > h1").width();
				$("#lightSliderHeadID li:nth-child(" + i + ") > h2").css("width", width*1.2);
				$("#lightSliderHeadID li:nth-child(" + i + ") > h1").css("width",  width*1.2);
				$("#lightSliderHeadID li:nth-child(" + i + ") > h1").css("border-top",  "2px solid white");
				$("#lightSliderHeadID li:nth-child(" + i + ") > h2").css("border-bottom", "2px solid white");
		}
		$('#lightSliderHeadID li:nth-child(1) > h1').toggleClass('slider-text-show');
		$('#lightSliderHeadID li:nth-child(1) > h2').toggleClass('slider-text-show');
	}
				
}

});
