<?php
/************************************************************
Plugin Name: Category Widget												
Description: The Widget will display your Category posts,in your sidebar .
Author: ThemePacific Team
Author URI: http://themepacific.com
************************************************************************************/
/**
 * Add function to widgets_init that'll load our widget.
 * @since 0.1
 */
 add_action( 'widgets_init', 'imagmag_themepacific_recent_category_widget' );
 /**
 * Register our widget.
 * 'Example_Widget' is the widget class used below.
 *
 * @since 0.1
 */
  function imagmag_themepacific_recent_category_widget() {
	register_widget( 'imagmag_themepacific_recent_category_widget' );
}
/**
 * Example Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class imagmag_themepacific_recent_category_widget extends WP_Widget {
  function imagmag_themepacific_recent_category_widget() {
  $widget_ops = array('classname' => 'imagmag_themepacific_recent_category_widget','description' => __( 'A Widget to dispaly Category Posts With Thumbs', 'imagmag' ));
  $this->WP_Widget('tpcrn-cat-posts-widget', __( 'ThemePacific : Category Posts Widget', 'imagmag' ), $widget_ops);	
	}
	
/**
* Display the widget
*/	
  	function widget( $args, $instance ) {
		extract($args);
		$title = $instance['title'];
		$get_catego = $instance['get_catego'];
 		$getnumpost = $instance['getnumpost'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;
		if($title)
			echo $before_title . $title . $after_title;
		/* Display the widget title if one was input (before and after defined by themes). */
		?>
 	 
		
<div class="popular-rec">
  
 <!-- Begin category posts -->
				<ul class="sb-tabs-wrap">
					<?php  	global $post;$tpcrn_recent_cat_query = new WP_Query(array(
 				'showposts' => $getnumpost,
 				'cat' => $get_catego,
 			)); 
					while ( $tpcrn_recent_cat_query -> have_posts() ) : $tpcrn_recent_cat_query -> the_post(); ?>
					<li>
						<div class="sb-post-thumbnail">
						<?php if ( has_post_thumbnail() ) { ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('sb-post-thumbnail', array('title' => get_the_title())); ?></a>
						<?php } else { ?>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" width="60" height="60" alt="<?php the_title(); ?>" /></a>
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
 			<!-- End category posts -->
 
		 </div>
		<!-- End  container -->
		<?php	
	/* After widget (defined by themes). */
		echo $after_widget;		

	}
	
/**
	 * Update the widget settings.
	 */	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['get_catego'] = $new_instance['get_catego'];
		$instance['getnumpost'] = strip_tags( $new_instance['getnumpost']);
 		return $instance;
	}
	
	// Widget form
	
	function form( $instance ) {

				$defaults = array( 'title' => __('Category Name ', 'ThemePacific '),'getnumpost' => '3','get_catego' => 'all');
   				$instance = wp_parse_args( (array) $instance, $defaults ); ?>
	
 		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Enter category Name:', 'imagmag'); ?></label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

 		
		<p>
			<label for="<?php echo $this->get_field_id('getnumpost'); ?>"><?php _e('Number of Posts to Show:','imagmag'); ?></label>
			<input id="<?php echo $this->get_field_id('getnumpost'); ?>" type="text" name="<?php echo $this->get_field_name('getnumpost'); ?>" value="<?php echo $instance['getnumpost'];?>"  maxlength="2" size="3" /> 
		</p>
			<p>
 			<label for="<?php echo $this->get_field_id('get_catego'); ?>">Filter by Category:</label> 
 			<select id="<?php echo $this->get_field_id('get_catego'); ?>" name="<?php echo $this->get_field_name('get_catego'); ?>" class="widefat categories" style="width:100%;">
 				<option value='all' <?php if ('all' == $instance['get_catego']) echo 'selected="selected"'; ?>>Select categories</option>
 				<?php $get_catego = get_categories('hide_empty=0&depth=1&type=post');  
 				 foreach($get_catego as $category) { ?>
 				<option value='<?php echo $category->term_id; ?>' <?php if ($category->term_id == $instance['get_catego']) echo 'selected="selected"'; ?>><?php echo $category->cat_name; ?></option>
 				<?php } ?>
 			</select>
 		</p>
		<?php
			
	}	

}
?>