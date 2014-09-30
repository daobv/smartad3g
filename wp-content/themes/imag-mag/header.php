<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>	
<!-- Meta info -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!-- Title -->
<?php global $data;?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Arimo' rel='stylesheet' type='text/css'>
 <?php if($data['custom_feedburner']) : ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo $data['custom_feedburner']; ?>" />
<?php endif; ?>
<?php if($data['custom_favicon']): ?>
<link rel="shortcut icon" href="<?php echo $data['custom_favicon']; ?>" /> <?php endif;  ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- CSS + jQuery + JavaScript --> 
<?php 	
if ( is_singular() && get_option( 'thread_comments' ) )		wp_enqueue_script( 'comment-reply' );  
	
?>
<!--[if lt IE 9]> 
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/ie8.css' type='text/css' media='all' />
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<script type="text/javascript" src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!--[if  IE 9]>
<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/ie9.css' type='text/css' media='all' /> 
<![endif]-->

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"> </script>
<?php wp_head();?>
</head>

<body <?php body_class();?>> 
   <?php 
     if ( has_nav_menu('topNav') ){ 
   ?>
	<!-- #CatNav -->  
	<div id="catnav">	
		<?php wp_nav_menu(array('theme_location' => 'topNav','container'=> '','menu_id'=> 'catmenu','menu_class'=> ' container clearfix','fallback_cb' => 'false','depth' => 3)); ?>
	</div> 
	<!-- /#CatNav -->  
	<?php } ?> 
<!-- /#Header --> 
<div id="header" class="container">	
	<div id="head-content" class="clearfix ">


			<!-- Logo -->
			<div id="logo">   
				<?php if($data['custom_logo'] !='') { 
				if($data['custom_logo']) {  $logo = $data['custom_logo']; 		
				} else { $logo = get_template_directory_uri() . '/images/logo31.png';
				} ?>  <a href="<?php echo esc_url( home_url( '/' ) );  ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ) ?>" /></a>    
				<?php } else { ?>   
				<?php if (is_home()) { ?>     
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> <span><?php bloginfo( 'description' ); ?></span>
				<?php } else { ?>  
				<h2><a href="<?php echo esc_url( home_url( '/' ) );  ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>  
				<?php } } ?>   
			</div>

        <!-- /#Logo -->
		<!-- Header Ad -->
 		<div id="header-banner468">
            <form method="get" class="searchform" action="<?php echo home_url(); ?>/">
                <input class="searchfield" type="text" name="s" id="s" value="<?php _e('Search here..', 'imagmag'); ?>" onfocus="if (this.value == '<?php _e('Search here..', 'imagmag'); ?>') {this.value = '';}" onblur="if (this.value == '')
                    {this.value = '<?php _e('Search here..', 'imagmag'); ?>';}">
                <span class="input-group-btn">
                            <button type="submit" id="searchsubmit" class="btn btn-default">
                                <b class="glyphicon glyphicon-search"></b> Search
                            </button>
                </span>
            </form>
		</div>
        <div class="service-logo">
            <img src ="<?php echo get_template_directory_uri(); ?>/images/logo-mobi.png" alt="<?php bloginfo( 'name' ); ?>">
        </div>
		<!-- /#Header Ad -->
	</div>	
 </div>
<!-- /#Header --> 

<!-- #wrapper -->	
<div id="wrapper" class="container clearfix"> 
   <?php 
     if ( has_nav_menu('mainNav') ){ 
   ?>
	<!-- #CatNav -->  
	<div id="catnav_2" class="secondary">	
		<?php wp_nav_menu(array('theme_location' => 'mainNav','container'=> '','menu_id'=> 'catmenu_2','menu_class'=> 'catnav  container clearfix','fallback_cb' => 'false','depth' => 3)); ?>
	</div> 
	<!-- /#CatNav -->  
	<?php } ?> 
 
	<!--[if lt IE 8]>
		<div class="msgnote"> 
			Your browser is <em>too old!</em> <a rel="nofollow" href="http://browsehappy.com/">Upgrade to a different browser</a> to experience this site. 
		</div>
	<![endif]-->	