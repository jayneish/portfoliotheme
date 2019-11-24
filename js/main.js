$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
	
	$('.ham').click(function(){
		$(".main-navigation").show();
		$("#intro").hide();
		$(".ham").hide("slow");
		$(".clro").show("slow");
	});
	
	$('.clro').click(function(){
		$(".main-navigation").hide();
		$("#intro").show();
		$(".ham").show("slow");
		$(".clro").hide();
	});
	
	
	$('.pram').click(function(){
		$(".main-navigation").show();
		$(".pram").hide("slow");
		$(".plro").show("slow");
		$(".pPM").css("width", "+=15vh");
		$(".pram").css("right", "-=12%");
	});
	
	$('.plro').click(function(){
		$(".main-navigation").hide();
		$(".pram").show("slow");
		$(".plro").hide();
		$(".pPM").css("width", "-=15vh");
		$(".pram").css("right", "+=12%");
	});
	
	
	$("form").submit( function(e) {
 
           var error = "";
           
           if($("#email").val() == "") {
               error +=" An email address is required. ";
           }
           if($("#subject").val() == "") {
               error +="The subject field is required. ";
           }
           if($("#messold").val() == "") {
               error +="A message is required.";
           }
           
           if (error != "") {
        		alert("There were error(s) in your form:" + error);
           
               return false;
           } else {
               return true;
           }
        });
        
});