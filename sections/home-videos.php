<!-- HOME VIDEOS -->
<section>
	<?php /* ?>
	<div class="section-wrapper--type-2">
		<div class="content">
			<div class="center-elements"><h2 class="title title--type-2 title--color-2">Vídeos</h2></div>
			<?php
				//Video Highlight info
				$postImage = get_field('playlist_highlight_thumb', 'option');
				$postImageAlt = $postImage[alt];
				$postImageThumb = $postImage[sizes]['highlight-thumb'];

			?>
			<div class="row">
				<div class="highlight highlight--type-2">
					<div class="highlight__thumb-container col-8-12">
						<a href="<?php the_field('playlist_highlight_url', 'option'); ?>" class="media-wrapper media-wrapper--video media-wrapper--video-large" aria-hidden="true" role="presentation" tabindex="-1">
							<img class="media-wrapper__thumb" src="<?php echo $postImageThumb; ?>" alt="<?php echo $postImageAlt; ?>" />
						</a>
					</div>
					<div class="highlight__info col-3-12">
						<h3 class="highlight__title highlight__title--color-2"><a href="<?php the_field('playlist_highlight_url', 'option'); ?>"><?php the_field('playlist_highlight_titulo', 'option'); ?></a></h3>
						<p class="paragraph paragraph--color-2"><?php the_field('playlist_highlight_descrição_do_video', 'option'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php */ ?>

	<div class="home-videos__wrapper">
		<div class="content">
			<div class="row">
				<h3 class="title white" id="playlists">Vídeos</h3>
				<?php $playlists = get_field('playlist', 'option'); ?>
				<ul class="home-videos__item-list" aria-labelledby="playlists">
					
					<?php while(have_rows('playlist', 'option')): the_row(); ?>
						<?php $playlistThumb = get_sub_field('thumb'); ?>
						
						<li class="home-videos__item">
							<a href="<?php the_sub_field('url'); ?>" class="media-wrapper media-wrapper--video">
								<button class="highlight_button-play"></button>
								<img class="media-wrapper__thumb card__thumb" src="<?php echo $playlistThumb[sizes]['post-thumb']; ?>" alt="<?php echo $playlistThumb[alt]; ?>" />
							</a>
							<p class="home-videos__info paragraph paragraph--color-2">
								<?php the_sub_field('nome'); ?>
							</p>
						</li>

		    	<?php endwhile; ?>
				</ul>
				<?php /* ?>
				<div class="center-elements">
					<a href="https://www.youtube.com/channel/UCnLdHOuue5i1O7TsH6oh07w" class="anchor-button anchor-button--color-2">Confira o nosso canal do Youtube</a>
				</div>
				<?php */ ?>
			</div>
		</div>
	</div>

</section>
<!-- END HOME VIDEOS -->