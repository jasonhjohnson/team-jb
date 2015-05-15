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
            <img alt=''
            src='http://1.gravatar.com/avatar/9af3c973603c39e8c7de7f875f36acd1?s=100&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D100&amp;r=G'
            class='avatar avatar-100 photo' height='100' width='100' />
          </div>
          <div class="text">
            <span class="by-author">By <?= get_the_author(); ?></span>
          </div>
        </div>
      </div>
    </div>
    <div class="asset">
     	<a class="no-border" href="<?php the_permalink(); ?>">
	        
			<?php
			
			// If there's a Featured Image, display it... 
			// Otherwise, just plop in a default image.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} else {	
				echo '<img class="image js-coll-lazy" width="1600" height="1067" data-coll-src="/app/themes/teamjb/assets/images/posts/trends-small.jpg" />';	
			}
			?>
		</a>

    </div>

    <div class="content clearfix">
      <p><?php the_excerpt(); ?></p>
      <a href='<?php the_permalink(); ?>' class='more-link coll-button coll-accent-color'>Read More</a> </div>
  </div>
</article>
