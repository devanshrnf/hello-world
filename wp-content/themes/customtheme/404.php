<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

get_header(); ?>


	

			<section class="error_page not-found section_wo_bg">
				<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
					<h3 class="text-center">Sorry! Page Not Found</h3>
					<h4 class="mb-5 text-center"><?php _e( 'Page Not Found'), 'customtheme' ); ?></h4>
				
</div>
</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

<!-- .wrap -->

<?php
get_footer();

