<?php get_header(); ?>

<!-- HEADER -->
<section class="section-wrapper header__reborn">
	<?php get_template_part('sections/navigation'); ?>
	<?php get_template_part('sections/header'); ?>
</section>
<!-- END HEADER -->

<main class="section-wrapper" id="main">
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
<div class="content">
	<hr class="hr">
</div>
<?php get_footer(); ?>