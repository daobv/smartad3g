<?php
/*****************************************************
Plugin Name: Magazine single thumb Widget
Description: Show Magazine blog Posts.To display your selected category posts, recent posts in Homepage .
Author:	RAJA CRN																					         
Author URI: http://themepacific.com																				
****************************************************************/

/**
 * Add function to widgets_init that'll load our widget.
 * @since 0.1
 */
 
add_action('widgets_init', 'imagmag_themepacific_magazine_singlethumb_widgets');
function imagmag_themepacific_magazine_singlethumb_widgets(){
 register_widget('imagmag_themepacific_magazine_singlethumb_Widget');
 }
 
/**
 * Example Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */

class imagmag_themepacific_magazine_singlethumb_Widget extends WP_Widget {
	function imagmag_themepacific_magazine_singlethumb_Widget()
	{
		$widget_ops = array('classname' => 'imagmag_themepacific_magazine_singlethumb', 'description' => 'Show Magazine blog Posts.(For Homapage only)');
		$control_ops = array('id_base' => 'imagmag_themepacific_magazine_singlethumb-widget');
		$this->WP_Widget('imagmag_themepacific_magazine_singlethumb-widget', 'ThemePacific: Magazine Blog', $widget_ops, $control_ops);
 	}
/**
* Display the widget
*/	
 	function widget($args, $instance)
 	{
 		extract($args);
		global $post;
  		$title = $instance['title'];
		$posts = $instance['posts'];
 		$get_catego = $instance['get_catego'];
 		echo $before_widget;
 		?>
 <h2 class="blogpost-wrapper-title"><a href="<?php echo get_category_link($get_catego); ?>"><?php if (get_cat_name($get_catego)) echo get_cat_name($get_catego);else echo $title;?></a> </h2>	

<div class="blog-lists full ">
 
 			<?php
 			$magazine_sing_posts = new WP_Query(array(
 				'showposts' => $posts,
 				'cat' => $get_catego,
 			));
 			$count = 1;
 			?>
  <ul>
    <?php while($magazine_sing_posts->have_posts()): $magazine_sing_posts->the_post(); ?>
 		<?php if($count == 1): ?>
 		<li class="full-left clearfix">
 				<div <?php post_class('magbig-thumb');?>>
						 
						 
					  <?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-thumbnail">
								
								<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'mag-image'); ?>
								<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"  />
 		 
 							</a>
					  <?php } else { ?>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img   src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" width="60" height="60" alt="<?php the_title(); ?>" /></a>
						<?php } ?>
						 
   				</div>
						 
				<div class="list-block clearfix">
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3> 	
					<div class="post-meta-blog">
			<span class="meta_author"><?php _e('by', 'imagmag'); ?> <?php the_author_posts_link(); ?></span>
			<span class="meta_date"><?php _e('On', 'imagmag'); ?> <?php the_time('F d, Y'); ?></span>
 			<span class="meta_comments"><?php _e('', 'imagmag'); ?>  <a href="<?php comments_link(); ?>"><?php comments_number('0 Comment', '1 Comment', '% Comments'); ?></a></span>
  			</div>
					
												
					<div class="maga-excerpt clearfix">
					<?php imagmag_themepacific_excerpt('tpcrn_home_mag'); ?>
					</div>
				</div>
         </li> 
 				<?php else: ?>
     	<li class="full-right">
 			
			<div class="sb-post-thumbnail">
 				<?php if ( has_post_thumbnail() ) { ?>
											
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'sb-post-thumbnail'); ?>
								<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"  /></a>
				<?php } else { ?>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" width="60" height="60" alt="<?php the_title(); ?>" /></a>
						<?php } ?>
 			</div>
   			
			<div class="blog-lists-title">
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
									<div class="time clearfix">
					<span class="date"><?php the_time('F d, Y'); ?></span>
 				</div>
					
 									
 			</div>
			
     	</li>	
		 							
 				<?php endif; ?>
 				<?php $count++; endwhile; wp_reset_query();?>
  </ul>

</div>
 		<?php
 		echo $after_widget;
 	}
	/**
	 * Update the widget settings.
	 */
function update($new_instance, $old_instance)
 	{
 		$instance = $old_instance;
 		$instance['title'] = $new_instance['title'];
		$instance['posts'] = $new_instance['posts'];
 		$instance['get_catego'] = $new_instance['get_catego'];
 		return $instance;
 	}
	/* Widget form*/
	
 	function form($instance)
 	{
 		$defaults = array('title' => 'Recent Posts', 'posts' =>'5','get_catego' => 'all');
 		$instance = wp_parse_args((array) $instance, $defaults); ?>
 		<p>
 			<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
 			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
 		</p>
 		<p>
 			<label for="<?php echo $this->get_field_id('get_catego'); ?>">Filter by Category:</label> 
 			<select id="<?php echo $this->get_field_id('get_catego'); ?>" name="<?php echo $this->get_field_name('get_catego'); ?>" class="widefat get_catego" style="width:100%;">
 				<option value='all' <?php if ('all' == $instance['get_catego']) echo 'selected="selected"'; ?>>Select Categories</option>
 				<?php $get_catego = get_categories('hide_empty=0&depth=1&type=post'); ?>
 				<?php foreach($get_catego as $category) { ?>
 				<option value='<?php echo $category->term_id; ?>' <?php if ($category->term_id == $instance['get_catego']) echo 'selected="selected"'; ?>><?php echo $category->cat_name; ?></option>
 				<?php } ?>
 			</select>
 		</p>
		<p>
 			<label for="<?php echo $this->get_field_id('posts'); ?>">Number of posts to show:</label>
 			<input class="widefat" style="width: 30px;" id="<?php echo $this->get_field_id('posts'); ?>" name="<?php echo $this->get_field_name('posts'); ?>" value="<?php echo $instance['posts']; ?>" />
 		</p>
 	<?php }
 }
 ?>