<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi">
    <head>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=<?php bloginfo('charset'); ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<meta name='revisit-after' content='1 days' />
		<meta name="robots" content="index,follow" />
		<meta http-equiv="content-language" content="vi"/>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css"/>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bxslider.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
		<?php wp_head(); ?>
    </head>	

<body class="cms-home">

<div class="wrapper">
    <header>
        <a class="logo" title="<?php bloginfo('name'); ?>" href="<?php echo get_site_url(); ?>"><h1><strong>thẩm mỹ viện Xuân Hương </strong></h1></a>
        <nav>
            <div class="wrap">

                <ul class="lv0">
                    <li><a href="<?php echo get_site_url(); ?>">Trang chủ</a></li>
                    <?php $services = get_term_by('slug','dich-vu-triet-long','category');?>
                    <?php if($services):?>
                    <li><a href="#">Dịch vụ triệt lông</a>
                        <?php $childTerms = $categories = get_terms( 'category', array(
                            'orderby'    => 'count',
                            'hide_empty' => 0,
                            'child_of' => $services->term_id,
                        ));?>
                        <?php if(count($childTerms) > 0):?>
                        <div class="dropdown">
                            <ul>
                                <?php foreach($childTerms as $childTerm):?>
                                <li><a href="<?php echo esc_url(get_term_link($childTerm)); ?>"><?php echo $childTerm->name;?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                         <?php endif;?>
                    </li>
                    <?php endif;?>
                    <?php $videos = get_term_by('slug','video','category');?>
                    <?php if($videos):?>
                    <li><a href="<?php echo esc_url(get_term_link($videos)); ?>"><?php echo $videos->name;?></a></li>
                    <?php endif;?>
                </ul>
                <ul class="lv0">
                    <?php $consultant = get_term_by('slug','tu-van-triet-long','category');?>
                    <?php if($consultant):?>
                    <li><a href="<?php echo esc_url(get_term_link($consultant)); ?>"><?php echo $consultant->name;?></a></li>
                    <?php endif;?>
                    <?php $news = get_term_by('slug','tin-tuc','category'); ?>
                    <?php if($news):?>
                    <li><a href="<?php echo esc_url(get_term_link($news)); ?>"><?php echo $news->name; ?></a></li>
                    <?php endif;?>
                    <?php $contact = get_page_by_path('lien-he');?>
                    <?php if($contact):?>
                    <li><a href="<?php echo esc_url( get_permalink($contact->ID)); ?>"><?php echo $contact->post_title;?></a></li>
                    <?php endif;?>
                </ul>

            </div>

        </nav>
    </header>
    <div class="slider">
        <div id="slider">
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/sl1.jpg" alt=""/></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/sl2.jpg" alt=""/></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/sl3.jpg" alt=""/></div>
        </div>
    </div>