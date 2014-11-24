<div id="sidebar">
  <div class="widget">
    <h3>
      <?php _e("Subscribe", 'themejunkie'); ?>
    </h3>
    <div class="box">
      <ul>
        <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>">
          <?php _e("Subscribe via RSS feed", 'themejunkie'); ?>
          </a></li>
        <li class="twitter"><a href="http://twitter.com/<?php echo get_theme_mod('twitter_id'); ?>">
          <?php _e("Follow us on Twitter", 'themejunkie'); ?>
          </a></li>
      </ul>
    </div>
    <!--end: subscribe-->
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Sidebar') ) : ?>
    <?php endif; ?>
  </div>
  <!--end: widget-->
</div>
<!--end: sidebar-->
