<!-- HOME VIDEOS -->
<section>

	<div class="home-videos__wrapper">
		<div class="content">
			<div class="row">
				<h3 class="home-videos__title white" id="playlists">Vídeos</h3>
				<div class="home-videos__subscribe">
					<a href="https://www.youtube.com/channel/UCnLdHOuue5i1O7TsH6oh07w" target="__blank" class="subscribe__link">
						SE INSCREVA NO NOSSO CANAL DO YOUTUBE
					</a>
				</div>
			</div>
			<div class="row">
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
			</div>
		</div>
	</div>

</section>
<!-- END HOME VIDEOS -->