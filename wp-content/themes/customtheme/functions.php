<?php
get_template_part('includes/functions/wp', 'functions');


if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}




function widget_init() {
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'customtheme' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'customtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Page  Sidebar', 'customtheme' ),
			'id'            => 'page_sidebar',
			'description'   => __( 'Add widgets here to appear in your sidebar on inner pages.', 'customtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'customtheme' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'customtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s one_third">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'customtheme' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'customtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'widget_init' );

function theme_assets(){	
	wp_enqueue_style( 'custom', get_theme_file_uri( '/css/custom.css' ), array( 'style' ), time() );	
	wp_enqueue_script( 'custom-js', get_theme_file_uri( '/js/custom.js' ), array( 'jquery' ), '', true );
	wp_enqueue_style('style', get_stylesheet_uri());
}	
add_action('wp_enqueue_scripts', 'theme_assets');

function remove_theme_assets(){	
	wp_dequeue_style( 'wp-block-library' );
}	
add_action('wp_enqueue_scripts', 'remove_theme_assets');


