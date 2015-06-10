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
          <div class="inner" id="look-who-is-talking-header-text-box">
            <div class=" coll-text type-10 js-coll-texttype-resize look-who-is-talking-line-one" data-coll-font-size="{&quot;max&quot;:70,&quot;min&quot;:40}" style="color: rgb(48, 48, 48); font-size: 70px;">
              <span class="text">Look Who's Talking</span>
            </div>
            <div class=" coll-text type-11 js-coll-texttype-resize look-who-is-talking-line-two" data-coll-font-size="{&quot;max&quot;:50,&quot;min&quot;:30}" style="color: #fff; font-size: 50px; margin-top:40px; text-shadow: 2px 1px 0px rgba(0, 0, 0, 1);">
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
          // Setup arguments for our custom query
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;  
          $query_args = array(
            'post_type' => 'post',
            'category_name' => 'florida-news',
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

  <?php get_template_part('templates/footer'); ?>
</div>

<!-- end main -->
