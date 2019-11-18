<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sotheby
 */

	get_header();

	$hero_banner = get_field('hero_banner');

	// echo '<pre>';
	// var_dump($hero_banner);
	// echo '</pre>';

?>

	<div class="hero interior" style="background: url('<?= $hero_banner['hero_image']['url'] ?>') 50% no-repeat">
		<div class="container" style="text-align: center;">	
			<h1><?= $hero_banner['hero_title']; ?></h1>
		</div>
	</div>

	<div class="quote">
		<div class="grid">
			<div class="col-desk-2"></div>
			<div class="col-desk-8 col-mob-4">
				<p>“For years, we have been dreaming about creating a living environment that merges luxury with the ease of universal design. We are delighted to finally bring to life a carefree setting filled with comfort and friendship for those who helped make our cherished community what it is today.” – <strong>The Residence Club Developers</strong></p>
			</div>
			<div class="col-desk-2"></div>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
			<h2 style="text-align: center; font-size: 36px;">Click Units to View Floorplans</h2>
			<?php echo do_shortcode("[drawattention ID='56']"); ?>

			<?php 

				$sections = get_field('content_sections');

				// echo '<pre>';
				// var_dump($sections);
				// echo '</pre>';
			
				foreach($sections as $section) { ?>

					<div class="section">
						<div class="grid" style="align-items: center; <?php 
							if($section['section_image_alignment'] == 'left') {
								echo "flex-direction: row;";
							} elseif ($section['section_image_alignment'] == 'right') {
								echo "flex-direction: row-reverse;";
							} elseif ($section['section_image_alignment'] == 'bottom') {
								echo "flex-direction: column-reverse;";
							} elseif ($section['section_image_alignment'] == 'top') {
								echo "flex-direction: column;";
							}
						?>">
							<div class="<?php 
									if($section['section_image_alignment'] == 'left') {
										echo "col-desk-6";
									} elseif ($section['section_image_alignment'] == 'right') {
										echo "col-desk-6";
									} elseif ($section['section_image_alignment'] == 'bottom') {
										echo "col-desk-12";
									} elseif ($section['section_image_alignment'] == 'top') {
										echo "col-desk-12";
									}
								?> col-mob-4">
								<img src="<?= $section['section_image']['url']; ?>" />
							</div>
							<div class="<?php 
									if($section['section_image_alignment'] == 'left') {
										echo "col-desk-6";
									} elseif ($section['section_image_alignment'] == 'right') {
										echo "col-desk-6";
									} elseif ($section['section_image_alignment'] == 'bottom') {
										echo "col-desk-12";
									} elseif ($section['section_image_alignment'] == 'top') {
										echo "col-desk-12";
									}
								?> col-mob-4">
								<h2 style="text-align: center;"><?= $section['section_title']; ?></h2>
								<p><?= $section['section_information']; ?></p>
							</div>
						</div>
					</div>

			<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
