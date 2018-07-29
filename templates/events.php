<?php
/*
Template Name: Eventos
*/
?>
<?php get_header(); ?>
<?php get_template_part('sections/navigations/nav-default'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header class="page-header">
			<div class="content">
				<div class="post-content-wrapper">
					<h1 id="latest-events-title" class="title"><?php the_title(); ?></h1>
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
	</div>
<?php endwhile; endif; ?>


<?php
	$args = array(
		'post_type' => 'eventos',
		'meta_key' => 'data',
		'orderby' => 'meta_value_num',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);
    $wp_query = new WP_Query($args);
 ?>
 <?php if (have_posts()): ?>
	<main class="section-wrapper" id="main">
		<div class="row">
      <div class="content">
        <a href="/conf">
          <video src="https://scontent.fpoa13-1.fna.fbcdn.net/v/t66.18014-6/29983813_1887212881321898_7124647323031419938_n.mp4?_nc_cat=0&amp;efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&amp;oh=70921d0fe7dae3d59fa12f1e93bdd0b3&amp;oe=5BCE1FD7"
                style="top: -10px; width: 100%; margin-bottom: 30px;"
                autoplay></video>
        </a>
        <div class="card card--type-2">
          <div class="card__content">
            <h2 class="card__title"><a href="/conf">BrazilJS Conference</a></h2>
            <span class="card__label">24 e 25 de Agosto</span>
          </div>
        </div>
      </div>
    </div>
		<div class="row">
			<div class="content">
				<ul class="event-list" aria-labelledby="latest-events-title">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							$eventDate = get_field('data');
							$eventMonth = date_i18n('F', strtotime($eventDate));
							$eventDay = date_i18n('d', strtotime($eventDate));
							$eventYear = date_i18n('Y', strtotime($eventDate));

							// Image links and ALT
							$imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), 'event-thumb-small');
							$imageAlt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
						?>

						<li class="events-list__item">
							<div class="card card--type-2">
								<a href="<?php the_permalink() ?>" class="card__header" aria-hidden="true" role="presentation" tabindex="-1" <?php if (isset($imageLink[0])) : echo 'style="background-image: url(' . $imageLink[0] . ')"'; else : echo 'data-bg="none"'; endif; ?>>
								</a>
								<div class="card__content">
									<h2 class="card__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
									<span class="card__label"><?php echo $eventDay; ?> de <?php echo $eventMonth; ?> <?php echo $eventYear; ?></span>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</main>
<?php endif; ?>
<?php get_template_part('sections/weekly-internal'); ?>

<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>
