<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<div class="wrapper common coll-parallax coll-single" id="skrollr-body">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content-header', basename(get_permalink())); ?>
    <?php get_template_part('templates/content-page', basename(get_permalink())); ?>
    <?php get_template_part('templates/footer'); ?>
  <?php endwhile; ?>
</div>
