<div class="media news_items">
    <?php if (have_posts()) : while (have_posts()) :
    the_post(); ?>
    <div class="pull-left">
        <?php if (has_post_thumbnail()) { ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="thumbnail">

                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'mag-image'); ?>
                <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>

            </a>
        <?php } else { ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" width="60" height="60"
                    alt="<?php the_title(); ?>"/></a>
        <?php } ?>
    </div>
    <div class="media-body">
        <h2 class="media-heading"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div class="box-meta">
            <i class="glyphicon glyphicon-user"><?php _e('by', 'imagmag'); ?> <?php the_author_posts_link(); ?></i>
            <i class="glyphicon glyphicon-time"><?php _e('On', 'imagmag'); ?> <?php the_time('F d, Y'); ?></i>

        </div>
        <div class="maga-excerpt clearfix">
            <?php imagmag_themepacific_excerpt('tpcrn_home_mag'); ?>
        </div>
    </div>
<?php endwhile; ?>
<?php else: ?>
    <h2 class="noposts">Sorry, no posts to display!</h2>
<?php
endif; ?>
<?php wp_reset_query(); ?>

</div>
<div class="pagination clearfix">
    <?php imagmag_themepacific_pagination(); ?>
</div>
