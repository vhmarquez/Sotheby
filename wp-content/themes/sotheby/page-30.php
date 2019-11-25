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
	$customize_unit = get_field('customize_unit');
	$choose_unit = get_field('choose_unit');

?>

	<div class="hero interior" style="background: url('<?= $hero_banner['hero_image']['url'] ?>') 50% no-repeat">
		<div class="container" style="text-align: center;">	
			<h1><?= $hero_banner['hero_title']; ?></h1>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container" style="text-align: center;">
				<div class="section">
					<div class="grid" style="align-items: center; justify-content">
						<div class="col-desk-12 col-mob-4" style="text-align: left;">
							<h2 style="text-align: center; font-size: 36px;"><?= $customize_unit['title']; ?></h2>
						</div>
						<div class="col-desk-6 col-mob-4" style="text-align: left;">
							<?= $customize_unit['content']; ?>
							<a href="<?= $customize_unit['button_link']; ?>" class="button"><?= $customize_unit['button_text']; ?></a>
						</div>
						<div class="col-desk-6 col-mob-4">	
							<img src="<?= $customize_unit['image']['url']; ?>" />
						</div>
					</div>
				</div>
				<div class="section">
					<div class="grid" style="text-align: center;">
						<div class="col-desk-12 col-mob-4">
							<h2 style="text-align: center; font-size: 36px;"><?= $choose_unit['title']; ?></h2>
						</div>
						<div class="col-desk-12 col-mob-4">
							<a href="<?= $choose_unit['image_link']; ?>"><img src="<?= $choose_unit['image']['url']; ?>" style="display: inline-block;" /></a>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
