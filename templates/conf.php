<?php

/*
Template Name: Conf
*/

?>
<?php get_header(); ?>

<div class="full-wrapper">
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
							<span class="title__primary">The biggest<br/>freaking</span><br/>
							<span class="title__main">javascript<br>       conference<br></span><br/>
							<span class="title__secondary">of the universe</span>
						</h2>
					</div>
				</div>

				<div class="row">
					<div class="header__li">
						<!-- <a href="<?php bloginfo('url'); ?>/sobre" class="anchor-button anchor-button--color-5" style="visibility: hidden;">Sobre a BrazilJS</a> -->
						<div class="header__date_venue">
							<a href="https://www.google.com/maps/place/Barra+Shopping+Sul/@-30.0843929,-51.2475847,17z/data=!3m1!4b1!4m5!3m4!1s0x951978a0f03108f3:0x6d93ede7b30eb35f!8m2!3d-30.0843929!4d-51.245396"
								class="paragraph"
								target="braziljs_map"
								title="24 e 25 de AGOSTO">24 e 25 de agosto<br/>Porto Alegre RS<br/>Barra Shopping Sul</a>
						</div>
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
					<div  style="display: block;" class="ingresse-widget" data-btntext="Comprar Ingressos" data-btnbgcolor="#ffc819" data-btntextcolor="#222" data-eventid="23468"></div>
					<a class="anchor-button" href="#hoteis">Buscar hotéis</a>
				</div>
			</div>
		</div>
	</section>
	<!-- END * SECTION BUY -->

	<!-- MAIN -->
	<div id="js-conf-page" class="conf-wrapper brjs-conf-theme">
    <?php //get_template_part('sections/conf/speakers-list'); ?>

    <?php
      $speakers = json_decode(file_get_contents(get_template_directory().'/templates/speakers-list.json'), true);

      $picStyle = 1;
    ?>

		<!-- SPEAKERS LIST -->
		<section class="section-wrapper">
			<div class="content" id="palestrantes">
				<h2 class="title" id="speakers-title">Speakers</h2>

				<div class="speakers-grid__wrapper">
					<ul class="speakers-grid__list" aria-labelledby="speakers-title">

            <?php
              foreach ($speakers as $speaker) {
                if (!$speaker['name']) {
                  continue;
                }
                ?>
                  <li class="speakers-list__item effect-<?php echo ($picStyle % 3 === 1) ? 'dash-yellow' : (($picStyle % 3 === 2) ? 'border' : 'dash-black'); $picStyle++; ?>">
                      <div class="speakers-card">
                        <div class="speakers-card__header">
                          <div
                            class="speakers-card__thumb"
                            style="background-image: url(<?php asset_path("img/conf/2018/" . $speaker['pic']); ?>);
                                   <?php
                                    if ($speaker['faceAt']) {
                                      echo 'transform-origin: '.$speaker['faceAt'] .';';
                                      echo 'background-position: '.$speaker['faceAt'] .';';
                                    }
                                   ?>"
                          ></div>
                        </div>
                        <div class="speakers-card__content">
                          <h3 class="speakers-card__title"><?php echo $speaker['name'] ?></h3>
                          <p class="speakers-card__paragraph"><?php echo $speaker['bio'] ?></p>
                        </div>
                      </div>
                    </li>
                <?php
              }
            ?>

					</ul>
				</div>
			</div>
		</section>
		<!-- END * SPEAKERS LIST -->

			<?php /*<section class="section-wrapper">
			  <div class="content">
			  	<div class="speakers">
				    <div class="speaker-list-content">
				    	<div class="pt01">
					    	<a href="">Andreia Carvalho</a> <b>/</b>
					    	<a href="">Amanda Santos</a> <b>/</b>
					    	<a href="">Nathalia Alves</a> <b>/</b>
					    	<a href="">Otavio Avila</a>
					    	<br>
					    	<br>
					      <a href="">Sandro Peres</a> <b>/</b>
					      <a href="">Cristiano Fernandes</a> <b>/</b>
					      <a href="">Fernanda Shaun</a> <b>/</b>
					      <a href="">Thais Oliveira</a>
				    	</div>
				    	<br>
				    	<div class="pt02">
								<a href="">Andrei Carvalho</a> <b>/</b>
								<a href="">Amanda Santos</a> <b>/</b>
								<a href="">Nathalia Alves</a> <b>/</b>
								<a href="">Otavio Avila</a> <b>/</b>
								<a href="">Sandro Peres</a> <b>/</b>
								<a href="">Cristiano Fernandes</a>
								<br>
								<br>
								<a href="">Fernanda Shaun</a> <b>/</b>
								<a href="">Thais Oliveira</a> <b>/</b>
								<a href="">Andreia Carvalho</a> <b>/</b>
								<a href="">Amanda Santos</a> <b>/</b>
								<a href="">Andrigo Tostoiesq</a> <b>/</b>
								<a href="">Laurindo Evetes</a>
				    	</div>
				    </div>
					</div>
			  </div>
			</section> */ ?>

		<?php get_template_part('sections/conf/hotels'); ?>
		<?php get_template_part('sections/sponsors'); ?>
	</div>
	<!-- END * MAIN -->
	<?php get_template_part('sections/footer'); ?>
	<?php get_footer(); ?>
</div>
