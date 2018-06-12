<?php get_header(); ?>

<!-- HEADER -->
<div id="full-wrapper" class="full-wrapper">
	<section class="section-wrapper hBG" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/backgrounds/header-portal.jpeg);">
		<?php get_template_part('sections/navigations/nav-primary'); ?>
		<?php get_template_part('sections/header'); ?>
	</section>
	<!-- END HEADER -->

	<main id="home" class="section-wrapper">
		<div class="content">
			<?php get_template_part('sections/latest-news'); ?>
			<?php get_template_part('sections/weekly-internal'); ?>
			<?php get_template_part('sections/events'); ?>
			<?php get_template_part('sections/alura-course'); ?>
		</div>
		<?php get_template_part('sections/home-videos'); ?>
	</main>

	<section class="section-wrapper">
		<div class="content">
			<?php get_template_part('sections/home-products'); ?>
		</div>
	</section>

	<?php get_template_part('sections/sponsors'); ?>
	<?php get_template_part('sections/footer'); ?>
	<?php get_footer(); ?>
</div>