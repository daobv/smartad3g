<?php get_header(); ?>
<?php global $data; ?>
<div class="main_site">
    <div class="row main-site">
        <div class="col-md-8 col-content">
            <div>
                <ol class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">
                            <i class="glyphicon glyphicon-home"></i> Home</a></li>
                </ol>
            </div>
            <article class="innerContent">
                <header class="post-heading">
                    <!--Archive content-->
                    <!-- .blogposts-wrapper-->

                    <h2 class="post_title">
                        <?php if (is_day()): ?>
                            <?php printf(__('Daily Archives: %s', 'imagmag'), get_the_date()); ?>
                        <?php elseif (is_month()) : ?>
                            <?php printf(__('Monthly Archives: %s', 'imagmag'), get_the_date('F Y')); ?>
                        <?php
                        elseif (is_year()) : ?>
                            <?php printf(__('Yearly Archives: %s', 'imagmag'), get_the_date('Y')); ?>
                        <?php
                        elseif (is_category() || is_tag()): ?>
                            <?php echo single_cat_title('', false); ?>
                        <?php
                        elseif (is_author()): ?>
                            <?php printf(__('Articles Posted by the Author: %s', 'imagmag'), $curauth->nickname); ?>
                        <?php
                        else: ?>
                            <?php _e('Blog Archives', 'imagmag'); ?>
                        <?php endif; ?>
                    </h2>
                </header>
                    <div class="">
                            <?php include_once('includes/blog_loop.php'); ?>
                    </div>

            </article>
        </div>
        <!-- END MAIN -->
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

<?php get_footer(); ?>