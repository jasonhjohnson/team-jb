<?php while (have_posts()) : the_post(); ?>
<?php //get_template_part('templates/page', 'header'); ?>

<style>
@media (max-width: 550px) {
    .big-container {
        display: none;
    }
}
@media (min-width: 550px) {
    .small-container {
        display: none;
    }
}
/* Responsive iFrame */
.responsive-iframe-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px;
    height: 0;
    overflow: hidden;
}
.responsive-iframe-container iframe,   
.vresponsive-iframe-container object,  
.vresponsive-iframe-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>

<div id="skrollr-body" role="main" class="wrapper common">	
<section id="mgoodies" class="post-607 coll-page-section type-coll-page-section status-publish hentry page-section ">
    <div class="coll-section-background js-coll-parallax"  style="background-color: #1a1a1a;min-height:800px;" >
        <div class="overlay" style="min-height:800px;" ></div>
            
        </div>
        <div class="section-content row ">
            <div class="columns entry-title coll-hide-title" >
                <h2 class="title" style="color: #fff">MGoodies</h2>
                    <h4 class="subtitle" style="color: #fff"></h4>
            </div>
            <div class="entry-content columns" style="min-height:800px;">     
                <div class="custom-calendar-wrap custom-calendar-full">
        				<div class="custom-header clearfix">        					
        					<h3 class="custom-month-year">
        						<span id="custom-month" class="custom-month"></span>
        						<span id="custom-year" class="custom-year"></span>
        						<nav>
        							<span id="custom-prev" class="custom-prev"></span>
        							<span id="custom-next" class="custom-next"></span>
        							<span id="custom-current" class="custom-current" title="Got to current date"></span>
        						</nav>
        					</h3>
        				</div>
        				<div id="calendar" class="fc-calendar-container"></div>
        			</div>
                
                <p></p>
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
                        <li id="menu-item-996" class="menu-item menu-item-type-post_type menu-item-object-coll-page-section menu-item-996"><a href="/">Home</a></li>
                        <li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-coll-page-section menu-item-993"><a href="/meet-the-team">Meet The Team</a></li>
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
</div> 
 <!-- end main-->

<?php endwhile; ?>
