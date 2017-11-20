<?php while (have_posts()) : the_post(); ?>

<?php //get_template_part('templates/page', 'header'); 
	//$the_gallery = '[gallery_bank type="images" format="masonry" title="true" desc="false" responsive="true" display="all" sort_by="random" animation_effect="" album_title="false" album_id="6"]'
?>

<section class="title-container js-coll-page-section coll-page-section">
	<div class="row">
		<div class="large-12 columns">
			<div class="coll-section-divider title-divider">
				<span class="text large-2 medium-2">About Rose</span>
				<span class="line large-10 medium-10"><span class="color"></span></span>
			</div>

			<div class="title-wrapper">
				<h1 class="title-text">Rose Tuzik</h1>

				<h3 class="subtitle-text"><p>LEGISLATIVE ASSISTANT</p></h3>
				<div class="row">
	                <div class="columns large-12 medium-12 ">
	                  <p style="color: #808080;">		  				
					  Rose Tuzik was previously hired at Johnson &amp; Blanton, LLC. as the Office Runner during the
					2016 Legislative Session and was asked to return in a higher position as Team JB’s Legislative
					Assistant for the 2017 Legislative Session. She now currently works full-time with the
					Communications Director, and is also in charge of the Public Relations and Marketing aspects
					of the firm.
					<br /><br />
					Rose previously worked at Contribution Link, LLC. in Tallahassee where she dealt with the
					state’s campaign contributions during the 2016 General Elections. She attended Florida State
					University and graduated with a Bachelor’s Degree in English and Communications with a minor
					in Human Rights. She plans to go to Law School one day to represent human trafficking victims
					as well as start a non-profit organization that financially assists human trafficking victims
					internationally.
					<br /><br />
					Rose is a Sarasota County native but has lived in Tallahassee since 2008 where she attended
					Lincoln High School, Tallahassee Community College, and Florida State University.
					Additionally, she was a member of the World-Renowned Florida State University Marching
					Chiefs and is currently a proud dog-mom to her purebred Siberian husky named Miyagi.
					  </p>
	                </div>
			</div>
		</div>
	</div>
</section>


<?php endwhile; ?>
