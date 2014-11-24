<?php get_header(); ?>

    <!--#blocks-wrapper-->
<div class="main_site">
<div class="row">
<!--#blocks-left-or-right-->

<div class="col-md-8 non_pd_r">
<?php include_once('includes/flex-slider.php'); ?>
<?php $pages = get_pages(array('number'=>'7')); ?>
<?php $pages = array_reverse($pages); ?>
<div class="row form-group top_dv">
    <?php $serviceArrayId = array(17, 15,46, 43,40, 33,49); ?>
    <?php $serviceArray = array('17'=>'MF', '15'=>'MC', '46'=>'TV30', '43'=>'NC',
        '40'=>'MIU', '33'=>'MCA','49'=>'CB'); ?>
    <?php foreach ($pages as $page): ?>
        <?php if (in_array($page->ID, $serviceArrayId)): ?>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <a class="thumbnail" href="<?php echo get_page_link($page->ID); ?>"
                       title="Hướng dẫn đăng ký dịch vụ 3G Mobile Internet mạng Mobifone">
                        <?php echo get_the_post_thumbnail($page->ID, 'full'); ?><h2 class="top_dv_title">
                            <?php echo $page->post_title; ?> </h2>
                    </a>

                    <div class="panel-body">
                        <?php $contentStripTags = strip_tags($page->post_content) ?>
                        <?php $contentStripTags = str_split($contentStripTags, 60); ?>
                        <?php $short_content = explode(' ', $contentStripTags[0]); ?>
                        <?php $contentDisplay = ""; ?>
                        <?php $sizeOf = sizeof($short_content) - 1 ?>
                        <?php foreach ($short_content as $key => $sc) {
                            if ($key == $sizeOf) {
                                break;
                            }
                            $contentDisplay .= $sc . " ";

                        }?>
                        <?php echo htmlspecialchars_decode($contentDisplay); ?> </div>
                    <div class="panel-footer">
                        <i class="glyphicon glyphicon-send"></i> ON <?php echo $serviceArray[$page->ID]; ?> gửi 6072
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<div class="row">
<div class="col-md-6">
    <ul class="nav nav-tabs nav-news" role="tablist">
        <li class="active"><a href="#promotion" role="tab" data-toggle="tab">Khuyến mãi</a></li>
        <li><a href="#news" role="tab" data-toggle="tab">Tin tức</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade tin-tuc active in" id="promotion">
            <?php $promotionPosts = get_posts(array('category'=>7,'post_per_pate'=>5));?>
            <?php if(count($promotionPosts) > 0):?>
            <?php foreach($promotionPosts as $promotionPost):?>
            <div class="media">
                <div class="pull-left news_thumb">
                    <a href="<?php echo get_permalink($promotionPost->ID);?>">
                        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($promotionPost->ID) );?>
                        <img width="150" height="136"
                             src="<?php echo $feat_image?>"
                             class="media-object wp-post-image" alt="<?php echo $promotionPost->post_title;?>"> </a>
                </div>
                <div class="media-body">
                    <h3 class="media-heading">
                        <a href="<?php echo get_permalink($promotionPost->ID); ?>"
                           title="<?php echo $promotionPost->post_title;?>"><?php echo $promotionPost->post_title;?></a>

                    </h3>
                    <span class="post_time"><i class="glyphicon glyphicon-time"></i> <?php echo date('d/m/Y',strtotime($promotionPost->post_date));?></span>
                </div>
            </div>
             <?php endforeach; ?>
            <?php endif;?>
        </div>
        <div class="tab-pane fade tin-tuc" id="news">
            <?php $news = get_posts(array('category'=>6,'post_per_pate'=>5));?>
            <?php if(count($news) > 0):?>
                <?php foreach($news as $new):?>
                    <div class="media">
                        <div class="pull-left news_thumb">
                            <a href="<?php echo get_permalink($new->ID);?>">
                                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($new->ID) );?>
                                <img width="150" height="136"
                                     src="<?php echo $feat_image?>"
                                     class="media-object wp-post-image" alt="<?php echo $new->post_title;?>"> </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="<?php echo get_permalink($new->ID); ?>"
                                   title="<?php echo $new->post_title;?>"><?php echo $new->post_title;?></a>

                            </h3>
                            <span class="post_time"><i class="glyphicon glyphicon-time"></i> <?php echo date('d/m/Y',strtotime($new->post_date));?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif;?>
        </div>

    </div>
</div>
<div class="col-md-6">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-news" role="tablist">
        <li class="active"><a href="#guide" role="tab" data-toggle="tab">Hướng dẫn</a></li>
        <li><a href="#tips" role="tab" data-toggle="tab">Thủ thuật hay</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in tin-tuc  active" id="guide">
            <?php $guides = get_posts(array('category'=>8,'post_per_pate'=>5));?>
            <?php if(count($guides) > 0):?>
                <?php foreach($guides as $guide):?>
                    <div class="media">
                        <div class="pull-left news_thumb">
                            <a href="<?php echo get_permalink($guide->ID);?>">
                                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($guide->ID) );?>
                                <img width="150" height="136"
                                     src="<?php echo $feat_image?>"
                                     class="media-object wp-post-image" alt="<?php echo $guide->post_title;?>"> </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="<?php echo get_permalink($guide->ID); ?>"
                                   title="<?php echo $guide->post_title;?>"><?php echo $guide->post_title;?></a>

                            </h3>
                            <span class="post_time"><i class="glyphicon glyphicon-time"></i> <?php echo date('d/m/Y',strtotime($guide->post_date));?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif;?>
        </div>
        <div class="tab-pane fade tin-tuc" id="tips">
            <?php $tips = get_posts(array('category'=>9,'post_per_pate'=>5));?>
            <?php if(count($tips) > 0):?>
                <?php foreach($tips as $tip):?>
                    <div class="media">
                        <div class="pull-left news_thumb">
                            <a href="<?php echo get_permalink($tip->ID);?>">
                                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($tip->ID) );?>
                                <img width="150" height="136"
                                     src="<?php echo $feat_image?>"
                                     class="media-object wp-post-image" alt="<?php echo $tip->post_title;?>"> </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="<?php echo get_permalink($tip->ID); ?>"
                                   title="<?php echo $tip->post_title;?>"><?php echo $tip->post_title;?></a>

                            </h3>
                            <span class="post_time"><i class="glyphicon glyphicon-time"></i> <?php echo date('d/m/Y',strtotime($tip->post_date));?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif;?>
        </div>

    </div>
</div>
</div>
</div>
<div class="col-md-4">
    <?php get_sidebar(); ?>
</div>
</div>
<!-- /blocks col -->


<?php get_footer(); ?>
