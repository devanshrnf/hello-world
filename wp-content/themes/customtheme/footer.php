<footer>
	<div class="wrapper">
		<div class="d_flex flex_wrap">
			<div class="footer_col one_third_col">
				<div class="inner_wrap">
				<h4><?php the_field('social_heading','options');?></h4>
					<nav>
						<ul>
							<?php if(get_field('facebook','options')){?><li><a href="<?php the_field('facebook','options');?>" target="_blank">Facebook</a></li><?php }?>
	                        <?php if(get_field('pinterest','options')){?><li><a href="<?php the_field('pinterest','options');?>" target="_blank">Pinterest</a></li><?php }?>
	                        <?php if(get_field('youtube','options')){?><li><a href="<?php the_field('youtube','options');?>" target="_blank">Youtube</a></li><?php }?>
	                        <?php if(get_field('instagram','options')){?><li><a href="<?php the_field('instagram','options');?>" target="_blank">Instagram</a></li><?php }?>
	                        <?php if(get_field('twitter','options')){?><li><a href="<?php the_field('twitter','options');?>" target="_blank">Twitter</a></li><?php }?>  
						</ul>
					</nav>
				</div>
			</div>
			<div class="footer_col one_third_col">
				<div class="inner_wrap">
					<div class="logo_box"><?php $logo = get_field('footer_logo', 'options');?>  
					  	<a href="<?php bloginfo('url');?>"> 
					    	<img src="<?php echo $logo['url']; ?>" alt="<?php bloginfo('name');?>"  width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height']; ?>"/>
					 	</a>
					</div>
					<?php if(get_field('brief_text','options'));?><p><?php the_field('brief_text','options');?></p>
					<form action="#" method="post">
						<input type="email" name="subscribe" placeholder="Subscribe...">
						<input type="submit">
					</form>
				</div>
			</div>
			<div class="footer_col one_third_col">
				<div class="inner_wrap">
				<h4><?php the_field('post_heading','options');?></h4>	
					<nav>
						<?php wp_nav_menu(array('menu'=>'Post menu'));?>
					</nav>
				</div>
			</div>
		</div>
	</div>
</footer>


<?php  wp_footer(); ?>


</body>
</html>