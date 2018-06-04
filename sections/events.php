<!-- HOME EVENTS -->
<?php
	//We need to reset the posts loop
	wp_reset_postdata();

	$today = date('Ymd');
  $args = array(
		'post_type' => 'eventos',
		'meta_key' => 'data',
		'orderby' => 'meta_value_num',
		'posts_per_page' => 3,
		'order' => 'ASC',
		'meta_query' => array (
			array (
				'key' => 'data',
				'compare' => '>=',
				'value' => $today
			)
		)
	);
  
  $wp_query = new WP_Query($args);
?>

<?php if (have_posts()): ?>
	<section class="section-wrapper">
		<div class="content">
			<div class="center-elements--mobile">
				<h2 class="title" id="latest-events-title">Próximos eventos</h2>
			</div>
			<div class="row center-elements--mobile">
				<ul class="event-list calendar-list" aria-labelledby="latest-events-title">

					<?php while (have_posts()) : the_post(); ?>
						
						<?php
							$eventDate = get_field('data');					
							$eventMonth = date_i18n('F', strtotime($eventDate));
							$eventDay = date_i18n('d', strtotime($eventDate));
							$eventYear = date_i18n('Y', strtotime($eventDate));


							$imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), 'event-thumb-small');
							$imageAlt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
						?>

						<li class="events-list__item">
							<div class="card">
								<a href="<?php the_permalink() ?>" class="card__header" <?php if (isset($imageLink[0])) : echo 'style="background-image: url(' . $imageLink[0] . ')"'; else : echo 'data-bg="none"'; endif; ?>></a>
								<div class="card__content">
									<h3 class="card__title">
										<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
									</h3>
									<span class="card__label">
										<?php echo $eventDay; ?> de <?php echo $eventMonth; ?> / <?php echo $eventYear; ?>
									</span>
								</div>
							</div>
						</li>

					<?php endwhile; ?>
				</ul>
			</div>
			<div class="row center-elements">
				<a href="<?php bloginfo('url'); ?>/eventos" class="anchor-link">Veja todos os eventos</a>
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- END HOME EVENTS -->