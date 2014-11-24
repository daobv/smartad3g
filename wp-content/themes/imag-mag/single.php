<?php get_header(); ?>
<!-- #blocks-wrapper-->
<div class="main_site">
    <?php if (have_posts()) : while (have_posts()) : the_post();  ?>

	<!-- /blocks Left -or -right -->
	<div class="row main-site">

		<!-- .post-content-->
		<div class="col-md-8 col-content">
            <div>
                <ol class="breadcrumb"><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="glyphicon glyphicon-home"></i>
                            Home</a></li>
                </ol>
            </div>
		<!--/.post-outer -->
			<div class="innerContent">
            <article class="post-heading">

 				<!--.post-title-->
 				  <h2 class="post_title single-title"><?php the_title(); ?></h2>
				  <!--/.post-title-->
 		<!--/#post-meta -->
			<div class="post-meta form-group hidden-xs">
			<i class="glyphicon glyphicon-user"><?php _e('Posted by', 'imagmag'); ?> <?php the_author_posts_link(); ?></i>
			<i class="glyphicon glyphicon-time"><?php _e('On', 'imagmag'); ?> <?php the_time('F d, Y'); ?></i>
 			</div>
			<!--/#post-meta -->
			 <!-- .post_content -->
			  <div class = 'form-group post_content'>
  					<?php the_content(); ?>
  					<div class="clear"></div>
 			 </div>
			 <!-- /.post_content -->
					<?php wp_link_pages(); ?>
   					<div class='clear'></div>
					<?php if($data['posts_tags'] == 'On'){ ?>
					<p class="post-tags">
						<strong>TOPICS </strong><?php the_tags('',''); ?>
						</p>
						<?php } ?>

            </article>
			</div>
		<!--/.post-outer -->

		</div>
		<!-- post-content-->

			 <?php if($data['posts_navigation'] == 'On'){ ?>
		 		<!-- .single-navigation-->
				<div class="single-navigation clearfix">
					<div class="previous"><?php previous_post_link('%link', '<i class="icon-double-angle-left"></i><span>  Previous:</span>%title'); ?></div>
					<div class="next"><?php next_post_link('%link', '<i class="icon-double-angle-right"></i><span>Next:  </span> %title ' ); ?></div>

				</div>
				<!-- /single-navigation-->
			<?php } ?>

   					<?php comments_template(); ?>
 				<?php endwhile; endif; ?>


			<!-- /blocks Left-->
            <div class="col-md-4">
                <?php  get_sidebar(); ?>
            </div>

    </div>
<?php get_footer(); ?>