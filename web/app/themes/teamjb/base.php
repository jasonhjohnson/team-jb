<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
   
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      
      <?php include Wrapper\template_path(); ?>
  
      <?php if (Config\display_sidebar() && 1 == 2) : ?>
        <aside class="sidebar" role="complementary">
          <?php include Wrapper\sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>    
    
    
    <?php
      do_action('get_footer');
      //get_template_part('templates/footer');
      //wp_footer();
    ?>
    
    <!-- scroll bar-->    
    <div class="js-coll-scrollbar always-visible">
        <div class="js-coll-scrollbar-content">
    
        </div>
    </div>
    
    <!-- prelaoder -->
    <div class="coll-site-preloader">
        <div class="coll-preloader-container">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>    
    
    <?php     
      wp_footer();
    ?>
  </body>
</html>
