<?php while (have_posts()) : the_post(); ?>
<?php //get_template_part('templates/page', 'header'); 
$the_gallery = '[gallery_bank type="images" format="masonry" title="true" desc="false" responsive="true" display="all" sort_by="random" animation_effect="" album_title="false" album_id="4"]'
?>


<section class="title-container js-coll-page-section coll-page-section">
	<div class="row">
		<div class="large-12 columns">
			<div class="coll-section-divider title-divider">
				<span class="text large-2 medium-2">About Darrick</span>
				<span class="line large-10 medium-10"><span class="color"></span></span>
			</div>

			<div class="title-wrapper">
				<h1 class="title-text">Darrick D. McGhee</h1>

				<h3 class="subtitle-text"><p>VICE PRESIDENT OF GOVERNMENT RELATIONS</p></h3>
				<div class="row">
	                <div class="columns large-12 medium-12 ">
	                  <p style="color: #808080;">
						Darrick D. McGhee joins Johnson & Blanton as the Vice President of Government Relation with over 13 years of experience in government. Most recently, Darrick was the Director of Legislative Affairs for the Executive Office of Governor Rick Scott.  In this capacity, he was responsible for advocating and securing passage of the Governor's legislative priorities.  He also ensured the proper and legal administration of the Governor's legislative role throughout the legislative process and provided counsel and support to the Governor and other staff members with regard to legislative matters and concerns.  In this role, Darrick also oversaw the legislative affairs directors for each of the executive agencies.
						<br /><br />
						Before joining the Executive Office of Governor Rick Scott, Darrick served in multiple leadership roles with the Department of Economic Opportunity.  While at this agency, Darrick was the interim Executive Director, Chief of Staff and the Director of Legislative and Cabinet Affairs.
						<br /><br />
						Darrick received his formal education at Florida Agricultural & Mechanical University (FAMU).  Here he earned his Bachelor of Arts in Political Science and Religion (2000).  Darrick is the Pastor of Bible Based Church in Tallahassee, Florida where he resides with his wife, Tikia, and their two children, Darrick II and Tania.  
						
					  </p>
	                </div>
			</div>
		</div>
	</div>
</section>

<section class="js-coll-page-section coll-page-section">
			<div class="row">
				<div class="large-12 columns">
					<div class="coll-section-divider photos-divider">
						<span class="text large-2 medium-2">Photos</span>
						<span class="line large-10 medium-10"><span class="color"></span></span>
					</div>
					<div class="copy-container large-10 large-offset-2 medium-10 medium-offset-2">
						<div class="photos-wrapper">
							<article class="entry-content">
								<div class="row ">
									<div class="columns">
										<?php echo do_shortcode( $the_gallery ) ?>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>

<section class="js-coll-page-section coll-page-section">
			<div class="row">
				<div class="large-12 columns">
					<div class="coll-section-divider content-divider">
						<span class="text large-2 medium-2">Experience</span>
						<span class="line large-10 medium-10"><span class="color"></span></span>
					</div>
					<div class="copy-container large-10 large-offset-2 medium-10 medium-offset-2">
						<div class="content-wrapper">
							<article class="entry-content">
								<div class="row ">
									<div class="columns large-4 medium-12">
					                  <h3>Acting Executive Director</h3>
									  <h4>Florida Department of Economic Opportunity</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Chief of Staff</h3>
									  <h4>Florida Department of Economic Opportunity</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Director of Legislative and Cabinet Affairs</h3>
									  <h4>Florida Department of Economic Opportunity</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Director of Governmental Relations</h3>
									  <h4>Florida Department of Education</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Director of Legislative Affairs</h3>
									  <h4>Florida Department of Business and Professional Regulation</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Director of Legislative Affairs</h3>
									  <h4>Florida Department of Elder Affairs</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="js-coll-page-section coll-page-section">
			<div class="row">
				<div class="large-12 columns">
					<div class="coll-section-divider questions-divider">
						<span class="text large-2 medium-2">Q &amp; A</span>
						<span class="line large-10 medium-10"><span class="color"></span></span>
					</div>
					<div class="copy-container large-10 large-offset-2 medium-10 medium-offset-2">
						<div class="questions-wrapper">
							<article class="entry-content">
								<div class="row">
					                <div class="columns large-4 medium-4">
									  <h4>When did you know you wanted a career in politics/state government?</h4>
					                </div>
									<div class="columns large-8 medium-8">
									  <p>During my two year stint working for Governor Jeb Bush, I was able to see passion and true conviction on display each day. It was contagious.</p>
					                </div>
								  </div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php endwhile; ?>
