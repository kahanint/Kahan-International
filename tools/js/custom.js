function mailto()
{
    window.location.href = "mailto:sales@kahaninternational.com";
}



function swiper2(){
	var swiper1 = new Swiper('.swiper2', {
	  //  pagination: '.pagination2',
		slidesPerView: 4,
		paginationClickable: false,
		nextButton: '.swp4',
		prevButton: '.swp3',		
		simulateTouch: false,
		spaceBetween: 10,
		breakpoints: {
	            1024: {
	                slidesPerView: 4,
	                spaceBetween: 20
	            },
	            768: {
	                slidesPerView: 3,
	                spaceBetween: 20
	            },
	            640: {
	                slidesPerView: 2,
	                spaceBetween: 20
	            },
	            320: {
	                slidesPerView: 1,
	                spaceBetween: 10
	            }
	        }
	});
}

function swiper3(){
	var swiper2 = new Swiper('.swiper3', {
	 //   pagination: '.pagination2',
		slidesPerView: 3,
		paginationClickable: false,
		nextButton: '.swp6',
		prevButton: '.swp5',		
		simulateTouch: false,
		spaceBetween: 10,
		breakpoints: {
	            1024: {
	                slidesPerView: 4,
	                spaceBetween: 20
	            },
	            768: {
	                slidesPerView: 3,
	                spaceBetween: 20
	            },
	            640: {
	                slidesPerView: 2,
	                spaceBetween: 20
	            },
	            320: {
	                slidesPerView: 1,
	                spaceBetween: 10
	            }
	        }
	});
}

function getEnq(){

	//alert($('.heading span').next().html());
	//$( "textarea[name*='msgs']" ).text($('.heading span').next().html());
}

function sendMsg(classn){
	
	var IMGPTH = $('#IMGPTH').val();
	var DOMAIN  = $('#DOMAIN').val();
	var dataArr = {};
	var isTrue = true;
	$("#"+classn).attr("disabled", true);
	$('.status').html('<img src="'+IMGPTH+'send.gif" width="43" height="11">');
	$($($('.'+classn).parents('form')).find('.form-control')).each(function( index ) {

			if(($( this ).val() == "") && $(this).attr('name') != 'dcname')
			{
				isTrue = false;
				$( this ).css('border','1px solid red');
			}
			else
			{
				dataArr[$(this).attr('name')] = $( this ).val();
				$( this ).css('border','');
			}
	});
	dataArr['case'] = 'sendContact';
	dataArr['form_type'] = 'Contact';
	if(isTrue){
		
		$.ajax({
			  method: "POST",
			  url: DOMAIN+"Ajax.php",
			  dataType: "json",
			  data:dataArr,
			  success:function(data){
					if(data.results.error == 0){
						
						$($('.'+classn).parents('form')).find('.status').html('Succesfully Sent');
						$($('.'+classn).parents('form'))[0].reset();
						if(classn != "msgsmb2")
								setTimeout(function(){$('.status').html(''); }, 5000);
						else
								setTimeout(function(){$('.status').html(''); $('#requestaquote').modal('toggle');},2000); 
							
					}
					else
					{
						$($('.'+classn).parents('form')).find('.status').html('Failed').css('color','red');
					}
					$("#"+classn).removeAttr("disabled");
			  }
		});
	}
	else
	{
		$("#"+classn).removeAttr("disabled");
		$('.status').html('');
	}
	
	return false;
}
function featuredSwiper(){
	var featuredSwiper = new Swiper('.featuredSwiper', {
	 
		slidesPerView: 3,
		nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
		spaceBetween: 10,
		//autoplay: 2500,
        autoplayDisableOnInteraction: false,
		breakpoints: {
	            1024: {
	                slidesPerView: 3,
	                spaceBetween: 10
	            },
	            768: {
	                slidesPerView: 2,
	                spaceBetween: 10
	            },
	            640: {
	                slidesPerView: 2,
	                spaceBetween: 10
	            },
	            400: {
	                slidesPerView: 1,
	                spaceBetween: 10
	            }
	        }
	
	});
}


function playvidlnk() {
	$('#links1 a img,#links1 a .glyphicon').click(function(){
		var $lnk_ = $(this).parent().attr('href');
		$('#video1').attr('src',$lnk_);
	});	
	$("body").on("click",".vidlist-vid",function(){
		var $lnk_ = $(this).attr('href');
		$('#video1').attr('src',$lnk_);
	});
	
	$('.close span, #myModal1').click(function(){
		$('#video1').attr('src', '');
	});	
}

