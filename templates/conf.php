
<?php
/*
Template Name: Conf
*/
?>

<?php get_header(); ?>
<?php get_template_part('sections/navigation'); ?>

<!-- HOME HEADER -->
<header class="header-container l-page" data-id="glitch">
	<div class="content">
		
		<h1 class="header__logo">
			<img src="<?php asset_path('img/logos/brjs-logo-vertical-72.png') ?>" alt="BrazilJS" />
		</h1>
		
		<div class="header-wrapper">
			<div class="row">
				<div class="header__tp">
					<h2 class="header__title yellow">The biggest fucking javascript event in the world</h2>
				</div>
			</div>
			
			<div class="row">
				<div class="header__li">
					<a href="<?php bloginfo('url'); ?>/sobre" class="anchor-button anchor-button--color-5" style="visibility: hidden;">Sobre a BrazilJS</a>
					<a href="<?php bloginfo('url'); ?>/blog" class="paragraph" title="Explore os artigos disponíveis no Portal BrazilJS">24 e 24 de agosto porto alegre rs barra shopping sul</a>
				</div>
			</div>
		</div>
		
		<?php $headerWarning = get_field('header_habilitar_aviso', 'option'); ?>
		<?php if($headerWarning): ?>
			<?php
				$headerTitle = get_field('header_titulo', 'option');
				$headerDescription = get_field('header_descrição', 'option');
				$headerLink = get_field('header_link', 'option');
				$headerLinkText = get_field('header_valor-link', 'option');
			?>
		<?php endif; ?>
	</div>
</header>
<!-- END * HOME HEADER -->


<!-- SECTION BUY -->
<section class="content">
	<div class="conf-wp-buy">
		<div class="conf__description">
			<p>Venha fazer parte da braziljs conf, uma experiência única e verdadeira em eventos</p>
		</div>
		
		<div class="background-divisor"></div>
		
		<div class="conf__call-and-buy">
			<div class="desc">
				<p class="paragraph">Levamos conteúdo de qualidade para toda a comunidade, por meio da braziljs weekly, artigos, vídeos, screencast, cursos e muito mais.</p>
			</div>
			<div class="conf__buttons">
				<a href="" class="anchor-button">comprar ingresso</a>
				<a href="" class="anchor-button">call 4 papers</a>
			</div>
		</div>
	</div>
</section>
<!-- END * SECTION BUY -->

<!-- MAIN -->
<main id="js-conf-page" class="conf-wrapper">
	<?php get_template_part('sections/conf/speakers-list'); ?>
	<?php get_template_part('sections/conf/hotels'); ?>
</main>
<!-- END * MAIN -->

<?php get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>