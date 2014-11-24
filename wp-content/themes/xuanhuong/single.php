<?php get_header(); ?>
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
                        'exclude' =>array(),
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
        </div>

    </div>
    <div class="col-main">
        <div class="block">
		<?php if (have_posts()) ?>
		<?php the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
        </div>

        <div class="text-center">
            <h3 class="title-choose">THỜI GIAN ĐIỀU TRỊ VÀ CHI PHÍ TRIỆT LÔNG CHÂN</h3>
            <div class="box box1">
                <ul class="unordered-list">
                    <li>Thời gian thực hiện tẩy lông: 20- 30 phút tùy vào triệt ½ hay cả chân</li>
                    <li>Chi Phí triệt lông chân: 2-3,5 triệu/ lần tùy vào diện tích triệt ½ hay cả chân</li>
                </ul>
            </div>
        </div>

        <div class="text-center">
            <h3 class="title-choose">Kết quả sau điều trị triệt lông chân</h3>
            <div class="box box2">
                <ul class="unordered-list">
                    <li>Thời gian thực hiện tẩy lông: 20- 30 phút tùy vào triệt ½ hay cả chân</li>
                    <li>Chi Phí triệt lông chân: 2-3,5 triệu/ lần tùy vào diện tích triệt ½ hay cả chân</li>
                </ul>
            </div>
        </div>

        <div class="text-center">
            <h3 class="title-choose">để biết thêm chi tiết về dịch vụ triệt lông vui lòng liên hệ</h3>
            <div class="box box3">
                <ul class="unordered-list">
                    <li>Thời gian thực hiện tẩy lông: 20- 30 phút tùy vào triệt ½ hay cả chân</li>
                    <li>Chi Phí triệt lông chân: 2-3,5 triệu/ lần tùy vào diện tích triệt ½ hay cả chân</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>


	
<?php get_footer(); ?>