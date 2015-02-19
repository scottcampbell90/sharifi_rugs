/* Deluxe asynchronous navigation */

$(document).ready(function(){

  $('#affix-nav').affix({
      offset: {

        bottom: function () {
          return (this.bottom = $('.footer-wrap').outerHeight(true) + 45 );
        }
      }
    });

    /* Shell page Script */
	$('.ajax-nav a').each(function(){
		$(this).attr('href', '#' + $(this).attr('href'));
	});
	$(window).bind('hashchange', function(e) {
		var url = e.fragment;
		$('#main-col').load(url + ' #main-col-wrap');

  });
 
 

  $(".fancybox").fancybox({
    afterShow: function() {
        $(".fancybox-title").wrapInner('<div />').show();
        
        $(".fancybox-wrap").hover(function() {
            $(".fancybox-title").show();
        }, function() {
            $(".fancybox-title").hide();
        });
    },
    helpers : {
        title: {
            type: 'over'
        },
        overlay : {
          css : {
              'background' : 'rgba(0, 0, 0, 0.8)'
          }
      }
    }
  });

});




