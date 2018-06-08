<section class="featured-wrapper_home latest-news" id='latest-news-anchor'>
	<div class="center-elements--mobile">
		<h2 class="title">Últimos artigos</h2>
	</div>
	
	<?php
	  //We dont't want the tag "weekly" to appear in the list
		$tag = get_term_by('name', 'weekly', 'post_tag');
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 4,
			'order' => 'DESC',
			'tag__not_in' => $tag->term_id
		);
	  $wp_query = new WP_Query($args);
	?>

	<?php
		//Video Highlight info
		$postImage = get_field('playlist_highlight_thumb', 'option');
		$postImageAlt = $postImage[alt];
		$postImageThumb = $postImage[sizes]['highlight-thumb'];
	?>


	<div class="highlight" id="latest-news-vine" data-embed="<?php the_field('playlist_highlight_url', 'option'); ?>">
		<div class="highlight__thumb-container col-7-12">
			<div class="highlight__thumb-background" style="background-image: url(<?php echo $postImageThumb; ?>)"></div>

			<div class="highlight__info">
				<button class="highlight_button-play"></button>
				<h3 class="highlight__title">
					<?php the_field('playlist_highlight_titulo', 'option'); ?>
				</h3>
				<p class="paragraph size-14 paragraph--color-2">
					<?php the_field('playlist_highlight_descrição_do_video', 'option'); ?>
				</p>
			</div>

		</div>
	</div>

	<ul class="row card-wrapper article-list">
		<?php
			$articleCounter = 0
		?>

		<?php while (have_posts()) : the_post(); ?>
	
		<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), 'highlight-thumb'); ?>

		<li class="col-6-12 article-list__item">
			<a href="<?php the_permalink() ?>" class="card">
				<div class="article-img" style="background-image: url(<?php echo $imageLink[0]; ?>)"></div>
			</a>
			<div class="article__title">
				<h3 class="card__title">
					<a href="<?php the_permalink() ?>">
						<?php
							$articleCounter++;
							$titleLimit = 40;
							$theTitle = get_the_title();

							if ($articleCounter == 1) {
								echo substr($theTitle, 0, 80 - 3) . '...';
							} else if ($articleCounter > 2 && strlen($theTitle) > $titleLimit) {
								echo substr($theTitle, 0, $titleLimit - 3) . '...';
							} else {
								echo $theTitle;
							}
						?>
					</a>
				</h3>
			</div>
		</li>
		<?php endwhile; ?>
	</ul>

	<div class="row" style="margin-bottom: 64px;">
		<a href="<?php bloginfo('url'); ?>/blog" class="anchor-link">Ver a lista completa</a>
	</div>
</section>