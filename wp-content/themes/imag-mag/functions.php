<?php
/*
Author: RAJA CRN
URL: ThemePacific.com
*/
/*===================================================================================*/
/*  Load ThemePacific FrameWork Assets
/*==================================================================================*/

		define('TPACIFIC_DIR', get_template_directory());
		define('TPACIFIC_URI', get_template_directory_uri());	    
		define('TPACIFIC_ADMIN', TPACIFIC_DIR . '/admin');
		define('TPACIFIC_ADMINURI', TPACIFIC_URI . '/admin');          
		define('TPACIFIC_JS', TPACIFIC_URI . '/js'); 
		define('TPACIFIC_CSS', TPACIFIC_URI . '/css');
		define('TPACIFIC_IMG', TPACIFIC_URI . '/images');
  		define('TPACIFIC_WIDGET', TPACIFIC_ADMIN . '/widgets');
 		include_once (TPACIFIC_ADMIN.'/index.php');
 		
$themename="imagmag";

/*===================================================================================*/
/* Theme Support
/*==================================================================================*/

/*-- Post thumbnail + Menu Support + Formats + Feeds --*/
function imagmag_themepacific_theme_support_image()
{
  		add_theme_support('post-thumbnails' );
		add_image_size('mag-image', 340, 160,true);
 		add_image_size('blog-image', 220, 180,true);		
		add_image_size('sb-post-thumbnail', 70, 70,true);
 		add_theme_support( 'automatic-feed-links' );
			register_nav_menus(
			array(
 				'topNav' => __('Top Menu','imagmag' ),
 				'mainNav' => __('Cat Menu','imagmag' ),
			)		
		);
}
add_action( 'after_setup_theme', 'imagmag_themepacific_theme_support_image' );

/*===================================================================================*/
/* Functions
/*==================================================================================*/

/*-- Load Custom Theme Scripts using Enqueue --*/
function imagmag_themepacific_scripts_method() {
	if ( !is_admin() ) {
		global $data;
        wp_enqueue_style( 'style', get_stylesheet_uri());  		
 		wp_enqueue_style('camera', get_stylesheet_directory_uri().'/css/camera.css');
		wp_enqueue_style('skeleton', get_stylesheet_directory_uri().'/css/skeleton.css');
  
  		wp_register_script('easing', get_template_directory_uri(). '/js/jquery.easing.1.3.js'); 
  		wp_register_script('jquery.mobilemenu.min', get_template_directory_uri(). '/js/jquery.mobilemenu.min.js'); 
 		wp_register_script('themepacific.script', get_template_directory_uri(). '/js/tpcrn_scripts.js', array('jquery'), '1.0', true); 	
 		wp_register_script('camera', get_template_directory_uri(). '/js/camera.min.js',array('jquery'), '2.0',true); 		
  		wp_register_script('jquery.mobile.customized.min', get_template_directory_uri(). '/js/jquery.mobile.customized.min.js',array('jquery'), '2.0',true); 

		wp_enqueue_script('jquery');
		wp_enqueue_script('camera');
		wp_enqueue_script('jquery.mobile.customized.min');			
    	wp_enqueue_script('jquery-ui-widget');	
  		wp_enqueue_script('jquery.mobilemenu.min');
  		wp_enqueue_script('easing');
		wp_enqueue_script('themepacific.script');
 	
	}

}
 
/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 */
function imagmag_themepacific_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $sep $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $sep " . sprintf( __( 'Page %s', 'tpcrn' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'imagmag_themepacific_wp_title', 10, 2 );
 

 /*-----------------------------------------------------------------------------------*/
