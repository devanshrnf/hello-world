<?php 
/*
*
* Template Name: Subscripton Page 
*/
get_header();
?>
<section class="subscription_sec">
	<div class="wrapper">
		<div class="inner_wrap">
			<?php if(get_field('sub_heading')){?><h5 class="subheading"><?php the_field('sub_heading');?></h5><?php }?>
			<?php if(get_field('heading')){?><h1 class="heading"><?php the_field('heading');?></h1><?php }?>
			<div class="form_box">
				<form method="get" action="#">
					<div class="input_field_row field_row d_flex flex_wrap">
						<div class="input_field field_item one_third_col"><label>First Name<span>*</span></label><input type="text" name="firstname"  required></div>
						<div class="input_field field_item one_third_col"><label>Middle Name</label><input type="text" name="middlename"></div>
						<div class="input_field field_item one_third_col"><label>Last Name<span>*</span></label><input type="text" name="lastname"  required></div>
						<div class="input_field field_item full_col"><label>Email<span>*</span></label><input type="email" name="email"  required></div>
					</div>
					<?php $i=1; if(have_rows('roleplay_options')){?>
						<div class="role_play_field">
							<?php if(get_field('roleplay_label')){?><h3 class="field_heading"><?php the_field('roleplay_label');?></h3><?php } ?>
							<div class="role_play_row field_row d_flex flex_wrap">
								<?php while(have_rows('roleplay_options')): the_row();
									$option = get_sub_field('options');
									$plain_option = str_replace('<br>',' ',$option);?>
									<div class="role field_item"><input type="radio" id="role<?php echo $i;?>" name="role" value="<?php echo $plain_option;?>" <?php if($i==1){echo 'checked="checked"';}?>><label for="role<?php echo $i;?>"><?php the_sub_field('options');?></label></div>
								<?php $i++; endwhile;?>	
							</div>
						</div>
					<?php }?>
					<?php $j=1;if(have_rows('age_group_options')){?>
						<div class="age_group_field">
							<?php if(get_field('age_group_label')){?><h3 class="field_heading"><?php the_field('age_group_label');?></h3><?php } ?>
							<div class="age_group_row field_row d_flex flex_wrap">
								<?php while(have_rows('age_group_options')): the_row();
									$option = get_sub_field('options');
									$plain_option = str_replace('<br>',' ',$option);
									?>
									<div class="age_group field_item"><input type="radio" id="age<?php echo $j;?>" name="age" value="<?php echo $plain_option;?>" <?php if($j==2){echo 'checked="checked"';}?>><label for="age<?php echo $j;?>"><?php the_sub_field('options');?></label></div>
								<?php $j++; endwhile;?>	
							</div>
						</div>
					<?php }?>
					<div class="btn_box">
						<input type="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	jQuery(document).ready(function($){
		jQuery('.input_field_row .input_field  input').on('keyup',function(e){
			if($(this).val() == ''){
         		$(this).prev().show();
      		}else{
         		$(this).prev().hide();
			}
		});
	});
</script>
<?php get_footer();?>