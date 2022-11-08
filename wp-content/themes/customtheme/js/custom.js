jQuery(document).ready(function($){     

	$(window).bind('scroll', function() {
    	var navHeight = $( 'header' ).height() - 0;
        if ($(window).scrollTop() > navHeight) {
        	$('header .nav_row').addClass('top_most');
        }
        else {
        	$('header .nav_row').removeClass('top_most');
        }
    });


  /*====== Header Search Popup =======*/
    jQuery('header #global-search').click(function () {
        jQuery('body').addClass('menu_open');
        jQuery('.search-panel').addClass('search_open');
        jQuery("#searchform_header").find('input:text').val('');
    });

    jQuery('.search_form .search-close ').click(function () {
        jQuery('body').removeClass('menu_open');
        jQuery('.search-panel').removeClass('search_open');
        jQuery("#searchform_header").find('input:text').val('');
    });

  	$('header .mob_nav').click(function(e){
    	e.preventDefault();
    	$('header .mob_nav').toggleClass('active');
    	$(this).next().toggleClass('active');
  	});

	 (function () {
            var fonts = document.createElement('link');
            fonts.href = 'https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700'; 
            fonts.rel = 'stylesheet';
            fonts.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(fonts);
        })();

});
