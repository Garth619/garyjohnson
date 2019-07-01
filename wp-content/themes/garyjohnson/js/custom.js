// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'

jQuery(document).ready(function($){
	

	
	 /* Modernizr - check if browser supports webp for section_one. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
     Modernizr.on('webp', function (result) {
	    
	    $('#section_one img').each(function () {
	    
				if (result) {
    
					if ($(this).attr('data-webp')) {
          
          	var img = $(this).data('webp');
          
						$(this).attr('src', img);
        	
        	}
        	
        }
  
	 			else {
		 			
		 			if ($(this).attr('data-jpg')) {
          
          	var img = $(this).data('jpg');
          
						$(this).attr('src', img);
        	
        	}
    
    		}
  		
  		});
  		
  		
  		// background images (one time load, does not reflect media queries or window width..yet)
  		
  		if (result) {
	  		
	  		var sectionOne = '#section_one';
	  		
	  		if ($(sectionOne).attr('data-webpbg')) {
		  		
		  		var imgBg = $(sectionOne).data('webpbg');
		  		
		  		$(sectionOne).css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
	  		
	  	}
	  	
	  	
	  	else {
		  	
		  	if ($('#section_one').attr('data-jpgbg')) {
		  		
		  		var imgBg = $('#section_one').data('jpgbg');
		  		
		  		$('#section_one').css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
		  	
	  	}
  		
			// console.log(result);
	
		});
		
		
		
		/* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      $('img').each(function () {
        
        if ($(this).attr('data-src')) {
          
          var img = $(this).data('src');
          
          $(this).attr('src', img);
        
        }
      
      });

      // background images
      
      $('div, section').each(function () {
       
        if ($(this).attr('data-src')) {
          
          var backgroundImg = $(this).data('src');
          
          $(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    // createWaypoint('section_two', null, null, '100%', loadImages, false);







     /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    //function wistiaLoad() {
     // jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        //console.log('wistia load:', textStatus); // Success
     // });
   // }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)
    
    
     // loads wistia on click to improve initial page speed
    $('.wistia_embed').click(function () {
        //make sure to only load if Wistia is not already loaded
        let self = this
        if (typeof Wistia === 'undefined') {
            jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js", function (data, textStatus, jqxhr) {
                // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
                // a hook we can listen for. So we need to set an interval to check when it's ready 
                var interval = setInterval(function () {
                    if (jQuery(self).attr('id') && window._wq) {
                        var videoId = jQuery(self).attr('id').split('-')[1];
                        window._wq = window._wq || [];
                        _wq.push({
                            id: videoId,
                            onReady: function (video) {
                                jQuery(self).find('.wistia_click_to_play').eq(0).trigger('click');
                            }
                        });
                        clearInterval(interval);
                    }
                }, 100)
            });
        }
    });

   
    
    
    
    
    



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		/* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
		
		
		

    // createWaypoint('section_one', '.sticky_header', 'visible', -300, null, true);
    
   


		
		/* Live Chat - Call function when script needs to be loaded either by hover, click or waypoints
   --------------------------------------------------------------------------------------------------- */ 
   
   
   
   function livechatLoad() {
	   if(my_data.live_chat) {
      jQuery.getScript(my_data.live_chat, function(data, textStatus, jqxhr) {
        console.log('Live Chat load:', textStatus); // Success
      });
      // alert( my_data.live_chat);
      }
    }
   
   
   // createWaypoint('section_one', null, null, -100, livechatLoad, false);
   // createWaypoint('internal_trigger', null, null, -100, livechatLoad, false);



	 // nav
	 
	 
	 	function navTypes() {
		 		
		 		// splitting the sub-menus into columns causes a flash so im hiding it with opacity and visibility in the stylesheet and showing below
		 		
		 		$('ul.sub-menu').addClass('show');
	     
	     if ($(window).width() > 1650) {
		     
		     	// hover effects just on desktop
	     	  
	     	  $('nav').addClass('desktop');
	     	  
	     	  // megamenu bg
	     	  
	     	  $('header').after("<div class='mega_menu_bg'></div>");
	     	  
	     	  // wrap ul.sub-menu 
		     		
		     	$('ul.sub-menu').wrap("<div class='sub_menu_wrap'><div class='sub_menu_inner'></div></div>");
		     	
		     	// spit into four columns
		     	
		     	$(function($) {
				 		
				 		var num_cols = 4,
				 		
				 		container = $('ul.sub-menu'),
				 		
				 		listItem = 'li',
				 		
				 		listClass = 'sub-list';
				 		
				 		container.each(function() {
				 			
				 			var items_per_col = new Array(),
				 			
				 			items = $(this).find(listItem),
				 			
				 			min_items_per_col = Math.floor(items.length / num_cols),
				 			
				 			difference = items.length - (min_items_per_col * num_cols);
				 			
				 			for (var i = 0; i < num_cols; i++) {
				 				
				 				if (i < difference) {
                	
                	items_per_col[i] = min_items_per_col + 1;
            		} else {
                		items_per_col[i] = min_items_per_col;
							}
        		}
        
						for (var i = 0; i < num_cols; i++) {
            	
            	$(this).append($('<ul ></ul>').addClass(listClass));
							
							for (var j = 0; j < items_per_col[i]; j++) {
                var pointer = 0;
                for (var k = 0; k < i; k++) {
                    pointer += items_per_col[k];
                }
                
                $(this).find('.' + listClass).last().append(items[j + pointer]);
            		}
        			}
    				});
					});
	     	  
	     	  // show hide menu bg (needs to be seperate bc it needs to be tucked under header with the drop showdow effect
	     	  
	     	  $("nav ul.menu > li.menu-item-has-children").hover(
	     	  
	     	  		function() {
			 			
			 					$('.mega_menu_bg').addClass('show')
  					}, 
  						
  						function() {
							
							$('.mega_menu_bg').removeClass('show');
					
					});
					
/*
					$('').on('mouseover', function(e) {
					  
					
					});
*/
					
	     
	     }
	     
	    
	     
	     
	     if ($(window).width() <= 1650) {
		     
		     $('.header_middle').addClass('hide');
		     
		     $('nav').clone().appendTo('.tablet_nav_col_one');
		     
		     $('.tablet_nav_col_one ul.menu > li.menu-item-has-children > a').on('click', function(e) {
			     
			     $('.tablet_sub_nav').empty();
		       
					 $(this).next('ul.sub-menu').clone().appendTo('.tablet_sub_nav').fadeIn();
		     	
		     	});
		     	
		     	$('.tablet_nav_col_one ul.menu > li.current-menu-ancestor > ul.sub-menu').clone().appendTo('.tablet_sub_nav').fadeIn();
		     	
		     	$('.open_close_wrapper').on('click', function(e) {
			     	
			     	$('.tablet_nav').slideToggle(400);
		     	  
		     	});
		     
	     }
	     
	     if ($(window).width() <= 1650 && $(window).width() > 767) {
		     
		     $('.open_close_wrapper').on('click', function(e) {
			     	
			     	$('.menu_wrapper').toggleClass('show');
			     	
			     	$('.close').toggleClass('hide');
		     	  
		     	});
		     
	     }
	     
	     
	     if ($(window).width() <= 1066) {
		     
		     $('.tablet_nav_col_one ul.menu > li.menu-item-has-children > a').on('click', function(e) {
			     
			     $('.tablet_nav_col_one').fadeOut(300);
			     
			     $('.tablet_nav_col_two').delay(400).fadeIn(300);
			     
		     });
		     
		     $('a.menu_back').on('click', function(e) {
			     
			      $('.tablet_nav_col_two').fadeOut(300);
			     
						$('.tablet_nav_col_one').delay(400).fadeIn(300);
		       
		     });
		     
		     $('.close').on('click', function(e) {
		       
		     		$('.tablet_nav_col_two').delay(400).fadeOut(300);
			     
						$('.tablet_nav_col_one').delay(400).fadeIn(300);
		     
		     });
		     
	     }
	     
	     
			 if ($(window).width() <= 767) {
		     
		     
		     $('.open_close_wrapper').on('click', function(e) {
			     	
			     $('.header_right').fadeOut(200);
			     
			     $('header').addClass('open-menu');
		     	  
		     });
		     
		     
		     $('.mobile_close').on('click', function(e) {
			     	
			     $('.header_right').fadeIn(200);
			     
			     $('header').removeClass('open-menu');
			     
			     $('.tablet_nav').slideUp(400);
		     	  
		     });
		     
	     }
	     
	  };
	 	
	 
	 navTypes();
        
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */


/*
$('.sec_three_slider').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
	arrows:true,
	prevArrow:".arrow_left",
	nextArrow:".arrow_right",
	responsive: [
    {
      breakpoint: 1450,
      settings: {
      slidesToShow: 5,
      slidesToScroll: 5,
     }
   },
   {
      breakpoint: 1100,
      settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      dots:true,
     }
   },
   {
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots:true,
     }
   }
	]
 });
 
*/
 

	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");


  
}); // document ready