<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */

get_header(); ?>

<?php get_template_part('includes/banner/page','banner');?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blog.css?ver=<?php echo time(); ?>">

<?php
$post_type = "";
if (isset($_GET['s'])) {
    $keyword = $_GET['s'];
}
if (isset($_GET['post_type'])) {
    $post_type = $_GET['post_type'];
}
?>
<?php if ($keyword && empty($post_type) || $keyword && $post_type == "undefined" || $keyword && $post_type == "") { ?>
<div class="content_area search_result section_wo_bg pt-0">
	<div class="wrapper">
		<div class="row section_wo_bg">
			<div class="col-lg-8 col-md-7 col-12 ">
				
				<?php if ( have_posts() ) : ?>
			<h3 class="page-title">
				<?php //echo $wp_query->found_posts; ?>
			<?php
			/* translators: Search query. */
			printf( __( 'Search Results for: %s', 'customtheme' ), '<span>' . get_search_query() . '</span>' );
			?>
			</h3>
		<?php else : ?>
			<h3 class="page-title"><?php _e( 'Nothing <span>Found</span>', 'customtheme' ); ?></h3>
		<?php endif; ?>

			<?php
		if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
			?>
			<div class="single_item">
				<h4 class="mb-3 brown_text"><a href="<?php the_permalink();?>" class="dark_blue_text"><?php the_title();?></a></h4>
				<p class="mb_3"><?php echo wp_trim_words(get_the_excerpt(), 20, '...');?></p>
				<a href="<?php the_permalink();?>" class="common_btn">Read More </a>
			</div>
<?php 
			endwhile; // End the loop.
?>
  <div class="pagination text-center w-100 mt-4">
                            <?php 
                                the_posts_pagination(array(
								    'mid_size'  => 5,'screen_reader_text' => '',  'before_page_number' => '',
								    'prev_text' => __( 'PRE', 'textdomain' ),
								    'next_text' => __( 'NEXT', 'textdomain' ),
								) );
							?>
						</div>
						<?php
		

		else :
			?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'customtheme' ); ?></p>
	
<?php
		endif;
		?>
			</div>
			<div class="col-lg-4 col-md-5 col-12 sidebar">
		<?php get_sidebar();?>
				</div>
		</div>
	</div>
</div>

<?php } ?>

<?php if ($keyword && $post_type == "post") { ?>

<div class="content_area search_result">
	<div class="wrapper">
		<div class="row section_wo_bg">
			<div class="col-lg-8 col-md-7 col-12 content_col">
				<div class=" p-4">
				<?php if ( have_posts() ) : ?>
			<h3 class="page-title">
				<?php //echo $wp_query->found_posts; ?>
			<?php
			/* translators: Search query. */
			printf( __( 'Search Results for: %s', 'customtheme' ), '<span>' . get_search_query() . '</span>' );
			?>
			</h3>
		<?php else : ?>
			<h3 class="page-title"><?php _e( 'Nothing <span>Found</span>', 'customtheme' ); ?></h3>
		<?php endif; ?>

			<?php
		if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

			?>
		<div class="single-blog-box">
			<div class="blog-image-wrapper">
				<a href="<?php the_permalink(); ?>" class="blog-image">
					<?php 
						$feature_img = wp_get_attachment_image( get_post_thumbnail_id( $post->ID), 'large' );
						if ( !empty($feature_img) ) {
							echo $feature_img;
						}else {
					 ?>
					 	<div class="post-img-palceholder">
					 		<?php $logo = get_field('logo', 'options'); ?>
						     <img src="<?php echo $logo['url']; ?>" alt="<?php bloginfo('name');?>"  width="auto" height="auto"/>
					 	</div>
				 	<?php } ?>								 	
				</a>
				<div class="post-date-n-cat">
			 		<?php $terms = get_the_terms( $post->ID, 'category' ); ?>
			 		<p>On Behalf of stolzenbergcortelli, LLP | <?php the_date(); ?> 
			 			<?php if (!empty($terms)) {
			 				foreach ($terms as $term) {
			 					$url = get_category_link( $term->term_id );
			 					echo " | <a href=$url>" . $term->name . "</a>";  
			 				}
			 			} ?>
			 		</p>
			 	</div>
			</div>

        	<h4><?php the_title(); ?></h4>
        	<div class="blog-desc">
        		<?php echo wp_trim_words(get_the_excerpt(), 50, '...'); ?>
        	</div>
        	<a href="<?php the_permalink(); ?>" class="common_btn">Read More</a>
		</div>
<?php 
			endwhile; // End the loop.

			

		else :
			?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'customtheme' ); ?></p>
		
<?php
		endif;
		?>
			</div></div>
			<div class="col-lg-4 col-md-5 col-12 sidebar">
				<?php get_sidebar();?>
				</div>
		</div>
	</div>
</div>

<?php } ?>	
<?php
get_footer();
?>

