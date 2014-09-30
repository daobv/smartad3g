<?php get_header(); ?>
<!-- #blocks-wrapper-->
<div class="main_site">
    <div class="row main-site"
    <?php if (have_posts()) : while (have_posts()) : the_post();  ?>	
	<!-- /blocks Left-->
		<div class="col-md-8 col-content">
		<!-- .post-content-->
		<div class="post-content">
   
   		<!--/.post-outer -->
			<div class="post-outer clearfix">
  				<!--.post-title-->
 				  <div class="post-title"><h1 class="entry-title"><?php the_title(); ?></h1></div>
				  <!--/.post-title-->
 			 <!-- .post_content -->
			  <div class = 'post_content entry-content'>
 					<?php the_content(); ?>
 					<div class="clear"></div>
				 
			 </div>	
			 <!-- /.post_content -->
					<?php wp_link_pages(); ?>
 
  					<div class='clear'></div>
			</div>
		<!--/.post-outer -->
 
		</div>
		<!-- post-content-->
 <?php comments_template(); ?>
  				<?php endwhile; endif; ?>
			
			</div>
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
    </div>
			<!-- /blocks Left -or -right -->
 			
 			

<?php get_footer(); ?>