<?php while (have_posts()) : the_post(); ?>
<?php //get_template_part('templates/page', 'header'); 
$the_gallery = '[gallery_bank type="images" format="masonry" title="true" desc="false" responsive="true" display="all" sort_by="random" animation_effect="" album_title="false" album_id="1"]'
?>



<section class="title-container js-coll-page-section coll-page-section">
	<div class="row">
		<div class="large-12 columns">
			<div class="coll-section-divider title-divider">
				<span class="text large-2 medium-2">About Jon</span>
				<span class="line large-10 medium-10"><span class="color"></span></span>
			</div>

			<div class="title-wrapper">
				<h1 class="title-text">Jon Johnson</h1>

				<h3 class="subtitle-text"><p>Principal</p></h3>
				<div class="row">
	                <div class="columns large-12 medium-12 ">
	                  <p style="color: #808080;">
						Jon Johnson formed Johnson and Associates in 1995, which became Johnson &amp; Blanton in 2005. Jon's lobbying and political consulting experience includes diverse areas such as: healthcare, managed care, worker's compensation, professional regulation,
	                    insurance, telecommunications, utilities and criminal justice.
	                    <br /><br />
	                    A dean's list student at Florida State University, Jon entered politics through the Republican Party of Florida, where he served as a fundraiser for major donors and as a campaign consultant to legislative candidates. At only 20 years old,
	                    he was appointed deputy finance director, one of the youngest people in the nation to hold such a position with the party.
	                    <br /><br />
	                    Jon went on to serve the administration of Governor Bob Martinez, overseeing the Department of Professional Regulation's external and political affairs, including the public relations office and selection of members for 32 professional boards.
	                    <br /><br />
	                    After his service in government, Jon coordinated state agency relations and lobbying as the director of government relations for the Florida Medical Association, assisting the association in developing Political Action Committee campaign
	                    strategies and grassroots programs.
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
					                  <h3>Director of Government Relations</h3>
									  <h4>Florida Medical Association</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
									<div class="columns large-4 medium-12">
					                  <h3>Executive Assistant to the Secretary</h3>
									  <h4>Florida Department of Professional Regulation</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
									<div class="columns large-4 medium-12">
					                  <h3>Deputy Finance Director</h3>
									  <h4>Republican Party of Florida</h4>
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
									  <p>After being voted to the student council of my high school, I had dreams of grandeur in someday running for the United States Senate. In fact, one of the main reasons I chose to attend Florida State University in Tallahassee was because it was the capital city and where the action was. I volunteered for everything political – College Republicans, Young Republicans – but quickly learned that I was more interested in the process rather than the office itself. I love working behind the scenes in getting good people elected and important public policy passed.</p>
					                </div>
								  </div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>



<?php endwhile; ?>
