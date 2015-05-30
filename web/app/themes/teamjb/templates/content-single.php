<?php

namespace Roots\Sage;

use Roots\Sage\Wrapper;

?>

<?php while (have_posts()) : the_post(); 
	
	// Selects at random from a collection of photos.
	$url = "/app/themes/teamjb/assets/images/page-headers/page-header-" . rand(1, 3) . ".jpg";
	
?>
	
  <div class="wrapper common coll-single coll-post coll-parallax" id="skrollr-body">
    <section class="background js-coll-page-section coll-page-section">
      <div class="js-coll-parallax coll-section-background">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII="
        class="coll-bg-image js-coll-lazy" width="1600" height="1067"
        data-coll-src="<?php echo $url ?>"
        alt="Trending lobbyist" />
        <div class="color-overlay"></div>
      </div>
    </section>
    <section class="title-container js-coll-page-section coll-page-section">
      <div class="row">
        <div class="large-12 columns">
          <div class="coll-section-divider title-divider">
            <span class="text large-2 medium-2"><time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time></span>
            <span class="line large-10 medium-10">
              <span class="color"></span>
            </span>
          </div>

          <div class="title-wrapper">
            <h1 class="title-text"><?php the_title(); ?></h1>
            <div class="post-meta">
              <div class="author-meta">
                <div class="wrapper">
                  <div class="image">
                    <?php $authorID = get_the_author_meta('ID'); ?>
		            <img alt=''
		            src='<?php echo get_cupp_meta($authorID, 'thumbnail'); ?>' 
					class='avatar avatar-100 photo' height='100' width='100'
                    />
                  </div>
                  <div class="text">
                    <span class="by-author">By <?= get_the_author(); ?></span>
                  </div>
                </div>
              </div>
				<!-- 
              <ul class="icons">
                <li>
                  <a class="link" target="_blank" href="http://twitter.com/share?url=http://themes.cubalicious.net/morpheus/what-are-responsive-images/&amp;text=Currently reading What are responsive images">
                    <i class="fa fa-twitter"></i> </a>
                </li>
                <li>
                  <a class="link" target="_blank" href="http://www.facebook.com/sharer.php?u=http://themes.cubalicious.net/morpheus/what-are-responsive-images/&t=What are responsive images">
                    <i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="link" target="_blank" href="https://plusone.google.com/_/+1/confirm?hl=en&url=http://themes.cubalicious.net/morpheus/what-are-responsive-images/">
                    <i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="link" target="_blank" href="javascript:void((function(){var e=document.createElement('script'); e.setAttribute('type','text/javascript'); e.setAttribute('charset','UTF-8'); e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());">
                    <i class="fa fa-pinterest"></i></a>
                </li>
				
              </ul>-->

            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="content-container js-coll-page-section coll-page-section">
      <div class="row">
        <div class="large-9 columns">
          <div class="coll-section-divider content-divider">
            <span class="text large-2 medium-2"><time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time></span>
            <span class="line large-10 medium-10">
              <span class="color"></span>
            </span>
          </div>
          <div class="copy-container large-10 large-offset-2 medium-offset-2 medium-10">
            <div class="content-wrapper">
                <article class="entry-content clearfix">
  			       	 <?php the_content(); ?>
                </article>

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
              	<footer class="coll-post-info">
                  <?php if (has_category()) { ?>
                      <div class="categories">
                          <span class="caption"><?php _e('Categories ', 'framework'); ?></span>
                          <span class="list"><?php the_category(' '); ?></span>
                      </div>
                  <?php } ?>
                  <?php if (has_tag()) { ?>
                      <div class="tags">
                          <span class="caption"><?php _e('Tags ', 'framework'); ?></span>
                          <span class="list"><?php the_tags('', ''); ?></span>
                      </div>
                  <?php } ?>
              </footer>
              
          	</div>
          </div>
			<div class="coll-section-divider">
              <span class="text large-2 medium-2"><?php _e('More Posts', 'framework'); ?></span>
              <span class="line large-10 medium-10"><span class="color"></span></span>
          </div>
          <div class="navigation-container large-10 large-offset-2 medium-offset-2 medium-10">
              <div class="row">
                  <div class="previous large-6 medium-6 columns">
                      <?php if (get_next_post()) : $pID = get_next_post()->ID; ?>
                          <a class="arrow" href="<?php echo get_permalink($pID); ?>">
                              <div class="icon"><i class="fa fa-long-arrow-left"></i></div>
                              <div class="info">
                                  <label><?php _e('Next', 'framework'); ?></label>

                                  <h3 class="title-text"><?php echo get_the_title($pID); ?></h3>
                              </div>

                          </a>
                      <?php endif; ?>
                  </div>
                  <div class="next large-6 medium-6 columns">
                      <?php if (get_previous_post()) : $pID = get_previous_post()->ID; ?>

                          <a class="arrow" href="<?php echo get_permalink($pID); ?>">
                              <div class="icon"><i class="fa fa-long-arrow-right"></i></div>
                              <div class="info">
                                  <label><?php _e('Previous', 'framework'); ?></label>

                                  <h3 class="title-text"><?php echo get_the_title($pID); ?></h3>
                              </div>


                          </a>
                      <?php endif; ?>
                  </div>
              </div>

          </div>
         
        </div>
        <!--                end left-->
        <div class="large-3 columns">
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
                    <!--<p>Relationship is Everything.</p>-->
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
<?php endwhile; ?>
