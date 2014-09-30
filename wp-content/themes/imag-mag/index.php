<?php get_header(); ?>
  
<!--#blocks-wrapper-->
<div id="blocks-wrapper" class="clearfix">
<!--#blocks-left-or-right-->

	<div id="blocks-left" class="eleven columns clearfix">	
   			<?php  include_once('includes/flex-slider.php');?>
<!--homepage content-->
 							<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Magazine Style Widgets)')){ ?>
							
							<div class="blogposts-wrapper clearfix">
									<div class="maga-excerpt">
									<p class="msgnote">
										This is Magazine Block. You can add the Magazine style content widgets that appears here by visiting your <a style="color:#0BAED6" href="<?php echo home_url();?>/wp-admin/widgets.php">Widgets panel.</a>
									</p>
								</div>
							</div>
								
							<?php } ?>
 
  			</div>
 			<!-- /blocks col -->
 <?php get_sidebar();  ?>
 <?php get_footer(); ?>