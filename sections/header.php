<!-- HOME HEADER -->
<header class="header-container">
	<div class="content">
		
		<h1 class="header__logo">
			<img src="<?php asset_path('img/logos/brjs-logo-vertical-72.png') ?>" alt="BrazilJS" />
		</h1>
		
		<div class="header-wrapper">
			<div class="row">
				<div class="header__tp">
					<h2 class="header__title">A BrazilJS é mais do que apenas uma conferência.</h2>
					<p class="paragraph">Levamos conteúdo de qualidade para toda a comunidade.</p>
				</div>
			</div>
			
			<div class="row">
				<div class="header__li">
					<a href="<?php bloginfo('url'); ?>/sobre" class="anchor-button anchor-button--color-5">Sobre a BrazilJS</a>
					<a href="<?php bloginfo('url'); ?>/blog" class="paragraph" title="Explore os artigos disponíveis no Portal BrazilJS">Confira os úlitmos artigos</a>
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
<!-- END HOME HEADER -->