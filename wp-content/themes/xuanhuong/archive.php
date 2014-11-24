<?php get_header();?>
<?php $data = get_queried_object();?>
<div class="page">
    <div class="breadcrumbs">
        <?php the_breadcrumb(""); ?>
    </div>
    <div class="main col2-left-layout">
        <div class="col-left">
            <div class="menu-left">
                <div class="title">CÁC DỊCH VỤ KHÁC</div>
                <ul class="menu">
                    <?php $services = get_term_by('slug','dich-vu-triet-long','category');?>
                    <?php if($services):?>
                        <?php $childTerms = $categories = get_terms( 'category', array(
                            'orderby'    => 'count',
                            'hide_empty' => 0,
                            'child_of' => $services->term_id,
                            'exclude' =>array($data->term_id),
                        ));?>
                        <?php if(count($childTerms) > 0):?>
                            <?php foreach($childTerms as $childTerm):?>
                                <li><a href="<?php echo esc_url(get_term_link($childTerm)); ?>"><?php echo $childTerm->name;?></a></li>
                            <?php endforeach; ?>
                        <?php endif;?>
                    <?php endif;?>
                </ul>
            </div>
            <div class="menu-left menu-left-2 ">
                <div class="title">Bài viết được quan tâm</div>
                <ul class="mostview-post">
                    <li>-Tại sao nên triệt lông vĩnh viễn tại Thẩm mỹ Xuân Hương?</li>
                    <li>-Triệt lông vĩnh viễn có hại gì không?</li>
                    <li>-Bảng giá triệt lông tại Thẩm mỹ viện Xuân Hương.</li>
                    <li>-Những điều cần biết về triệt lông vĩnh viễn.</li>
                    <li>-Triệt lông vĩnh viễn bằng công nghệ New E-light.</li>
                </ul>
            </div>

            <div class="menu-left image4">
                <?php include("image_block.php"); ?>
            </div>

            <div class="menu-left">
                <div class="title">Kiến thức triệt lông</div>
                    <?php echo do_shortcode("[catlist id=17 numberposts=3]"); ?>
            </div>
            <div class="menu-left menu-left-2 ">
                <?php echo do_shortcode("[tptn_list limit='5' heading='1' daily='0']")?>
                <!--<div class="title">Tin xem nhiều nhất</div>
                <ul class="post detail ">
                    <li>
                        <span><img src="images/ph-2-1.png" alt="Post"/></span>
                        <div class="content">
                            <strong>Biện pháp tự nhiên giúp tẩy sạch lông mặt</strong>
                            <p>Tẩy triệt lông vĩnh viễn - trang chia sẻ cách tẩy</p>
                            <div class="continue"><a href="#" >Đọc tiếp...</a></div>
                        </div>
                    </li>
                    <li>
                        <span><img src="images/ph-2-2.png" alt="Post"/></span>
                        <div class="content">
                            <strong>Biện pháp tự nhiên giúp tẩy sạch lông mặt</strong>
                            <p>Tẩy triệt lông vĩnh viễn - trang chia sẻ cách tẩy</p>
                            <div class="continue"><a href="#" >Đọc tiếp...</a></div>
                        </div>
                    </li>
                    <li>
                        <span><img src="images/ph-2-3.png" alt="Post"/></span>
                        <div class="content">
                            <strong>Biện pháp tự nhiên giúp tẩy sạch lông mặt</strong>
                            <p>Tẩy triệt lông vĩnh viễn - trang chia sẻ cách tẩy</p>
                            <div class="continue"><a href="#" >Đọc tiếp...</a></div>

                        </div>
                    </li>
                    <li>
                        <span><img src="images/ph-2-4.png" alt="Post"/></span>
                        <div class="content">
                            <strong>Biện pháp tự nhiên giúp tẩy sạch lông mặt</strong>
                            <p>Tẩy triệt lông vĩnh viễn - trang chia sẻ cách tẩy</p>
                            <div class="continue"><a href="#" >Đọc tiếp...</a></div>

                        </div>
                    </li>
                    <li>
                        <span><img src="images/ph-2-5.png" alt="Post"/></span>
                        <div class="content">
                            <strong>Biện pháp tự nhiên giúp tẩy sạch lông mặt</strong>
                            <p>Tẩy triệt lông vĩnh viễn - trang chia sẻ cách tẩy</p>
                            <div class="continue"><a href="#" >Đọc tiếp...</a></div>

                        </div>
                    </li>
                </ul>-->
            </div>

        </div>
        <div class="col-main">
            <h1 class="menu">
                <?php
                    echo $data->name;
                ?>
            </h1>
            <?php echo do_shortcode("[ic_add_posts category = '".$data->slug."' post_type='post' orderby='ID' order='DESC' paginate=''yes']")?>
            <div class="text-center">

            </div>

        </div>
    </div>
</div>
    <?php get_footer(); ?>

