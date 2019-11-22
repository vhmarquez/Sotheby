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

	<div class="hero home" style="background: url('<?= $hero_banner['hero_image']['url'] ?>') 50% no-repeat">
		<div class="container" style="text-align: center;">	
			<h1><?= $hero_banner['hero_title']; ?></h1><br/>
			<button><?= do_shortcode('[video_lightbox_vimeo5 video_id="338009804" width="640" height="480" anchor="' . $hero_banner['hero_cta'] .'"]'); ?></button>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="grid">
		<?php

			$ctas = get_field('ctas');

			// echo '<pre>';
			// var_dump($ctas);
			// echo '</pre>';

			foreach($ctas as $cta) { ?>
				<div class="col-desk-4 col-mob-4">
				<?php
					echo '<h3>' . $cta['cta_title'] . '</h3>';
					echo '<img src="' . $cta['cta_image']['url'] . '" alt="' . $cta['cta_title'] . '" style="border: 10px solid rgb(248, 248, 248); box-shadow: 0px 0 12px rgba(0,0,0, .12);" />';
					echo '<p>' . $cta['cta_content'] . '</p>';
					echo '<a href="' . $cta['cta_link'] . '" style="display: block; text-align: right;">' . $cta['cta_link_text'] . '</a>';
				?>
				</div>
			<?php } 

			// echo $hero_banner['hero_image']['url'];
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
