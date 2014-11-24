<?php get_header();?>

<div class="carousel">
        <div class="carousel-title">Quy trình triệt lông bằng công nghệ New E-light</div>
        <div class="carousel-wrapper">
            <div id="carousel">
                <div class="service">
                    <div class="content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ph-5-1.jpg" alt=""/>
                        <div class="label">Thăm khám,tư vấn</div>
                        <div class="number">01</div>
                    </div>
                </div>
                <div class="service">
                    <div class="content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ph-5-2.jpg" alt=""/>
                        <div class="label">Làm sạch</div>
                        <div class="number">02</div>
                    </div>
                </div>
                <div class="service">
                    <div class="content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ph-5-3.jpg" alt=""/>
                        <div class="label">Bôi dưỡng chất gel</div>
                        <div class="number">03</div>
                    </div>
                </div>
                <div class="service">
                    <div class="content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ph-5-4.jpg" alt=""/>
                        <div class="label">Chiếu ánh sáng E-light</div>
                        <div class="number">04</div>
                    </div>
                </div>
                <div class="service">
                    <div class="content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ph-5-5.jpg" alt=""/>
                        <div class="label">Chiếu ánh sáng E-light</div>
                        <div class="number">05</div>
                    </div>
                </div>
                <div class="service">
                    <div class="content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ph-5-2.jpg" alt=""/>
                        <div class="label">Chiếu ánh sáng E-light</div>
                        <div class="number">06</div>
                    </div>
                </div>
                <div class="service">
                    <div class="content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ph-5-5.jpg" alt=""/>
                        <div class="label">Chiếu ánh sáng E-light</div>
                        <div class="number">07</div>
                    </div>
                </div>


            </div>
            <div class="controls">
                <div class="control next"></div>
                <div class="control prev"></div>
            </div>
        </div>
        <div class="gradient-line"></div>
    </div>

    <div class="page">
        <div class="main ">
            <div class="col-main">
                <div class="row row1">
                    <div class="image4 grid grid1 ">
                        <?php include("image_block.php"); ?>
                    </div>
                    <div class="grid video">
                        <div class="title">VIDEO TRIỆT LÔNG THẨM MỸ XUÂN HƯƠNG</div>
                        <div class="content"><iframe width="326" height="213" src="//www.youtube.com/embed/eKAWD1RUZvE" frameborder="0" allowfullscreen></iframe>

                        </div>
                    </div>
                    <div class="grid grid3 grid-last">
                        <div class="title">Bản đồ</div>
                        <div class="content"><img style="float:left" src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt=""/></div>
                    </div>
                </div>

                <div class="row row2">
                    <div class="grid news">
                        <div class="title">TƯ VẤN TRIỆT LÔNG</div>
                        <?php $consultant = get_term_by('slug','tu-van-triet-long','category');?>
                        <div class="content">
                        <?php   $args = array( 'numberposts' => 4, 'category_name' => $consultant->slug,'orderby'=>'ID DESC'); ?>
                         <?php  $posts = get_posts( $args );?>
                         <?php if(count($posts) >0):?>
                        <ul>
                                <?php foreach($posts as $key=>$post): ?>
                                <li <?php if($key==0):?>class="box-focus" <?php endif; ?>>
                                    <a class="photo" href="<?php echo esc_url(get_the_permalink($post->ID)); ?>">
                                        <?php $image = ""; ?>
                                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                        <?php endif; ?>
                                        <img src="<?php echo $image[0]; ?>" alt=""/></a>
                                    <div class="news-content">
                                        <a href="<?php echo esc_url(get_the_permalink($post->ID)); ?>"><strong><?php echo $post->post_title; ?></strong></a>
                                        <p><?php echo getPostExcerpt($post->ID,15)?></p>
                                    </div>
                                </li>
                                 <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="grid  grid-last likelist">
                        <div class="content"><img src="<?php echo get_template_directory_uri(); ?>/images/tmp.png" alt=""/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>
                    </div>
                </div>

            </div>
        </div>

    </div>
<?php get_footer(); ?>