/* Register sidebars
/*-----------------------------------------------------------------------------------*/
function imagmag_themepacific_widgets_init() {

 	register_sidebar(array(
		'name' => 'Default Sidebar',
		'before_widget' => '<aside id="text-4" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'Magazine Style Widgets',
		'before_widget' => '<div id="%1$s" class="%2$s blogposts-wrapper clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
 
	
	register_sidebar(array(
		'name' => 'Footer Block 1',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Block 2',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Block 3',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'Footer Block 4',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'imagmag_themepacific_widgets_init' );
 
 
/*-- Pagination --*/

function imagmag_themepacific_pagination() {
	
		global $wp_query;
		$big = 999999999;
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
			'format' => '?paged=%#%',
			'prev_next'    => false,
			'prev_text'    => __('<i class="icon-double-angle-left"></i>'),
	        'next_text'    => __('<i class="icon-double-angle-right"></i>'),
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages )
		);
	}
 /*-- Breadcrumbs--*/
 function imagmag_themepacific_breadcrumb() {
	if (!is_home()) {
	
		echo '<ul id="tpcrn-breadcrumbs"><li><a href="'.home_url().'">Home &raquo;</a> </li>';
		if (is_category() || is_single()) {
			 
$category = get_the_category(); 
$brecat_title = $category[0]-> cat_ID;
$category_link = get_category_link($brecat_title);
echo '<li><a class="vca" href="'. esc_url( $category_link ) . '">' . $category[0]->cat_name . ' &raquo;</a></li>';
 	 
			if (is_single()) {
				echo '<li class="current">';
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			echo '<li class="current">';
				the_title();
				echo '</li>';
		}
	echo '</ul>'; 
	}
}
  /*-- Custom Excerpts--*/
 function imagmag_themepacific_home_mag($length) {   
	    return 34;
	}
 
	
 
/*--- Create the Custom Excerpts callback---*/
function imagmag_themepacific_excerpt($length_callback='', $more_callback='') {
	    global $post;
	    if(function_exists($length_callback)){
	        add_filter('excerpt_length', $length_callback);
	    }
	    if(function_exists($more_callback)){
	        add_filter('excerpt_more', $more_callback);
	    }
	    $output = get_the_excerpt();
	    $output = apply_filters('wptexturize', $output);
	    $output = apply_filters('convert_chars', $output);
	    $output = '<p>'.$output.'</p>';
	    echo $output;
	}
 
if (!isset( $content_width )) $content_width = 580;
 

/*-- Multiple Page Nav--*/		

function imagmag_themepacific_single_split_page_links($defaults) {
	$args = array(
	'before' => '<div class="single-split-page"><p>' . __('<strong>Pages</strong>','imagmag'),
	'after' => '</p></div>',
	'pagelink' => '%',
	);
	$r = wp_parse_args($args, $defaults);
	return $r;
	}
 

 
/*-- Translation--*/
load_theme_textdomain('imagmag', get_template_directory() . '/languages');
$locale = get_locale();
$locale_file = get_template_directory() . '/languages/' . $locale . '.php';
 if(is_readable($locale_file)) {
	require_once($locale_file);
}

/*===================================================================================*/
/*  Actions + Filters + Translation
/*==================================================================================*/

  
/*-- Multiple Page Nav tweak --*/		
add_filter('wp_link_pages_args','imagmag_themepacific_single_split_page_links');
 
/*-- Register and enqueue  javascripts--*/
add_action('wp_enqueue_scripts', 'imagmag_themepacific_scripts_method');
add_action( 'imagmag_themepacific_cre_def_call', 'imagmag_themepacific_cre_def');

/*===================================================================================*/
/*  Comments
/*==================================================================================*/

function imagmag_themepacific_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'imagmag' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'imagmag' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li id="comment-<?php comment_ID(); ?>">
		<div <?php comment_class('comment-wrapper'); ?> >
 				<div class="comment-avatar">
					<?php
						$avatar_size = 65;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 65;

						echo get_avatar( $comment, $avatar_size );?>
				</div>
				<!--comment avatar-->
				<div class="comment-meta">
					<?php	
						printf( __( '%1$s  %2$s  ', 'imagmag' ),
							sprintf( '<div class="author">%s</div>', get_comment_author_link() ),
							sprintf( '%4$s<a href="%1$s"><span class="time" style="border:none;">%3$s</span></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),get_comment_date(),								
								sprintf( __( '<span class="time">%1$s </span>', 'imagmag' ),   get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'imagmag' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- /comment-meta -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'imagmag' ); ?></em>
					<br />
				<?php endif; ?>

 
			<div class="comment-content">
				<?php comment_text(); ?>
				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( ' <span><i class="icon-reply"></i></span> Reply', 'imagmag' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div> <!--/reply -->
			</div><!--/comment-content -->	
		</div>	<!--/Comment-wrapper -->
 			 
 	<?php
			break;
	endswitch;
}
?>