function changeHeight(){
	if($(window).width() > 768)
	{
		var wrpMain= $(".homePage .wrp-left").height() ;
		var wrpRight= $(".homePage .wrp-right").height() + 20;
		
		if(wrpMain > wrpRight)
		{
			$(".homePage .wrp-right").css("height",wrpMain);
		}
		else
		{
			$(".homePage .wrp-left").css("height",wrpRight );
		}
	}
	

}
	
function pausevd(){
		if(typeof(player) != 'undefined')
		        player.pauseVideo();
}
	
function playvd(){
		if(typeof(player) != 'undefined')
	        player.playVideo();
}
	
$(document).ready(function(){
	
	setTimeout(function(){$('#ft').fadeIn('slow'); }, 2000);
	
	var IMGPTH = $('#IMGPTH').val();
	var ADMIN  = $('#ADMIN').val();
	
	$('#searchbnr').keyup(function(){
			var srchtrm = $(this).val();
			srchtrm = srchtrm.trim();
			$.ajax({
		
				url :"Ajax.php?case=fetchvideo",
				data:{"srchtrm":srchtrm},
				type: "POST",
				dataType:'json',
				success:function(data){
					var results = data.results;
					
					var html = '';
					$(results).each(function(i,obj) {  
							 
							 var splivideo = obj.profilevideo;		
							 splivideo = splivideo.split('embed/');
						     var prodnm = obj.productname;
							 var propic = obj.profilepic;
							 var reg = new RegExp(srchtrm, 'gi');
							 var prodnm = prodnm.replace(reg, function(str) {return '<b>'+str+'</b>'});
							 var yutubepic = '';
							
							if(propic.length  <= 0)
							{
								yutubepic = 'https://i.ytimg.com/vi/'+splivideo[1]+'/mqdefault.jpg';	
							}
							else
							{
								yutubepic = ADMIN+'uploads/productimage/'+propic;	
							}
							
							 
							html += '<div class="col-sm-3 videocol"><div class="featured-col"><a rel="media-gallery" class="vidlist-vid" data-toggle="modal" data-target="#myModal1" href="https://www.youtube.com/embed/'+splivideo[1]+'?autoplay=1&amp;rel=0&amp;html5=0"><div class="rel"><img class="transImg" src="'+IMGPTH+'/trns.png"><img class="youtubeImg" src="'+yutubepic+'"></div><span class="playicon"><span class="glyphicon glyphicon-play-circle"></span></span></a><span class="cols-dtl"><div class="vdio-name"><h3><a href="index.php?case=detail&pid='+obj.productid+'">'+prodnm+'</a></h3></div><div class="clearfix"></div></span></div></div>'; 
					});
					
					$('.videopg').html(html);
					//$('.featdrpdwn').removeClass('addFeature');
				}
			});

	});

	$('.vidlist-vid,.vidlink ').click(function(){
		var kiurl = $(this).data('video');
		//alert(kiurl);
		$('#kiplayer').html('<iframe id="video1" width="670" height="400" src="'+kiurl+'"  frameborder="0" allowfullscreen></iframe>');
	});
	
	$('#detframe').click(function(){ 
		
		var vdurl = $(this).data('video');
		$(this).html('<iframe id="dtvideo"  class="detifrme" src="'+vdurl+'" frameborder="0" allowfullscreen></iframe>');
	});
	
	if($(window).width() < 767)
	{
		$("body").on("click",".wrp-left .head",function(){
		
			$(this).toggleClass("rotateArw").next("ul").slideToggle();
		});
	}

	featuredSwiper();
	playvidlnk();
	 var swiper = new Swiper('.swiper1', {
        pagination: '.pagination1',
        paginationClickable: true,
		autoplay: 1000,
		loop: true,	
		speed : 2000,
		effect : 'fade',
		simulateTouch: false,

    });
	
	swiper2();
	swiper3();
	
	$(window).resize(function(){
		
	    	swiper2();
		swiper3();

	});
	var swiper4 = new Swiper('.swiper4', {
        slidesPerView: 'auto',
		grabCursor: true,
		centeredSlides: true,
        paginationClickable: false,
        spaceBetween: 15,
        freeMode: true,
		dots: false,
		cssEase: 'linear',
		autoplaySpeed: 2500,
		speed: 2500,
		fade: true,
		loop:true,
		autoplay: true,
		autoplayDisableOnInteraction: false,
	    });

	/*$('#playButton').click(function(){
		swiper.startAutoplay();
	});
	$('#pauseButton').click(function(){
		swiper.stopAutoplay();
	});	
	*/
	$('.swiper1').mouseover(function(){
		swiper.stopAutoplay();
		//console.log('mousein');
	}).mouseout(function(){
		swiper.startAutoplay();
		//console.log('mouseout');
	});		
	
	$('a.menu').click(function(){
		$('a.menu').removeClass("active");
		$(this).addClass("active");
	});
	
	$('.switch span').click(function(){
		$('.switch span').removeClass("act");
		$(this).addClass("act");
	});
	
	$('.photos').click(function(){
		swiper2();
		$('.swiper-photos').show(0);
		$('.swiper-videos').hide(0);
	});

	$('.videos').click(function(){		
		$('.swiper-photos').hide(0);
		$('.swiper-videos').show(0);
		swiper3();
	});	
	
	$("body").on("click",".prod-back",function(){
		console.log("helo");
		window.history.back();
	});

	/*$("body").on("click",".vidlist-vid",function(){
		var videoID=$(this).attr("video-url");
		$("#videoLightbox").modal("show");
		$("#videoLightbox #videoPlay").html("<iframe src='"+videoID+"'></iframe>");
	});
	$("body").on("click",".videoLightbox .close",function(){
		$("#videoLightbox #videoPlay").html("");
	
	});*/
	
	$("body:not(#contSlider)").on("click", function (e) {
		if($(e.target).attr('id') != 'contSlider' && $(e.target).parents("#contSlider").length == 0)
			$("#contSlider").removeClass("active");
	});
			
	$("body").on("click","#sidebar1",function(event){
		event.stopPropagation();
		$("#contSlider").toggleClass("active");
	});
	
	
	

	// Initialize the Photo Gallery as image carousel:
	
	if(document.getElementById('links'))
	{
		document.getElementById('links').onclick = function (event) {
		event = event || window.event;
		var target = event.target || event.srcElement,
			link = target.src ? target.parentNode : target,
			options = {index: link, event: event},
			links = this.getElementsByTagName('a');
			blueimp.Gallery(links, options);
		};
	}
	/* Zoom Effect JS */
	var native_width = 0;
	var native_height = 0;

	//Now the mousemove function
	$(".magnify").mousemove(function(e){
		
		var img_url = $(this).find('.small').attr('src');
		$(this).find('.large').css("background-image" , "url("+ img_url +")");
		
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".small").attr("src");
			
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{			
			var magnify_offset = $(this).offset();
			
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large").fadeIn(100);
			}
			else
			{
				$(".large").fadeOut(100);
				$(this).find('.large').css("background-image" , "url()");
			}
			if($(".large").is(":visible"))
			{			
				var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
				var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
			
				var px = mx - $(".large").width()/2;
				var py = my - $(".large").height()/2;
				
				$(".large").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	}).mouseout(function(e){
		$(".large").fadeOut(100);
	});
	
	$('.swiper3 .swiper-slide img').click(function(){
		$img_ = $(this).attr('src');
		$(this).parents('.dtl_left').find('.small').attr('src',$img_);
	});
	
	$(".nav-tabs a").click(function(){
        $(this).tab('show');
    });

	/* Scrolls */	
	//$('html, body').animate({scrollTop: $("body").offset().top}, 300);
	$('.dtl_right li a').click(function(e){
		$('html,body').animate({scrollTop: ($(".wrp-btm").offset().top + 0 )}, "fast");
		e.preventDefault();
		e.stopPropagation();
	});
	

		changeHeight();

	
	$(window).resize(function(){
		changeHeight();
	});
	
	 $(function() {
        $(this).bind("contextmenu", function(e) {
            e.preventDefault();
        });
    });
	
	$("body").on("click",".navbar-toggle",function(){
		$("body").addClass("mobile-slide-menu");;
	});
	$("body").on("click",".navbar-menuu",function(){
		$("body").removeClass("mobile-slide-menu");;
	});	

});
	

