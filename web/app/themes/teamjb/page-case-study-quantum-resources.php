<?php while (have_posts()) : the_post(); ?>
<?php //get_template_part('templates/page', 'header'); ?>

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
          <span class="text large-2 medium-2">Case Study</span>
          <span class="line large-10 medium-10">
            <span class="color"></span>
          </span>
        </div>

        <div class="title-wrapper">
          <h1 class="title-text">Saving Jobs</h1>

          <h3 class="subtitle-text">
            <p>Quantum Resources</p>
          </h3>
        </div>
      </div>
    </div>
  </section>

  <section class="js-coll-page-section coll-page-section">
    <div class="row">
      <div class="large-12 columns">
        <div class="coll-section-divider content-divider">
          <span class="text large-2 medium-2">&nbsp;</span>
          <span class="line large-10 medium-10">
            <span class="color"></span>
          </span>
        </div>
        <div class="copy-container large-10 large-offset-2 medium-10 medium-offset-2">
          <div class="content-wrapper">
            <article class="entry-content">
              <div class="row">
                <div class="columns large-12 medium-12 ">
                  <p style="color: #808080;">
					When you think Florida, you rarely think oil production. While the gas and oil industry of Florida has never rivaled Texas or Oklahoma, according to the United States Energy Information Administration, Florida produces around 6,000 barrels of oil per day, and over 2.135 million barrels per year.  
                    <br /> <br />
					In the small, northwest town of Jay, Florida is Jay field, owned by the private oil and gas company Quantum Resources. Spanning more than 14 thousand acres and producing 41 percent of Florida’s Crude Oil, Jay oil field is the primary employer and economic engine of the small community. 
					<br /> <br />
					Due to an economic downturn, Florida was dependent on every tax dollar they could get their hands on in 2009. The price of oil was at an all time low, and the cost of oil production at an all time high. One month after Christmas, Quantum Resources terminated roughly half of the plant’s employees and announced Jay oil field was ceasing production.
					<br /> <br />
					In the town of 693 people, the loss of jobs was devastating. With paychecks gone and the shutdown of production threatening the community’s way of life, lobbyist team, Johnson and Blanton from Tallahassee needed to reduce Quantum’s tax burden to keep the field open, save jobs and save the town. Legislation was created and local government leaders were secured as sponsors. 
					<br /> <br />
					The new policy established exemptions from the excise tax on oil and gas production in Florida for on­shore production from new wells, and temporarily abandoned wells returned to service. The legislation also encouraged additional oil and gas production in the State. 
					<br /> <br />
					Additionally, business lobbyists Team JB, addressed economic concerns by tiering the tax exemption. When the price of oil per barrel rose over $100 the state would be made whole again, but when price dropped below $100, the oil field would get a break on their taxes to help with production costs. 
					<br /> <br />
					The legislation passed the Florida Senate on a 116­1 vote and the Florida House of Representatives on a 39­ 1 vote. Shortly thereafter, Quantum’s Jay oil field resumed production. With the help of Team JB, the life of Jay oil field was extended, jobs were saved and the community’s way of life restored.
				  </p>
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
