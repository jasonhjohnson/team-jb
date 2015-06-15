<?php

namespace Roots\Sage;

use Roots\Sage\Wrapper;

$headerImg = Utils\get_random_header_image();

?>

<div class="wrapper common coll-single coll-parallax" id="skrollr-body">
  <section class="background js-coll-page-section coll-page-section" style="height: 615.2px;"><div class="js-coll-parallax coll-section-background skrollable skrollable-between" style="display: block; -webkit-transform: translate(0px, 43.3474254742547px); transform: translate(0px, 43.3474254742547px);" data-0="transform: translate(0px, 0px);" data-615="transform: translate(0px, 256.3333333333333px);">
    <img class="coll-bg-image js-coll-lazy" 
    width="1600" height="1050" 
    data-coll-src="<?php echo $headerImg['url']; ?>" 
    alt="<?php echo $headerImg['credit']; ?>" 
    style="width: 1812px; height: 1189px; top: -287px; left: 0px; display: block;" 
  src="<?php echo $headerImg['url']; ?>">
  <div class="color-overlay"></div></div>
    <section class="title-container js-coll-page-section coll-page-section">
		<div class="row">
			<div class="large-12 columns">
				<div class="title-wrapper">
					<h1 class="title-text"><?php the_search_query(); ?></h1>
					<h3 class="subtitle-text">Viewing posts containing "<?php the_search_query(); ?>"</h3>
				</div>
			</div>
		</div>
	</section>
  </section>

  <section class="content-container coll-page-section">
    <div class="row">
      <div class="large-9 columns coll-post-list">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/content', 'search'); ?>
        <?php endwhile; ?>
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


