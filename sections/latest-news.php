<section style="position: relative;">
	<div class="center-elements--mobile">
		<h2 class="title">Últimos artigos</h2>
	</div>
	
	<?php
	  //We dont't want the tag "weekly" to appear in the list
		$tag = get_term_by('name', 'weekly', 'post_tag');
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 7,
			'order' => 'DESC',
			'tag__not_in' => $tag->term_id
		);
	  $wp_query = new WP_Query($args);
	?>

	<?php /* ?>
	<div>
		<div>
			<div>
				<div id="latest-news-vine" data-embed="<?php the_field('playlist_highlight_url', 'option'); ?>"></div>
				<!-- <iframe width="420" height="315" src="<?php the_field('playlist_highlight_url', 'option'); ?>"></iframe> -->
				<a href="<?php the_field('playlist_highlight_url', 'option'); ?>">
					<img src="<?php echo $postImageThumb; ?>" alt="<?php echo $postImageAlt; ?>" />
				</a>
			</div>
			<div>
				<h3>
					<a href="<?php the_field('playlist_highlight_url', 'option'); ?>">
						<?php the_field('playlist_highlight_titulo', 'option'); ?>
					</a>
				</h3>
				<p class="paragraph paragraph--color-2">
					<?php the_field('playlist_highlight_descrição_do_video', 'option'); ?>
				</p>
			</div>
		</div>
	</div>
	<?php */ ?>

	<?php
		//Video Highlight info
		$postImage = get_field('playlist_highlight_thumb', 'option');
		$postImageAlt = $postImage[alt];
		$postImageThumb = $postImage[sizes]['highlight-thumb'];
	?>


	<div class="highlight">
		<div class="highlight__thumb-container col-7-12">
			<div class="highlight__thumb-background" style="background-image: url(<?php echo $postImageThumb; ?>)"></div>

			<div class="highlight__info">
				<button class="highlight_button-play"></button>
				<h3 class="highlight__title">
					<?php the_field('playlist_highlight_titulo', 'option'); ?>
				</h3>
				<p class="paragraph paragraph--color-2"><?php the_field('playlist_highlight_descrição_do_video', 'option'); ?></p>
			</div>

		</div>
	</div>

	<ul class="row card-wrapper article-list">
		<?php while (have_posts()) : the_post(); ?>
	
			<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), 'highlight-thumb'); ?>

			<li class="col-6-12 article-list__item">
				<div class="card">
					<div class="article-img" style="background-image: url(<?php echo $imageLink[0]; ?>)"></div>
					<div class="after-shadow"></div>
				</div>
				<div class="article__title">
					<h3 class="card__title">
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</h3>
				</div>
			</li>

		<?php endwhile; ?>
	</ul>

	<div class="center-elements row">
		<a href="<?php bloginfo('url'); ?>/blog" class="anchor-button">Confira todos os artigos</a>
	</div>
</section>