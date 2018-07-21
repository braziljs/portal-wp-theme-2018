<section class="section-wrapper sponsor" id="patrocinadores">
	<div class="content">
		<div class="">
			<h2 class="title">Patrocinadores</h2>
		</div>
		<div class="sponsor-wrapper">
			<!-- GOLD SPONSORS -->
			<?php
				//We need to reset the posts loop
				wp_reset_postdata();
			    $args = array(
					'post_type' => 'patrocinadores',
					'posts_per_page' => -1,
					'order' => 'ASC',
					'meta_query' => array (
						array (
							'key' => 'categoria',
							'compare' => '=',
							'value' => 'gold'
						)
					)
				);
			    $wp_query = new WP_Query($args);
			?>
			<?php if (have_posts()): ?>
				<div class="sponsor-category gold">
					<span class="subtitle">Gold</span>
					<ul class="sponsor-list">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), "medium") ?>

							<li class="sponsor-list__item">
                <a class="sponsor-list__anchor" href="<?php the_field('url') ?>">
                  <div class="sponsor-list__thumb" style="background-image: url(<?php echo $imageLink[0]; ?>)" alt="<?php the_title(); ?>"></div>
									<img class="sponsor-list__thumb-img" src="<?php echo $imageLink[0]; ?>" alt="<?php the_title(); ?>"/>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
			<!-- END GOLD SPONSORS -->

			<!-- SILVER SPONSORS -->
			<?php
				//We need to reset the posts loop
				wp_reset_postdata();
			    $args = array(
					'post_type' => 'patrocinadores',
					'posts_per_page' => -1,
					'order' => 'ASC',
					'meta_query' => array (
						array (
							'key' => 'categoria',
							'compare' => '=',
							'value' => 'silver'
						)
					)
				);
			    $wp_query = new WP_Query($args);
			?>
			<?php if (have_posts()): ?>
				<div class="sponsor-category silver">
					<h3 class="subtitle">Silver</h3>
					<ul class="sponsor-list">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), "medium") ?>
              <li class="sponsor-list__item">
                <a class="sponsor-list__anchor" href="<?php the_field('url') ?>">
                <div class="sponsor-list__thumb" style="background-image: url(<?php echo $imageLink[0]; ?>)" alt="<?php the_title(); ?>"></div>
                  <img class="sponsor-list__thumb-img" src="<?php echo $imageLink[0]; ?>" alt="<?php the_title(); ?>"/>
                </a>
              </li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
			<!-- END SILVER SPONSORS -->

			<!-- BRONZE SPONSORS -->
			<?php
				//We need to reset the posts loop
				wp_reset_postdata();
			    $args = array(
					'post_type' => 'patrocinadores',
					'posts_per_page' => -1,
					'order' => 'ASC',
					'meta_query' => array (
						array (
							'key' => 'categoria',
							'compare' => '=',
							'value' => 'bronze'
						)
					)
				);
			    $wp_query = new WP_Query($args);
			?>
			<?php if (have_posts()): ?>
				<div class="sponsor-category bronze">
					<h3 class="subtitle">Bronze</h3>
					<ul class="sponsor-list">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), "medium") ?>
							<li class="sponsor-list__item">
                <a class="sponsor-list__anchor" href="<?php the_field('url') ?>">
                  <div class="sponsor-list__thumb" style="background-image: url(<?php echo $imageLink[0]; ?>)" alt="<?php the_title(); ?>"></div>
                  <img class="sponsor-list__thumb-img" src="<?php echo $imageLink[0]; ?>" alt="<?php the_title(); ?>"/>
                </a>
              </li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
			<!-- END BRONZE SPONSORS -->

			<!-- APOIO SPONSORS -->
			<?php
				//We need to reset the posts loop
				wp_reset_postdata();
			    $args = array(
					'post_type' => 'patrocinadores',
					'posts_per_page' => -1,
					'order' => 'ASC',
					'meta_query' => array (
						array (
							'key' => 'categoria',
							'compare' => '=',
							'value' => 'apoio'
						)
					)
				);
			    $wp_query = new WP_Query($args);
			?>
			<?php if (have_posts()): ?>
				<div class="sponsor-category support">
					<h3 class="subtitle">Apoio</h3>
					<ul class="sponsor-list">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), "medium") ?>
							<li class="sponsor-list__item">
                <a class="sponsor-list__anchor" href="<?php the_field('url') ?>">
                  <div class="sponsor-list__thumb" style="background-image: url(<?php echo $imageLink[0]; ?>)" alt="<?php the_title(); ?>"></div>
                  <img class="sponsor-list__thumb-img" src="<?php echo $imageLink[0]; ?>" alt="<?php the_title(); ?>"/>
                </a>
              </li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
			<!-- END APOIO SPONSORS -->
		</div>
	</div>
</section>
