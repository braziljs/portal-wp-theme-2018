<!-- HOME PRODUCTS -->
<div class="product__wrapper">
	<div class="products__title">
		<h2>Nossas iniciativas</h2>
	</div>

	<div class="product">
		
		<div class="products-highlight__wrapper">
			<h3 class="products__name">Eventos</h3>
			
			<div class="products-highlight__info">
				<div class="products-highlight">
					<div class="products-highlight__item">
						<strong class="products-highlight__value">2.000</strong>
						<span class="products-highlight__key">Participantes em 2017</span>
					</div>
					<div class="products-highlight__item">
						<strong class="products-highlight__value">10</strong>
						<span class="products-highlight__key">Eventos parceiros</span>
					</div>
				</div>

				<div class="products-paragraph">
					<p class="paragraph paragraph--color-1">
						Organizamos e fazemos a curadoria de uma série de eventos em todo brasil. Desde que a primeira braziljs conf aconteceu, em 2011,
						mais de 50 eventos relacionados surgiram e acontecem todo ano no brasil. Isso mostra o poder e engajamento de toda comunidade brasileira.
					</p>
				</div>
			</div>
		</div>

		<div class="products-highlight__picture">
			<div class="products__thumb">
				<div class="products__thumb-pic"></div>
			</div>
		</div>
	</div>

	<div class="products-links__wrapper">
		<ul class="products-links__list">
			<li class="products-links__item">
				<a href="<?php bloginfo('url'); ?>/conf/" class="anchor-link">Acesse o site da BrazilJS Conf</a>
			</li>
			<li class="products-links__item">
				<a href="<?php bloginfo('url'); ?>/eventos-parceiros/" class="anchor-link">Conheça nossos eventos parceiros</a>
			</li>
		</ul>
	</div>

	<hr class="hr double-line">

	<div class="products-list__type-2">
		
		<div class="product">

			<div class="products-highlight__wrapper">
				<h3 class="products__name">Conteúdo</h3>

				<div class="products-highlight__info">
					<div class="products-highlight">
						<div class="products-highlight__item">
							<strong class="products-highlight__value"><?php $count_posts = wp_count_posts(); echo $count_posts->publish; ?></strong>
							<span class="products-highlight__key">Artigos publicados</span>
						</div>
						<div class="products-highlight__item">
							<strong class="products-highlight__value">6K+</strong>
							<span class="products-highlight__key">Inscritos no Youtube</span>
						</div>
					</div>
					<div class="products-paragraph">
						<p class="paragraph paragraph--color-1">
							Levams conteúdo de qualidade para toda a comunidade. através da braziljs weekly, artigos no portal, vídeos no youtube,
							screencast, cursos e etc.
						</p>
						<div class="products-links__wrapper">
							<ul class="products-links__list">
								<li class="products-links__item">
									<a href="<?php bloginfo('url'); ?>/blog/" class="anchor-link">Nossos artigos</a>
								</li>
								<li class="products-links__item">
									<a href="https://www.youtube.com/channel/UCnLdHOuue5i1O7TsH6oh07w" class="anchor-link">Canal do Youtube</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="product">

			<div class="products-highlight__wrapper">
				<h3 class="products__name">Comunidade e open-source</h3>

				<div class="products-highlight__info">
					<div class="products-highlight">
						<div class="products-highlight__item">
							<strong class="products-highlight__value">10K+</strong>
							<span class="products-highlight__key">Inscritos na weekly</span>
						</div>
						<div class="products-highlight__item">
							<strong class="products-highlight__value">1.5K</strong>
							<span class="products-highlight__key">Registrados no Slack</span>
						</div>
					</div>
					<div class="products-paragraph">
						<p class="paragraph paragraph--color-1">
							Sem comunidade, não existe a braziljs. Amamos e acreditamos no open-source, por isso, sempre que possível, desenvolvemos
							projetos que possam ajudar outros desenvolvedores.
						</p>
						<div class="products-links__wrapper">
							<ul class="products-links__list">
								<li class="products-links__item">
									<a href="https://now-examples-slackin-vvjogtwzcf.now.sh/" class="anchor-link">Canal no Slack</a>
								</li>
								<li class="products-links__item">
									<a href="http://braziljs.us5.list-manage.com/subscribe/post?u=77b6594f10bba05dcc722c80e&id=e6beed4270" class="anchor-link">Assine a Weekly</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- END HOME PRODUCTS -->