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
		<?php // get_template_part('sections/ticker'); ?>
		
		<?php /* ?>
		<div class="courses_recommended">
			<?php get_template_part('sections/alura-course'); ?>
		</div>
		<?php */ ?>
	
	</div>
	<?php get_template_part('sections/home-videos'); ?>
</main>

<?php //get_template_part('sections/courses'); ?>

<section class="section-wrapper">
	<div class="content">
		<?php get_template_part('sections/home-products'); ?>
	</div>
</section>

<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>

<div id="brjs-opening-video" class="brjs-opening-video">
  <video id="main-reborn-vine" loop autoplay muted>
  	<source src="<?php asset_path('media/MAIN_1.mp4') ?>" type="video/mp4">
 	</video>


</div>