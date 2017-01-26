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
						Dale Patchett was born and raised in Illinois where he attended Southern Illinois University. Following graduation, he began working for the Florida Department of Agriculture and Consumer Services Division of Forestry in Vero Beach, Florida. Dale was elected to the Florida 
						House of Representatives in 1976 where he served seven consecutive terms, the last six years as the Republican Leader. 
						<br /><br />
						He represented Indian River County, St. Lucie County, Brevard County, Osceola County, and Okeechobee County throughout his tenure. Upon leaving the legislature, Dale moved his family to Tallahassee and joined the Department of Natural Resources as Deputy Secretary. He continued in that position with the Department of Environmental Protection after shepherding the legislation to merge the two agencies into one. 
						<br /><br />
						Additionally, Dale has won numerous awards and recognitions. His leadership skills led to him being named one of America’s top ten Republican legislators of 1986 by his peers in the National Republican Legislators Association. Mr. Dale Patchett has forty-three cumulative years of experience specializing in Florida government policy, budget, and appropriations.					
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
			<div class="coll-section-divider">
				<span class="text large-2 medium-2">&nbsp;</span>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>