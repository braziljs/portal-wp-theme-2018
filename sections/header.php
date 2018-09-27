<!-- HOME HEADER -->
<?php
	function glitch($str, $auto=false) {
		if ($auto) {
			return '<span class="glitch" data-text="'.$str.'">'.$str.'</span>';
		} else {
			return '<span class="" data-text="'.$str.'" onmouseover="this.classList.toggle(\'glitch\')" onmouseout="this.classList.toggle(\'glitch\')">'.$str.'</span>';
		}
	}
?>
<header class="header-container" data-id="glitch">
	<div class="content">
		<div class="header-wrapper">
			<div class="header-bg"></div>
			<div class="row">
				<div class="header__tp">
					<h2 class="header__title">
						<?php echo glitch('A') ?>
						<?php echo glitch('BrazilJS', true) ?>
						<?php echo glitch('é') ?>
						<?php echo glitch('mais') ?>
						<?php echo glitch('do') ?>
						<?php echo glitch('que') ?>
						<?php echo glitch('apenas') ?>
						<?php echo glitch('uma') ?>
						<?php echo glitch('conferência') ?>


						<!--<?php echo glitch('A') ?>
						<?php echo glitch('BrazilJS', true) ?>
						<?php echo glitch('não') ?>
						<?php echo glitch('é') ?>
						<?php echo glitch('apenas') ?>
						<?php echo glitch('uma') ?>
						<?php echo glitch('conferência') ?>-->
					</h2>

					<div class="paragraph">
						<div class="diagonal-ballon">
							<span>Levamos conteúdo de qualidade para toda a comunidade.</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="header__li">
          <a href="<?php bloginfo('url'); ?>/sobre" class="anchor-button home-about" data-color="yellow">Sobre a BrazilJS</a>
          <div class="paragraph anch-articles">
            <a href="#latest-news-anchor" class="" data-scroll-header title="Explore os artigos disponíveis no Portal BrazilJS">Confira os <br> últimos artigos</a>
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
<!-- END HOME HEADER -->
