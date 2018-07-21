<!-- SPEAKERS LIST -->
<?php
    $args = array(
		'post_type' => 'palestrantes',
		'posts_per_page' => -1,
		'order' => 'DESC',
		'meta_key' => 'keynote',
		'orderby' => 'meta_value_num'
	);
    $keynote_query = new WP_Query($args);

  if ($keynote_query->have_posts()): ?>
    <?php //if (get_field('keynote')): ?>
			<section class="section-wrapper speakers-list-container">
				<div class="content">
					<div>
						<h2 class="title" id="speakers-title">Keynotes</h2>
					</div>

					<ul class="post-content-wrapper center-elements--mobile" aria-labelledby="speakers-title">

						<?php while ($keynote_query->have_posts()): $keynote_query->the_post(); ?>

							<?php
								// echo "<pre>";
								// print_r($keynote_query);
								// echo "</pre>";
								// die();
								$imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), 'event-thumb-small');
								$imageAlt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
							?>

							<?php if (get_field('keynote')): ?>
								<li class="col-5-12 calendar-list__item">
									<div class="card card--type-2">
										<div class="card__header">
											<div class="media-wrapper">
												<img class="card__thumb" src="<?php echo $imageLink[0]; ?>" alt="<?php echo $imageAlt ?>" />
											</div>
											<?php if (get_field('keynote')): ?>
												<strong class="card__ribbon">
													<span class="card__ribbon-text">Keynote</span>
												</strong>
											<?php endif; ?>
										</div>
										<div class="card__content">
											<span class="card__label"><?php the_field('local') ?></span>
											<h3 class="card__title"><?php the_title(); ?></h3>
											<strong class="card__subtitle"><?php the_field('empresa') ?></strong>
											<div class="card__paragraph"><?php the_content() ?></div>
										</div>
									</div>
								</li>
							<?php endif; ?>

						<?php  endwhile; ?>
					</ul>

					<div class="content">
						<ul>

							<?php while ($keynote_query->have_posts()): $keynote_query->the_post(); ?>

								<?php
									$imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), 'event-thumb-small');
									$imageAlt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
								?>

								<?php if (!get_field('keynote')): ?>
									<li class="col-5-12">
										<div class="card card--type-2">
											<div class="card__header">
												<div class="media-wrapper">
													<img class="card__thumb" src="<?php echo $imageLink[0]; ?>" alt="<?php echo $imageAlt ?>" />
												</div>
												<?php if (get_field('keynote')): ?>
													<strong class="card__ribbon">
														<span class="card__ribbon-text">Keynote</span>
													</strong>
												<?php endif; ?>
											</div>
											<div class="card__content">
												<span class="card__label"><?php the_field('local') ?></span>
												<h3 class="card__title"><?php the_title(); ?></h3>
												<strong class="card__subtitle"><?php the_field('empresa') ?></strong>
												<div class="card__paragraph"><?php the_content() ?></div>
											</div>
										</div>
									</li>
								<?php endif; ?>

							<?php  endwhile; ?>
						</ul>
					</div>

				</div>
			</section>
		<?php //endif; ?>
	<?php endif; ?>
<!-- END SPEAKERS LIST -->
