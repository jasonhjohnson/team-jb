<?php while (have_posts()) : the_post(); ?>

<?php //get_template_part('templates/page', 'header'); 
	$the_gallery = '[gallery_bank type="images" format="masonry" title="true" desc="false" responsive="true" display="all" sort_by="random" animation_effect="" album_title="false" album_id="7"]'
?>

<section class="title-container js-coll-page-section coll-page-section">
	<div class="row">
		<div class="large-12 columns">
			<div class="coll-section-divider title-divider">
				<span class="text large-2 medium-2">About Dale</span>
				<span class="line large-10 medium-10"><span class="color"></span></span>
			</div>

			<div class="title-wrapper">
				<h1 class="title-text">Dale Patchett</h1>

				<h3 class="subtitle-text"><p>SENIOR ADVISOR</p></h3>
				<div class="row">
	                <div class="columns large-12 medium-12 ">
	                  <p style="color: #808080;">
						Dale Patchett was born and raised in the Midwestern state of Illinois where he attended Southern Illinois University. Immediately following graduation, he began working for the Florida Department of Agriculture and Consumer Services Division of Forestry in Vero Beach, Florida. Dale was elected to the Florida House of Representatives in 1976 where he served seven consecutive terms, including his last six years as the Republican Leader. 
                        <br /><br />
                        He represented Indian River County, St. Lucie County, Brevard County, Osceola County, and Okeechobee County throughout his tenure. He also owned and operated a commercial landscape business as well as a commercial and agricultural real estate business during his time in the legislature. 
                        <br /><br />
                        Dale is a founding Board Member of the Indian River National Bank and has forty-three years of experience in leadership, specializing in policy, budget, and appropriation matters. After Dale left the legislature and relocated to Tallahassee, he worked for the Department of Natural Resources as Deputy Secretary. He has also won numerous awards and recognitions, including being named one of America's top ten Republican legislators of 1986 by the National Republican Legislators Association.					
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
    <p>&nbsp;</p>
</section>

<?php endwhile; ?>