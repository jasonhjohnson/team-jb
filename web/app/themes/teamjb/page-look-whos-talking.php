<?php

namespace Roots\Sage;

use Roots\Sage\Wrapper;

?>

<div class="wrapper common coll-single coll-parallax" id="skrollr-body">
  <section id="intro-ex1" class="post-957 coll-page-section type-coll-page-section status-publish hentry page-section coll-full-height coll-full-width js-coll-window"
  style="height: 564px;">
    <div class="coll-section-background js-coll-parallax skrollable skrollable-between"
    style="display: block; height: 564px; -webkit-transform: translate(0px, 0px); transform: translate(0px, 0px); background-color: rgb(255, 255, 255);"
    data--688="transform: translate(0px, -344px);"
    data-688="transform: translate(0px, 344px);">
      <img class="coll-bg-image js-coll-lazy"
      src="/app/themes/teamjb/assets/images/page-headers/gadsden.jpg" data-coll-ar="1.5"
      data-coll-src="/app/themes/teamjb/assets/images/page-headers/gadsden.jpg"
      alt="bg image" style="height: 1247px; width: 1800px; left: 0px; display: block;">
      <div class="overlay" style=""></div>
    </div>
    <div class="section-content row " style="height: 688px;">
      <div class="columns entry-title coll-hide-title">
        <h2 class="title" style="color: #fff">intro ex1</h2>
        <h4 class="subtitle" style="color: #fff"></h4>
      </div>
      <div class="entry-content">
        <div class="coll-middle ">
          <div class="inner" style="vertical-align:top;padding-top:200px;">
            <div class=" coll-text type-10 js-coll-texttype-resize" data-coll-font-size="{&quot;max&quot;:70,&quot;min&quot;:40}" style="color: rgb(48, 48, 48); font-size: 70px;">
              <span class="text">Look Who's Talking</span>
            </div>
            <div class=" coll-text type-11 js-coll-texttype-resize" data-coll-font-size="{&quot;max&quot;:50,&quot;min&quot;:30}" style="color: #fff; font-size: 50px; margin-top:40px; text-shadow: 2px 1px 0px rgba(0, 0, 0, 1);">
              <span class="text">News From Around The Capitol</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content-container coll-page-section">
    <div class="row">
      <div class="large-9 columns coll-post-list">
        <?php
        $query = new \WP_Query( array('category_name' => 'florida-news', 'posts_per_page' => 5 ) );
        while ( $query->have_posts()) :  $query->the_post(); ?>
          <?php get_template_part('templates/content'); ?>
        <?php endwhile; ?>
		
		<!-- JASON: Here is the Markup for Prev/Next blog navigation. Please wire it up.
			This should be on the following pages:
			 - look-who's-talking.php
			 - team-jb-blog.php
			 - archives
		 -->
		<?php
        $defaults = array(
            'before' => '<ul class="coll-pagination">',
            'after' => '</ul>',
            'link_before' => '<li>',
            'link_after' => '</li>',
            'next_or_number' => 'number',
            'separator' => '',
            'nextpagelink' => __('Next page'),
            'previouspagelink' => __('Previous page'),
            'pagelink' => '%',
            'echo' => 1
        );

        wp_link_pages($defaults);
        ?>
		

      </div>
      <div class="large-3 columns coll-sidebar">
        <div class="sidebar-container">
            <?php include Wrapper\sidebar_path(); ?>
        </div>
      </div>
    </div>
  </section>

  <footer class="site-footer">
      <div class="background"></div>
      <div class="coll-footer-wrapper">
          <div class="large-12 columns footer-container">
              <div class="logo">
                  <a class="no-border" href="/">
                      <img src="/app/themes/teamjb/assets/images/logo_white_with_name_and_tag.png" alt="Team JB" onmouseover="this.src='/app/themes/teamjb/assets/images/logo_color_with_name_and_tag.png';" onmouseout="this.src='/app/themes/teamjb/assets/images/logo_white_with_name_and_tag.png';" />
                  </a>
              </div>
              <div class="bottom">
                  <ul id="menu-footer-menu" class="nav">
                      <li id="menu-item-996" class="menu-item menu-item-type-post_type menu-item-object-coll-page-section menu-item-996"><a class="js-coll-local-link" href="/">Home</a></li>
                      <li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-coll-page-section menu-item-993"><a class="js-coll-local-link" href="/meet-the-team">Meet The Team</a></li>
                      <li id="menu-item-397" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-397"><a href="/changing-the-weather" class="no-border">Changing The Weather</a></li>
                      <li id="menu-item-396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-396"><a href="/look-whos-talking" class="no-border">Look Who's Talking</a></li>
                      <li id="menu-item-395" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-395"><a href="/blog" class="no-border">Team JB Blog</a></li>
                      <li id="menu-item-399" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-399"><a href="/calendar" class="no-border">Calendar</a></li>
                  </ul>
                  <span class="text">© 2015 Team JB.</span>
              </div>
          </div>
      </div>
  </footer>
</div>

<!-- <?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?> -->
