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
	$teams = get_field('teams');

?>

	<div class="hero interior" style="background: url('<?= $hero_banner['hero_image']['url'] ?>') 50% no-repeat">
		<div class="container" style="text-align: center;">	
			<h1><?= $hero_banner['hero_title']; ?></h1>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php 
			
				foreach($teams['team'] as $team) { ?>

					<div class="section">
						<div class="grid" style="align-items: center;">
							<div class="col-desk-2"></div>
							<div class="col-desk-8 col-mob-4">
								<h2 style="text-align: center; font-size: 36px;"><?= $team['team_name']; ?></h2>
								<?php 
									if ($team['team_info']) {
										echo $team['team_info'];
									}
								?>
							</div>
							<div class="col-desk-2"></div>
							<?php
								foreach($team['team_member'] as $member) { ?>
									<div class="col-desk-2"></div>
									<div class="col-desk-8 col-mob-4">
											<h3><?= $member['member_name']; ?></h3>
											<?= $member['member_bio']; ?>
									</div>
									<div class="col-desk-2"></div>
							<?php } ?>
									
						</div>
					</div>

			<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
