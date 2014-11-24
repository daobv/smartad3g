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

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lazyload.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body style="background-color: #F5F3F4">
<nav class="navbar navbar-default navbar-top" role="navigation">
    <div class="container inner-container text-center">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav_top">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse text-center" id="nav_top">
            <ul id="menu-navbar-top" class="nav navbar-nav menu text-center">
                <li id="menu-item-253" class="menu-item menu-item-type-post_type
                menu-item-object-page menu-item-253">
                    <a href="http://3g-mobifone.com.vn/mobile-internet-3g/">Internet 3G</a></li>
                <li id="menu-item-252"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252">
                    <a href="http://3g-mobifone.com.vn/mca-thong-bao-cuoc-goi-nho/">Báo cuộc gọi nhỡ MCA</a></li>
                <li id="menu-item-251
                 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251">
                <a href="http://3g-mobifone.com.vn/nc-nhac-chuong-cho-dt/">Nhạc chờ Funring</a></li>
            </ul>        </div><!-- /.container-fluid -->
    </div>
</nav>
<header id="header" class="header">
    <div class="container inner-container">
        <div class="row form-group">
            <div class="col-md-3">
                <h1 class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        Dịch vụ giá trị gia tăng VAS Mobifone | Dịch Vụ Di Động
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-3g-mobifone.png" alt="3g mobifone" class="img-responsive">
                    </a>
                </h1>
            </div>
            <div class="col-md-6 ">
                <div class="search_box">
                    <form action="<?php echo home_url(); ?>/">
                        <div class="input-group">
                            <input type="text" value="" placeholder="Tìm kiếm dịch vụ" class="form-control" name="s" id="s">
                        <span class="input-group-btn">
                            <button type="submit" id="searchsubmit" class="btn btn-default">
                                <b class="glyphicon glyphicon-search"></b> Search
                            </button>
                        </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="logo-mobi">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-mobi.png" alt="Dichvudidong.vn" class="img-responsive">
                </div>
            </div>
        </div>

    </div>
</header>

<!-- /#Header -->

<!-- #wrapper -->
<div class="container inner-container"">
<nav class="navbar navbar-inverse" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav_main">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="nav_main">
        <ul id="menu-header-1" class="nav navbar-nav menu">
            <?php
            if ( has_nav_menu('topNav') ){
                ?>
                <!-- #CatNav -->
                    <?php wp_nav_menu(array('theme_location' => 'topNav','container'=> '','menu_id'=> 'menu-header','menu_class'=> 'nav navbar-nav menu','fallback_cb' => 'false','depth' => 3)); ?>
                <!-- /#CatNav -->
            <?php } ?>
        </ul>
    </div>
 </nav>