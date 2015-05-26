<?php while (have_posts()) : the_post(); ?>
<?php //get_template_part('templates/page', 'header'); 
$the_gallery = '[gallery_bank type="images" format="masonry" title="true" desc="false" responsive="true" display="all" sort_by="random" animation_effect="" album_title="false" album_id="5"]'
?>

<div class="wrapper common coll-single coll-parallax" id="skrollr-body">
  <section class="background js-coll-page-section coll-page-section">
    <div class="js-coll-parallax coll-section-background">
      <img class="coll-bg-image js-coll-lazy" width="830" height="540" data-coll-src="http://themes.cubalicious.net/morpheus/wp-content/uploads/2014/05/icon-1.jpg" alt="Awesome icons" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII="
      />
      <div class="color-overlay"></div>
    </div>
  </section>
  <section class="title-container js-coll-page-section coll-page-section">
    <div class="row">
      <div class="large-12 columns">
        <div class="coll-section-divider title-divider">
          <span class="text large-2 medium-2">&nbsp;</span>
          <span class="line large-10 medium-10">
            <span class="color"></span>
          </span>
        </div>

        <div class="title-wrapper">
          <h1 class="title-text">Cheryl Adams</h1>

          <h3 class="subtitle-text">
            <p>EXECUTIVE ASSISTANT &amp; OFFICE MANAGER</p>
          </h3>
        </div>
      </div>
    </div>
  </section>

<!-- ## BIO ## -->
  <section class="js-coll-page-section coll-page-section">
    <div class="row">
      <div class="columns large-2 medium-2">
		<h2 class="TJB-small-title">About Cheryl</h2>
	  </div>
	  <div class="columns large-10 medium-10">
		<hr />
	  </div>
	
      <div class="large-12 columns">
		<div class="copy-container large-10 large-offset-2 medium-10 medium-offset-2 TJB-bio-wrapper">
          <div class="content-wrapper">
            <article class="entry-content">
              <div class="row">
                <div class="columns large-12 medium-12 ">
                  <p style="color: #808080;">
					Cheryl joined Johnson & Blanton in 2007 as executive assistant and office manager. She is affectionately referred to as ‘The Hub’ for her ability to ensure all activities of the firm run smoothly and effectively. Cheryl wears many hats; office operations, events coordination, and TeamJB logistics are all aspects of her work at Johnson & Blanton. With a successful background in sales, office administration, and banking, Cheryl is a natural at building strong relationships with clients and colleagues. 
					<br /><br />
					A native Tallahasseean, she enjoys outdoor activities with her family.  Her pride and joy are her two sons, Joe who is pursuing a business degree at Florida State University, and Justin who is attending Keiser University Center for Culinary Arts.  
					<br /><br />
					
                  </p>
                </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>



<!-- ## Q&A ## -->
<section class="js-coll-page-section coll-page-section">
    <div class="row">
      <div class="large-12 columns">
        <div class="copy-container large-10 large-offset-2 medium-10 medium-offset-2">
          <div class="content-wrapper">
            <article class="entry-content">
              <div class="row">
			    <div class="columns large-12">
				  <?php echo do_shortcode( $the_gallery ) ?>
				  <h2 class="TJB-border-title">Q &amp; A</h2>
				</div>
			  </div>
			  <div class="row">
                <div class="columns large-4 medium-4">
				  <h4>When did you know you wanted a career in politics/state government?</h4>
                </div>
				<div class="columns large-8 medium-8">
				  <p>I have learned so much working with Jon, Travis, Amy and Melanie. My background is in sales and had no idea when I applied as their executive assistant and office manager that I would be involved in all aspects of a top lobbying firm. It’s been an incredible experience and one that I wouldn’t trade for anything.</p>
                </div>
			  </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- ## PICTURES ## -->
<section class="js-coll-page-section coll-page-section">
    <div class="row">
      <div class="large-12 columns">
        <div class="copy-container large-10 large-offset-2 medium-10 medium-offset-2">
          <div class="content-wrapper">
            <article class="entry-content">
              <div class="row">
			    <div class="columns large-12">
				  <!-- Pictures To Go Here -->
				</div>
			  </div>
            </article>
          </div>
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
</div>  <!-- end main-->

<?php endwhile; ?>
