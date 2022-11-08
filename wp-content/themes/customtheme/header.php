<?php

/**

 * The Header for our theme.

 */

?><!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php if (is_home() || is_front_page()) { ?>
            <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
        <?php } else { ?>
            <title><?php wp_title("", true); ?> | <?php bloginfo('name'); ?></title>
        <?php }
        ?>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

    

</head>



<body <?php  body_class(); ?>>
	<header>
		<div class="top_row">
			<div class="wrapper">
				<div class="d_flex flex_wrap">
					<div class="btn_box"><a href="<?php echo get_field('subscribe_button_link','option')['url'];?>"><?php echo get_field('subscribe_button_link','option')['title'];?></a></div>
					<div class="logo_box"><?php $logo = get_field('logo', 'options');?>  
					  	<a href="<?php bloginfo('url');?>"> 
					    	<img src="<?php echo $logo['url']; ?>" alt="<?php bloginfo('name');?>"  width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height']; ?>"/>
					 	</a>
					</div>
					<div class="search_box">
						<?php if(!wp_is_mobile()){?>
							<div id="header-search" class="search-panel  search_form">
                                <section id="search-3" class="widget_search">
            						<form role="search" method="get" id="searchform_header" class="searchform" action="<?php bloginfo('url');?>">
										<div class="input-field">
											<input class="blog-search-field" type="text" placeholder="Search..." value="" tabindex="-1" name="s" id="s" required />               
	                						<input class="search-btn" type="submit" value=" " />
										</div>
									</form>
								</section>
                            </div>
						<?php } else{?>

							<div class="search_btn" id="global-search">
                                <img src="<?php echo get_template_directory_uri();?>/img/search.svg" width="18" height="18" class="svg" alt="Search_icon">
                            </div>
                            <div id="header-search" class="search-panel popup_search  search_form">
                                <a href="javascript:void(0);" class="close-container search-close">
                                    <div class="leftright"></div>
                                    <div class="rightleft"></div>
                                </a>
                                <section id="search-3" class="widget_search">
            						<form role="search" method="get" id="searchform_header" class="searchform" action="<?php bloginfo('url');?>">
										<div class="input-field">
											<input class="blog-search-field" type="text" placeholder="Search..." value="" tabindex="-1" name="s" id="s" required />               
	                						<input class="search-btn" type="submit" value=" " />
										</div>
									</form>
								</section>
                            </div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<div class="nav_row">
			<div class="wrapper">
				<div class="d_flex flex_wrap">
					<div class="nav_box">
						<span class="mob_nav">
							<span class="nav_line"></span>
							<span class="nav_line"></span>
							<span class="nav_line"></span>
						</span>	
						<nav>
							<?php wp_nav_menu(array('menu'=>'Main menu'));?>
						</nav>
					</div>

					<?php if(!wp_is_mobile()){?>
					<nav class="main_menu">
						<?php wp_nav_menu(array('menu'=>'Main menu'));?>
					</nav>
					<?php  } ?>
					<div class="link_box">
						<a href="<?php the_field('cart_link','option');?>"><img src="<?php bloginfo('template_url');?>/img/cart.png"> Cart</a>
						<a href="<?php the_field('sign_in_link','option');?>"><img src="<?php bloginfo('template_url');?>/img/user.png"> Sign In</a>
					</div>
				</div>
			</div>
		</div>
	</header>