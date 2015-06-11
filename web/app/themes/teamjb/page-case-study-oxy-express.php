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
          <h1 class="title-text">Saving Lives</h1>

          <h3 class="subtitle-text">
            <p>The "Oxy Express"</p>
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
					The “oxy Express.” Seven fatalities per day, 49 deaths per week, 2,557 deaths per year. Thousands upon thousands of prescription narcotics being illegally sold to addicts and traffickers. Thousands of babies being born addicted to drugs. In 2010, Florida had become the epicenter of the nation’s ‘pill mill’ epidemic and diverted prescriptions drugs. The Drug Enforcement Administration (DEA) reported 49 of the top 50 oxycodone dispensing physicians in the nation were located in Florida.
					<br /> <br />
					With prescription drug abuse jeopardizing our State’s families, schools, and the productivity of our workforce, Florida needed swift legislative action to be the first of its kind. Chosen to lead this fight for stricter regulations on physicians, pain management clinics, pharmacies, and drug manufacturers and distributors was lobbyist team Johnson and Blanton of Tallahassee.
					<br /> <br />
					Team JB helped draft new policy as tough on illegal distributors and unscrupulous doctors, as it was fair to law­ abiding patients and industry professionals. Tackling illegal prescription drug distribution at the source, the legislation increased penalties for doctors and clinics overprescribing narcotics, required the tracking of wholesale and pharmacy distribution of certain substances and provided $3 million to support the continued efforts of law enforcement and state prosecutors against prescription drug abuse. The bill also provided for a Declaration of Public Health Emergency, triggering a mandatory buyback program for doctors to return controlled substances back to distributors.
					<br /> <br />
					Johnson and Blanton worked tirelessly, lobbying with members of the Florida House of Representatives and Florida Senate. House Bill 7095 was passed on May 6, 2011 and signed into law by Governor Rick Scott on June 3, 2011. Immediately after the legislation passed, government officials announced they were destroying more than 357,000 pills given by physicians and quarantined by law enforcement officials. The 2012 Drugs Identified in Deceased Persons Report was released by Florida Medical Examiners in 2013 showing deaths caused by oxycodone plunged by 41 percent and prescription drug deaths fell by 9.9 percent.
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
