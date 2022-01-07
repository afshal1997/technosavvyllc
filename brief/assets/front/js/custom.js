$('.prodly .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
	 autoplay:true,
autoplayHoverPause:false,
autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})

$('.prodly .owl-nav').hide();


//$('#myModal3').modal('show');
setTimeout(function()
{ 
  $('#myModal3').modal('show'); 
}
,
 10000
 //1000
 );
 
 
 
 
 $('.port .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
 autoplay:true,
autoplayHoverPause:false,
autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})




$('.port .owl-nav').hide();











$('.six-inner .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
		 autoplay:true,
autoplayHoverPause:false,
autoplayTimeout:10000,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


$('.six-inner .owl-nav').hide();



   $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function() {
                
            });
        }
    });
	