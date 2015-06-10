<?php

namespace Roots\Sage;

use Roots\Sage\Wrapper;

?>

<div class="wrapper common" role="main" id="skrollr-body">
  <section id="intro-ex1" class="post-957 coll-page-section type-coll-page-section status-publish hentry page-section coll-full-height coll-full-width js-coll-window" style="height: 688px;">
    <div class="coll-section-background js-coll-parallax skrollable skrollable-between" style="display: block; height: 688px; -webkit-transform: translate(0px, 0px); transform: translate(0px, 0px); background-color: rgb(255, 255, 255);" data--688="transform: translate(0px, -344px);"
    data-688="transform: translate(0px, 344px);">
      <img class="coll-bg-image js-coll-lazy show-for-large-up"
      src="/app/themes/teamjb/assets/images/page-headers/Team-JB-Header.jpg"
      data-coll-ar="1.5"
      data-coll-src="/app/themes/teamjb/assets/images/page-headers/Team-JB-Header.jpg"
      alt="bg image" style="width: inherit; left: 0px; top:0px; display: block;" />
	
	  <img class="coll-bg-image js-coll-lazy show-for-medium-only"
      src="/app/themes/teamjb/assets/images/page-headers/Team-JB-Header-medium.jpg"
      data-coll-ar="1.5"
      data-coll-src="/app/themes/teamjb/assets/images/page-headers/Team-JB-Header-medium.jpg"
      alt="bg image" style="width: inherit; left: 0px; top:50px; display: block;" />
	
	  <img class="coll-bg-image js-coll-lazy show-for-small-only"
      src="/app/themes/teamjb/assets/images/page-headers/Team-JB-Header-small.jpg"
      data-coll-ar="1.5"
      data-coll-src="/app/themes/teamjb/assets/images/page-headers/Team-JB-Header-small.jpg"
      alt="bg image" style="width: inherit; left: 0px; top:50px; display: block;" />

      <div class="overlay" style=""></div>
    </div>
      <div class="entry-content">
        <div class="coll-middle ">
          <div class="inner" id="team-jb-blog-header-text-box">
            <div class=" coll-text type-02 js-coll-texttype-resize" data-coll-font-size="{&quot;max&quot;:70,&quot;min&quot;:40}" style="color: rgb(255, 255, 255); border-color: rgb(0, 0, 0); font-size: 70px; text-shadow: 2px 1px 0px rgba(0, 0, 0, 1);">
              <span class="text">Team JB Blog</span>
            </div>
            <div class=" coll-text type-08 js-coll-texttype-resize" data-coll-font-size="{&quot;max&quot;:30,&quot;min&quot;:40}" style="color: #eee; border-color: rgb(0, 0, 0); font-size: 30px;margin-top:50px; text-shadow: 2px 1px 0px rgba(0, 0, 0, 1);">
              <span class="text">Work Hard. Play Hard.</span>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="content-container coll-page-section">
    <div class="row">
      <div class="large-9 columns coll-post-list">
        <?php
          // Setup arguments for our custom query
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;  
          $query_args = array(
            'post_type' => 'post',
            'category' => 'team-jb-blog',
            'posts_per_page' => 5,
            'paged' => $paged
          );

          // Create a new instance of WP_Query
          $query = new \WP_Query( $query_args );
          
          while ( $query->have_posts()) :  $query->the_post();
           get_template_part('templates/content');
          endwhile;
          
          ?>
          <?php if ($query->max_num_pages > 1) { ?>          
            <section class="navigation-container coll-blog-navi coll-page-section">
        			<div class="row">
        				<div class="large-12 columns">              
        					<div class="coll-section-divider">
        						<span class="text large-2 medium-2">More Posts</span>
        						<span class="line large-10 medium-10"><span class="color"></span></span><br /><br />
        					</div>
        					<div class="large-10 medium-10 large-offset-2 medium-offset-2">
        						<div class="row">
        							<div class="previous large-5 medium-5 small-5 columns">					
                        <?php if ( $paged != 1 ) : ?>
                        	<a class="arrow" href="<?php echo get_previous_posts_page_link( ); ?>">
                        		<div class="icon"><i class="fa fa-long-arrow-left"></i></div>
                        		<div class="info">
                        			<h3 class="title-text">Newer Posts</h3>
                        		</div>
                        	</a>
                        <?php endif; ?> 							
        							</div>      
        							<div class="next large-5 medium-5 small-5 columns">
                        <?php if ( $paged < $query->max_num_pages ) : ?>
        									<a class="arrow" href="<?php echo get_next_posts_page_link( $query->max_num_pages ); ?>">
        										<div class="icon"><i class="fa fa-long-arrow-right"></i></div>
        										<div class="info">
        											<h3 class="title-text"> Older Posts</h3>
        										</div>
        									</a>
                        <?php endif; ?> 							
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</section> 
          <?php } ?>	
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
                  <!--<p>Relationship is Everything.</p>-->
              </div>
              <div class="bottom">
                  <ul id="menu-footer-menu" class="nav">
                      <li id="menu-item-996" class="menu-item menu-item-type-post_type menu-item-object-coll-page-section menu-item-996"><a href="/">Home</a></li>
                      <li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-coll-page-section menu-item-993"><a href="/meet-the-team">Meet The Team</a></li>
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
