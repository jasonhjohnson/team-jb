<?php
namespace Roots\Sage;

use Roots\Sage\Wrapper;

$headerImg = Utils\get_random_header_image();
?>

<div class="wrapper common coll-single coll-parallax" id="skrollr-body">
  <section class="background js-coll-page-section coll-page-section" style="height: 615.2px;"><div class="js-coll-parallax coll-section-background skrollable skrollable-between" style="display: block; -webkit-transform: translate(0px, 43.3474254742547px); transform: translate(0px, 43.3474254742547px);" data-0="transform: translate(0px, 0px);" data-615="transform: translate(0px, 256.3333333333333px);">
    <img class="coll-bg-image js-coll-lazy" width="1600" height="1050" data-coll-src="<?php echo $headerImg['url']; ?>" alt="Credit: <?php echo $headerImg["credit"]; ?>" style="width: 1812px; height: 1189px; top: -287px; left: 0px; display: block;" 
  src="<?php echo $headerImg['url']; ?>">
  <div class="color-overlay"></div></div>
    <section class="title-container js-coll-page-section coll-page-section">
		<div class="row">
			<div class="large-12 columns">
				<div class="title-wrapper">
					<h1 class="title-text"><?php single_month_title(); ?></h1>
					<h3 class="subtitle-text">Viewing posts from <?php single_month_title(); ?></h3>
				</div>
			</div>
		</div>
	</section>
  </section>

  <section class="content-container coll-page-section">
    <div class="row">
      <div class="large-9 columns coll-post-list">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/content'); ?>
        <?php endwhile; ?>
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