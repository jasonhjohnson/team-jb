<?php while (have_posts()) : the_post(); ?>
<?php //get_template_part('templates/page', 'header'); 
$the_gallery = '[gallery_bank type="images" format="masonry" title="true" desc="false" responsive="true" display="all" sort_by="random" animation_effect="" album_title="false" album_id="2"]'
?>

<section class="title-container js-coll-page-section coll-page-section">
	<div class="row">
		<div class="large-12 columns">
			<div class="coll-section-divider title-divider">
				<span class="text large-2 medium-2">About Travis</span>
				<span class="line large-10 medium-10"><span class="color"></span></span>
			</div>

			<div class="title-wrapper">
				<h1 class="title-text">Travis Blanton</h1>

				<h3 class="subtitle-text"><p>Principal</p></h3>
				<div class="row">
	                <div class="columns large-12 medium-12 ">
	                  <p style="color: #808080;">
						Travis joined Johnson and Associates in 2002, which became Johnson & Blanton in 2005. His extensive experience in Florida government includes serving as the chief of staff for the Agency for Health Care Administration (AHCA), which is responsible for administering Florida's $20 billion Medicaid program and regulating more than 19,000 health care facilities throughout the state. 
						<br /><br />
						As part of Governor Jeb Bush's administration, Travis managed staff at AHCA's legislative affairs office, in the Washington D.C. office, and was responsible for all external communications between the agency and its stakeholders both inside and outside government. His duties also included policy development and implementation for the agency secretary and deputy secretaries. 
						<br /><br />
						A veteran of countless policy battles, Travis has also served as the legislative affairs director for the Florida Department of Elder Affairs, where his accomplishments included winning unprecedented new funding for senior programs. 
						<br /><br />
						Travis began his career in politics and public policy while still a student at Florida State University, interning for state Sen. Curt Kiser and staffing the Florida Senate. He rose to become senior Senate liaison for the Republican Party of Florida, where his roles included chief fundraiser for Senate campaigns.
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
					                  <h3>Chief of Staff</h3>
									  <h4>Florida Agency for Health Care Administration (AHCA)</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Director of External Affairs</h3>
									  <h4>Florida Agency for Health Care Administration (AHCA)</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Director of Legislative Affairs</h3>
									  <h4>Florida Department of Elder Affairs</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Senate Liaison, Director of Fundraising for Senate Campaigns</h3>
									  <h4>Republican Party of Florida</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>PAC Treasurer</h3>
									  <h4>Southeastern Fisheries Association</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Intern</h3>
									  <h4>Florida State Senator Curt Kiser</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Intern</h3>
									  <h4>Florida Senate Sergeant-at-Arms Wayne Todd</h4>
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
									  <p>I started my political ‘career’ at the tender age of 10 having served as a Page in the Florida House of Representatives. Later, interning under Sergeant­-at­-Arms Wayne Todd in the Senate and in State Senator Curt Kiser’s office, I realized this was an interesting process. This led to working for an association, then the state party, then a Florida agency. It’s been an incredible opportunity to work in all facets of the process.</p>
					                </div>
								  </div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>



<?php endwhile; ?>
