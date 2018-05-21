<?php get_header(); ?>

<!-- HEADER -->
<section class="section-wrapper header__reborn">
	<?php get_template_part('sections/navigations/nav-primary'); ?>
	<?php get_template_part('sections/header'); ?>
</section>
<!-- END HEADER -->

<main id="home" class="section-wrapper">
	<div class="content">
		<?php get_template_part('sections/latest-news'); ?>
		<?php get_template_part('sections/weekly-internal'); ?>
		<?php get_template_part('sections/events'); ?>
	
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