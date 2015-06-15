<?php

namespace Roots\Sage;

use Roots\Sage\Wrapper;

?>

<section class="content-container coll-page-section">
    <div class="row">
      <div class="large-9 columns coll-post-list">
        <?php
          // Setup arguments for our custom query
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;  
          $query_args = array(
            'post_type' => 'post',
            'category_name' => 'team-jb-business',
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
                                		<?php if ( $paged < $query->max_num_pages ) : ?>
        									<a class="arrow" href="<?php echo get_next_posts_page_link( $query->max_num_pages ); ?>">
        										<div class="icon"><i class="fa fa-long-arrow-left"></i></div>
        										<div class="info">
        											<h3 class="title-text"> Older Posts</h3>
        										</div>
        									</a>
                                        <?php endif; ?> 			
        							</div>      
        							<div class="next large-5 medium-5 small-5 columns">
                    	           		<?php if ( $paged != 1 ) : ?>
                                        	<a class="arrow" href="<?php echo get_previous_posts_page_link( ); ?>">
                                        		<div class="icon"><i class="fa fa-long-arrow-right"></i></div>
                                        		<div class="info">
                                        			<h3 class="title-text">Newer Posts</h3>
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