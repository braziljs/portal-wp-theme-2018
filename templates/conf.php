<?php

/*
Template Name: Conf
*/

?>
<?php get_header(); ?>
<?php get_template_part('sections/conf/navigation'); ?>

<!-- CONF HEADER -->
<header class="header-container l-page" data-id="glitch">
	<!-- HEADER ANIMATION -->
	<!-- <div id="particles-js"></div> -->
	<div id="header-animation"></div>
	<!-- Using Threejs & Jerome Etienne's Threex -->
	<script src='https://jeromeetienne.github.io/threex.terrain/examples/vendor/three.js/build/three-min.js'></script>
	<script src='https://jeromeetienne.github.io/threex.terrain/examples/vendor/three.js/examples/js/SimplexNoise.js'></script>
	<script src='https://jeromeetienne.github.io/threex.terrain/threex.terrain.js'></script>


	<!-- /HEADER ANIMATION -->
	<div class="content">
		<div class="header-wrapper">
			<div class="row">
				<div class="header__tp">
					<h2 class="header__title yellow">
						<span>The biggest<br/>freaking</span><br/>
						<span class="title__main">javascript<br>       conference<br></span><br/>
						<span class="title__secondary">in the world</span>
					</h2>
				</div>
			</div>
			
			<div class="row">
				<div class="header__li">
					<a href="<?php bloginfo('url'); ?>/sobre" class="anchor-button anchor-button--color-5" style="visibility: hidden;">Sobre a BrazilJS</a>
					<a href="javascript:void(0)" class="paragraph" title="24 e 25 de AGOSTO">24 e 25 de agosto porto alegre rs barra shopping sul</a>
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
				<div class="ingresse-widget" data-btntext="Comprar Ingressos" data-btnbgcolor="#ffc819" data-btntextcolor="#222" data-eventid="23468"></div>
				<a class="anchor-button" href="https://docs.google.com/forms/d/e/1FAIpQLScvM9sctUCe2vjbUxv3QzhRimn5ztB7JyPgbnpTDksS3eTpQw/viewform">call 4 papers</a>
			</div>
		</div>
	</div>
</section>
<!-- END * SECTION BUY -->

<!-- MAIN -->
<main id="js-conf-page" class="conf-wrapper brjs-conf-theme">
	<?php //get_template_part('sections/conf/speakers-list'); ?>
	
	<!-- SPEAKERS LIST -->
	<section class="section-wrapper">
		<div class="content">
			<h2 class="title" id="speakers-title">Keynotes</h2>

			<div class="speakers-grid__wrapper">
				<ul class="speakers-grid__list" aria-labelledby="speakers-title">
					
					<li class="speakers-list__item">
						<div class="speakers-card">
							<div class="speakers-card__header">
								<div class="speakers-card__thumb" style="background-image: url(<?php asset_path("img/conf/2018/ada-rose-cannon.jpeg"); ?>)"></div>
							</div>
							<div class="speakers-card__content">
								<h3 class="speakers-card__title">Ada Rose Cannon</h3>
								<p class="speakers-card__paragraph">Developer Advocate da Samsung para o navegador <a href="https://twitter.com/SamsungInternet">@SamsungInternet</a>. Web fangirl. Geralmente em Londres. WebXR Device API, Web Components, PWA.</p>
							</div>
						</div>
					</li>

					<li class="speakers-list__item">
						<div class="speakers-card">
							<div class="speakers-card__header">
								<div class="speakers-card__thumb" style="background-image: url(<?php asset_path("img/conf/2018/kyle-simpson.jpeg"); ?>)"></div>
							</div>
							<div class="speakers-card__content">
								<h3 class="speakers-card__title">Kyle Simpson</h3>
								<p class="speakers-card__paragraph">É um escritor, palestrante, professor, e contribuidor em projeto open-source. Evangelista da open web, apaixonado por todas as coisas relacionadas ao javascript.</p>
							</div>
						</div>
					</li>

					<li class="speakers-list__item">
						<div class="speakers-card">
							<div class="speakers-card__header">
								<div class="speakers-card__thumb" style="background-image: url(<?php asset_path("img/conf/2018/feross-aboukhadijeh.jpg"); ?>)"></div>
							</div>
							<div class="speakers-card__content">
								<h3 class="speakers-card__title">Feross Aboukhadijeh</h3>
								<p class="speakers-card__paragraph">Programador, designer, professor e cientista louco. Atualmente, construindo o <a href="https://webtorrent.io/">WebTorrent</a>, um cliente de streaming BitTorrent para o navegador, alimentado pela WebRTC. Antes disso, construiu o <a href="https://web.archive.org/web/20150810065820/https://peercdn.com/">PeerCDN</a>, uma rede de entrega de conteúdo peer-to-peer para tornar os sites mais rápidos e mais baratos.</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- END * SPEAKERS LIST -->

	<?php get_template_part('sections/conf/hotels'); ?>
</main>
<!-- END * MAIN -->

<?php //get_template_part('sections/sponsors'); ?>
<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>