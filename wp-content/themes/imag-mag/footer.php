</div><!--/#blocks-wrapper--></div> <!--/#Wrapper -->
<?php global $data;
if ($data['shw_footer_widg'] == 'yes'){
?><!--#footer-blocks-->
<div id="footer-blocks" class="container clearfix">
    <div class="fb-container clearfix">
        <div class="footer-block1">
            <?php
            if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 1')):
            endif;
            ?>        </div>
        <div class="footer-block2">
            <?php
            if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 2')):
            endif;                ?>        </div>
        <div class="footer-block3">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 3')):                endif; ?>        </div>
        <div
            class="footer-block4">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 4')):
            endif; ?>        </div>
    </div>
</div><!--/#footer-blocks--><?php } ?>  <!-- #footer-->
<div id="footer" class="container clearfix" style="padding-left: 0;padding-right: 0;background-color:#101012">
    <div class="container inner-container">
        <?php $pages = get_pages(array('number'=>'7')); ?>
        <?php $pages = array_reverse($pages); ?>
        <?php $serviceArrayId = array(17, 15,46, 43,40, 33,49); ?>
        <div class="inner_footer row">
            <div class="col-md-4 col-md-6">
                <div class="footer_item">
                    <h5 class="footer_item_heading">Thông tin hữu ích</h5>
                    <ul class="link_footer">
                        <?php foreach ($pages as $page): ?>
                        <?php if (in_array($page->ID, $serviceArrayId)): ?>
                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="<?php echo get_page_link($page->ID); ?>">
                                <?php echo $page->post_title; ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                </div>
            </div>


            <div class="col-md-3 col-md-6">
                <div class="footer_item">
                    <h5 class="footer_item_heading">Hỗ trợ Online</h5>
                    <ul class="support_link">
                        <li>
							<span class="icon skype">
							</span>
                            <a href="skype:support.smartad?chat">Nhân viên hỗ trợ 1</a>
                        </li>
                        <li>
							<span class="icon yahoo">
							</span>
                            <a href="ymsgr:SendIM?smartad_vn">Nhân viên hỗ trợ 2</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="footer_item ">
                    <h5 class="footer_item_heading"><i class="fa fa-building"></i> Thông tin liên hệ</h5>
                    <ul class="info_foo">
                        <li><b class="glyphicon glyphicon-home"></b> Số 90A, ngõ 72, Nguyễn Trãi, Thanh Xuân, Hà Nội
                        </li>
                        <li><b class="glyphicon glyphicon-envelope"></b> Email: khanhhv@smartad.vn</li>
                        <li><b class="glyphicon glyphicon-phone-alt"></b> Hotline: (84-4) 6284 0636
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <p class="copyright">

            <?php echo bloginfo('name'); ?>
            &nbsp; &copy;&nbsp;<?php echo date("Y"); ?></p></div>
</div><!--/#Footer --> <?php if ($data['google_analytics']) { /*--  Google Analytics --*/
    echo $data['google_analytics'];
} ?>   <?php wp_footer(); ?> </body> </html>