<?php while (have_posts()) : the_post(); ?>
<?php //get_template_part('templates/page', 'header'); 
$the_gallery = '[gallery_bank type="images" format="masonry" title="true" desc="false" responsive="true" display="all" sort_by="random" animation_effect="" album_title="false" album_id="3"]'
?>


<section class="title-container js-coll-page-section coll-page-section">
	<div class="row">
		<div class="large-12 columns">
			<div class="coll-section-divider title-divider">
				<span class="text large-2 medium-2">About Melanie</span>
				<span class="line large-10 medium-10"><span class="color"></span></span>
			</div>

			<div class="title-wrapper">
				<h1 class="title-text">Melanie Brown</h1>

				<h3 class="subtitle-text"><p>DIRECTOR OF GOVERNMENT RELATIONS</p></h3>
				<div class="row">
	                <div class="columns large-12 medium-12 ">
	                  <p style="color: #808080;">
						Melanie Brown returned to Johnson & Blanton in February 2011 as a Director of Government Relations. She was previously at Johnson & Blanton from May 2004 to August 2006 and was responsible for managing projects and special assignments, researching client issues, and developing marketing strategies for the company and its clients.
						<br /><br />
						During the 2008 election cycle, Melanie was the Finance Director for House Campaigns at the Republican Party of Florida raising $13 million to successfully elect Republican candidates to the Florida House of Representatives. 
						<br /><br />
						Melanie also served as the Director of Appointments and Special Projects for Speaker of the House Larry Cretul, responsible for managing and recruiting candidates on behalf of the Speaker to several boards and commissions as well as organizing and planning special events for the Florida House of Representatives. 
						<br /><br />
						Most recently, Melanie served as a Program Manager in the Florida House of Representatives where she assisted in the creation of the newly created Office of Public Information under Speaker pro tempore John Legg that incorporated several communication processes such as public record requests, correspondence and website functions. 
						<br /><br />
						Melanie is a Pensacola, Florida native and holds a bachelors degree in Multinational Business Operations and German from Florida State University. Melanie currently resides in Tampa, Florida with her husband Robert, daughter Elizabeth and Beagle Mix Sir Frederick Von "Paulus". Melanie is actively involved with the Junior League of Tampa.
						
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
					                  <h3>Appointments Coordinator</h3>
									  <h4>Florida House Office of Public Information and Appointments</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Director of Appointments and Special Projects</h3>
									  <h4>Office of the Florida House Speaker</h4>
									  <p>TALLAHASSEE, FLORIDA</p>
					                </div>
					                <div class="columns large-4 medium-12">
					                  <h3>Finance Director for House Campaigns</h3>
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
									  <p>I was working in the Senate Appropriations Committee where I met Jon and Travis, or as I playfully refer to them as my couch stalkers! They asked me to be their runner after my OPS job was over post Legislative Session and the rest is history. I loved the policy issues that we worked on and I knew right away that this was an incredible opportunity to work with some of Florida’s brightest business leaders, advocates and experts in the field.</p>
					                </div>
								  </div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>


<?php endwhile; ?>
