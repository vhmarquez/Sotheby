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
	$brokers = get_field('brokers');

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
				<?= $page_intro; ?>
			</div>
			<div class="col-desk-2"></div>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container" style="text-align: center;">
				<div class="section">
					<div class="grid">
						<div class="col-desk-6 col-mob-4" style="text-align: left;">
							<h2 style="text-align: center; font-size: 36px;"><?= $brokers['section_title']; ?></h2>
							<?php foreach($brokers['broker'] as $broker) { ?>

									<h3><?= $broker['broker_title']; ?></h3>
									<p><?= $broker['name']; ?><br/>
									<a href="tel:<?= $broker['phone_number']; ?>"><?= $broker['phone_number']; ?></a><br/>
									<a href="<?= $broker['e-mail']; ?>"><?= $broker['e-mail']; ?></a><br/>
									<a href="<?= $broker['website']; ?>" target="_blank"><?= $broker['website']; ?></a></p>

							<?php } ?>
						</div>
						<div class="col-desk-6 col-mob-4" style="text-align: left;">
							<?= do_shortcode("[contact-form-7 id='202' title='Contact form']"); ?>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();