<?php
/***********************************************************************
Plugin Name: Popular Post Widget											
Description: A Widget will display your Popular posts in your sidebar .   
Author: RAJA CRN					
Author URI: http://themepacific.com	
*********************************************************************************/

/**
 * Add function to widgets_init that'll load our widget.
 * @since 0.1
 */
 add_action( 'widgets_init', 'imagmag_themepacific_popular_posts_widget' );
 /**
 * Register our widget.
 * 'Example_Widget' is the widget class used below.
 *
 * @since 0.1
 */
  function imagmag_themepacific_popular_posts_widget() {
	register_widget( 'imagmag_themepacific_popular_posts_widget' );
}
/**
 * Example Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class imagmag_themepacific_popular_posts_widget extends WP_Widget {
  function imagmag_themepacific_popular_posts_widget() {
  $widget_ops = array('classname' => 'imagmag_themepacific_popular_posts_widget','description' => __( 'A Widget to dispaly Popular Posts With Thumbs', 'imagmag' ));
  $this->WP_Widget('tpcrn-popular-posts-widget', __( 'ThemePacific : Popular Posts Widget', 'imagmag' ), $widget_ops);	
	}
	
/**
* Display the widget
*/	
  	function widget( $args, $instance ) {
		extract($args);
		 		$title = $instance['title'];
 		$getnumpost = $instance['getnumpost'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;
		if($title)
			echo $before_title . $title . $after_title;
		/* Display the widget title if one was input (before and after defined by themes). */
		?>
 	  
		
<div class="popular-rec">
  
 <!-- Begin recent posts -->
				<ul class="sb-tabs-wrap">
					<?php global $post;$tpcrn_popularposts = new WP_Query('orderby=comment_count&ignore_sticky_posts=1&showposts='.$getnumpost );
					while ($tpcrn_popularposts->have_posts()) : $tpcrn_popularposts->the_post(); ?>
					<li>
						<div class="sb-post-thumbnail">
						<?php if ( has_post_thumbnail() ) { ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('sb-post-thumbnail', array('title' => get_the_title())); ?></a>
						<?php } else { ?>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img   src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" width="60" height="60" alt="<?php the_title(); ?>" /></a>
						<?php } ?>
						</div>
						<div class="sb-post-list-title">
							<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
							<div class="sb-post-meta">
							<p><?php the_time('F d, Y'); ?></p>
 							</div>
						</div>							
					</li>
					<?php endwhile; wp_reset_query(); ?>
				</ul>
 			<!-- End recent posts -->
 
		 </div>
		<!-- End container -->
		<?php	
	/* After widget (defined by themes). */
		echo $after_widget;		

	}
	
/**
	 * Update the widget settings.
	 */	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'] ;
		$instance['getnumpost'] = strip_tags( $new_instance['getnumpost']);
 		return $instance;
	}
	
	// Widget form
	
	function form( $instance ) {

				$defaults = array( 'title' => __('Popular Posts ', 'ThemePacific '),'getnumpost' => '3');
   				$instance = wp_parse_args( (array) $instance, $defaults ); ?>
	
 		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'imagmag'); ?></label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

 		
		<p>
			<label for="<?php echo $this->get_field_id('getnumpost'); ?>"><?php _e('Number of Posts to Show:','imagmag'); ?></label>
			<input id="<?php echo $this->get_field_id('getnumpost'); ?>" type="text" name="<?php echo $this->get_field_name('getnumpost'); ?>" value="<?php echo $instance['getnumpost'];?>"  maxlength="2" size="3" /> 
		</p>
		<?php
			
	}	

}
?>