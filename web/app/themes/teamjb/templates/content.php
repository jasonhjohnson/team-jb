<!--BEGIN .hentry -->
<article <?php post_class(); ?>>
  <div class="coll-section-divider title-divider">
    <span class="text large-2 medium-2">
      <a class="no-border" href="<?php the_permalink(); ?>">
        <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
      </a>
    </span>
    <span class="line large-10 medium-10">
      <span class="color"></span>
    </span>
  </div>
  <div class="wrapper large-10 large-offset-2 medium-10 medium-offset-2">
    <h2 class="title"><a class="no-border" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <div class="post-meta">
      <div class="author-meta">
        <div class="wrapper">
          <div class="image">
			     <?php $authorID = get_the_author_meta('ID'); ?>
            <img alt=''
            src='<?php echo get_cupp_meta($authorID, 'thumbnail'); ?>'
            class='avatar avatar-100 photo' height='100' width='100' />
          </div>
          <div class="text">
            <span class="by-author">By <?= get_the_author(); ?></span>
          </div>
        </div>
      </div>
    </div>
    <div class="content clearfix">      	     
    <?php if ( has_post_thumbnail() ) { ?>     
      <div class="asset">	           	                               
        <a class="no-border" href="<?php the_permalink() ?>"><?php the_post_thumbnail('large', array('class' => '')); ?></a>  
      </div>
    <?php } ?>   
	  <?php the_excerpt(); ?>
      <a href='<?php the_permalink(); ?>' class='more-link coll-button coll-accent-color'>Read More</a> </div>
  </div>
</article>
