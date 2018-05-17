<?php get_header(); ?>

<?php get_template_part('sections/navigations/nav-default'); ?>

<!-- SINGLE ARTICLE -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<main id="main" itemscope itemtype="http://schema.org/NewsArticle">
		<article <?php post_class() ?> id="article" data-article-id="<?php the_ID(); ?>" data-article-title="<?php the_title(); ?>" data-article-url="<?php the_permalink(); ?>">
			<div class="post-header">
				<div class="content">
					<div class="post-content-wrapper">
						<div class="header__meta-wrapper">
							
							<div class="header__meta-author">
								<div class="header__author-info">
									<h3 class="header__meta-name"><?php the_author_posts_link(); ?></h3>
									<time class="header__meta-time" datetime="<?php echo date(DATE_W3C); ?>" itemprop="datePublished"><?php the_date('d/m/Y') ?></time>
								</div>
								<div class="header__author-social">
									<figure class="author-container__thumb" itemprop="image">
										<?php echo get_avatar(get_the_author_meta('email'), 80); ?>
									</figure>
									<a class="header__post-icon sharer" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="external"></a>
									<a class="header__post-icon comment" href="#disqus"></a>
								</div>
							</div>
								
							<div class="header__meta-post">
								<h1 class="post-name" itemprop="headline"><?php the_title(); ?></h1>
								<div class="header__meta-category"><?php the_category(); ?></div>
								<p class="header__author-description"><?php echo the_author_meta('description'); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="post-thumb">
					<?php $imageLink = wp_get_attachment_image_src(get_post_thumbnail_id(), 'highlight-thumb'); ?>
					<div class="header__thumb" style="background-image: url(<?php echo $imageLink[0]; ?>)"></div>
				</div>
			</div>

			<div class="content">
				<div class="post-content-wrapper">
					<div class="post-entry">
						<?php the_content(); ?>
					</div>
					<footer class="row">
						<div class="tags-list-wrapper">
							<div class="tags-list__title">Tags</div>
							<?php the_tags('<ul class="tags-list"><li class="tags-list__item">', '</li><li class="tags-list__item">', '</li></ul>'); ?>
						</div>
						<ul class="post-share">
							<a href="#disqus" class="post-share__item comment"></a>
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="post-share__item sharer" target="_blank" rel="external"> </a>
							<?php /* ?><a href="https://twitter.com/share?via=BrazilJS&amp;text=<?php echo rawurlencode(get_the_title()); ?>&amp;url=<?php the_permalink(); ?>" class="post-share tweet" target="_blank" rel="external"></a><?php */ ?>
						</ul>
					</footer>
				</div>
			</div>
		</article>
	</main>

	<?php
		$postid = array(get_the_ID());
   	$query = new WP_Query(array(
	    'posts_per_page'   => 3,
	    'orderby' => 'rand',
	    'post__not_in' => $postid
    ));
	?>

	<!-- LEIA TAMBEM -->
	<section class="home-videos__wrapper read-more">
		<div class="content">
			<div class="row">
				<h2 class="title white" id="related-links">Leia também</h2>
			</div>
			<div class="row">

				<ul class="home-videos__item-list">
					<?php while ($query->have_posts()): $query->the_post(); ?>

						<?php
							$postThumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumb');
							if (empty($postThumb))  {
								$postThumb[0] = get_template_directory_uri().'/assets/img/thumb-generica-2.jpg';
							}
						?>

						<li class="home-videos__item">
							<a href="<?php the_permalink() ?>" class="media-wrapper media-wrapper--video" aria-hidden="true" role="presentation" tabindex="-1">
								<img class="media-wrapper__thumb card__thumb" src="<?php echo $postThumb[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" />
							</a>
							<p class="home-videos__info paragraph paragraph--color-2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
						</li>
			 		<?php endwhile; ?>
				</ul>

				<div class="center-elements">
					<a href="<?php bloginfo('url'); ?>/blog" class="anchor-link">Confira todos os artigos</a>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>

<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>