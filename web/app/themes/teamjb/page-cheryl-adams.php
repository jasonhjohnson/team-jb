<?php while (have_posts()) : the_post(); ?>
<?php //get_template_part('templates/page', 'header'); 
$the_gallery = '[gallery_bank type="images" format="masonry" title="true" desc="false" responsive="true" display="all" sort_by="random" animation_effect="" album_title="false" album_id="5"]'
?>




<section class="title-container js-coll-page-section coll-page-section">
	<div class="row">
		<div class="large-12 columns">
			<div class="coll-section-divider title-divider">
				<span class="text large-2 medium-2">About Cheryl</span>
				<span class="line large-10 medium-10"><span class="color"></span></span>
			</div>

			<div class="title-wrapper">
				<h1 class="title-text">Cheryl Adams</h1>

				<h3 class="subtitle-text"><p>EXECUTIVE ASSISTANT &amp; OFFICE MANAGER</p></h3>
				<div class="row">
	                <div class="columns large-12 medium-12 ">
	                  <p style="color: #808080;">
						Cheryl joined Johnson & Blanton in 2007 as executive assistant and office manager. She is affectionately referred to as ‘The Hub’ for her ability to ensure all activities of the firm run smoothly and effectively. Cheryl wears many hats; office operations, events coordination, and TeamJB logistics are all aspects of her work at Johnson & Blanton. With a successful background in sales, office administration, and banking, Cheryl is a natural at building strong relationships with clients and colleagues. 
						<br /><br />
						A native Tallahasseean, she enjoys outdoor activities with her family.  Her pride and joy are her two sons, Joe who is pursuing a business degree at Florida State University, and Justin who is attending Keiser University Center for Culinary Arts.  
						<br /><br />
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
									  <p>I have learned so much working with Jon, Travis, Amy and Melanie. My background is in sales and had no idea when I applied as their executive assistant and office manager that I would be involved in all aspects of a top lobbying firm. It’s been an incredible experience and one that I wouldn’t trade for anything.</p>
					                </div>
								  </div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php endwhile; ?>
