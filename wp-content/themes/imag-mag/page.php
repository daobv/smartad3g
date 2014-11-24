<?php get_header(); ?>
<!-- #blocks-wrapper-->
<div class="main_site">
    <div class="row main-site"
    <?php if (have_posts()) : while (have_posts()) : the_post();  ?>	
	<!-- /blocks Left-->
		<div class="col-md-8 col-content">
		<!-- .post-content-->
            <div>
                <ol class="breadcrumb"><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li></ol>
            </div>
         <article class="innerContent">
   
   		<!--/.post-outer -->
			<div class="post-outer clearfix">
  				<!--.post-title-->
 				  <header class="post-heading"><h2 class="post_title single-title"><?php the_title(); ?></h2></header>
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
 
		</article>
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