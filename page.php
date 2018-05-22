<?php get_header(); ?>
<?php get_template_part('sections/navigations/nav-default'); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<main id="main">
			<article <?php post_class() ?> id="page">

				<header class="page-header">
					<div class="content">
						<div class="post-content-wrapper">
							<h1 class="title"><?php the_title(); ?></h1>
						</div>
					</div>
				</header>

				<div class="page-content">
					<div class="content">
						<div class="post-content-wrapper">
							<div class="post-entry post-entry--page">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</article>
		</main>

	<?php endwhile; endif; ?>
<?php get_template_part('sections/weekly-content'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>