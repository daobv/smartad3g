<?php get_header(); ?>

<!--#blocks-wrapper-->
<div  class="main_site">
    <div class="row">
<!--#blocks-left-or-right-->

	<div class="col-md-8 non_pd_r">
   			<?php  include_once('includes/flex-slider.php');?>
        <?php $pages = get_pages(array('number'=>6)); ?>
        <div class="row form-group top_dv">
            <?php foreach($pages as $page):?>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <a class="thumbnail" href="http://dichvudidong.vn/dang-ky-dich-vu-3g-mobile-internet-cho-mobifone" title="Hướng dẫn đăng ký dịch vụ 3G Mobile Internet mạng Mobifone">
                        <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' );?><h2 class="top_dv_title">
                            <?php echo $page->post_title;?> </h2>
                    </a>
                    <div class="panel-body">
                        <?php echo $page->post_title;?> </div>
                    <div class="panel-footer">
                        <i class="glyphicon glyphicon-send"></i>  ON MIU gửi 9084									</div>
                </div>
            </div>
            <?php endforeach;?>
        </div>

  			</div>
        <div class="col-md-4">
            <?php get_sidebar();  ?>
        </div>
    </div>
 			<!-- /blocks col -->


 <?php get_footer(); ?>