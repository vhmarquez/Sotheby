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
	$page_intro = get_field('page_intro');
	$benefits = get_field('concierge_benefits');

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
				<h2 style="text-align: center; font-size: 36px;"><?= $page_intro['intro_title']; ?></h2>
				<?= $page_intro['intro_body']; ?>
			</div>
			<div class="col-desk-2"></div>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
			<div class="container" style="text-align: center;">	
				<h2 style="text-align: center; font-size: 36px;">Click to View Photos</h2>
				<?= do_shortcode("[drawattention ID='155']"); ?>
			</div>

			<h2 style="text-align: center; font-size: 36px;"><?= $benefits['section_title']; ?></h2>

			<div class="section">
				<div class="grid" style="align-items: center;">
					<div class="col-desk-4 col-mob-4">
						<?= $benefits['first_list']; ?>
					</div>
					<div class="col-desk-4 col-mob-4">
						<?= $benefits['second_list']; ?>
					</div>
					<div class="col-desk-4 col-mob-4">
						<?= $benefits['third_list']; ?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
