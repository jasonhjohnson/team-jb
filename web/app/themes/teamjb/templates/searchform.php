<div id="search-2" class="widget widget_search">
  <form role="search" method="get" class="searchform" id="searchform" action="<?= esc_url(home_url('/')); ?>">
    <div>
      <label class="screen-reader-text"><?php _e('Search for:', 'sage'); ?></label>
      <input type="search" value="<?= get_search_query(); ?>" name="s" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>" required>
      <button type="submit" id="searchsubmit"><?php _e('Search', 'sage'); ?></button>
    </div>
  </form>
</div>