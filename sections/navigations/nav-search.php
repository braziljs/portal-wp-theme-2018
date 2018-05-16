<!-- NAVIGATION ARTICLES -->
<div class="nav-braziljs" data-type="search">
	<div class="content">
		<div class="row">
			<img class="header__logo" src="<?php asset_path('img/logos/braziljs-horizontal.svg') ?>" alt="BrazilJS" />
			<div id="js-navigation-wrapper" class="navigation-wrapper flow-opposite">
				<button id="js-navigation-toogler" class="default-button navigation-toogler" type="button" aria-label="Abrir o menu de navegação">
					<span class="navigation-toogler__text">menu</span><span class="navigation-toogler__burguer">&nbsp;</span>
				</button>
				<nav id="js-navigation" class="navigation" role="navigation">
					<?php
						$args = array(
							'menu' => 'menu',
							'container' => false,
							'menu_class' => 'navigation-list',
							'menu_id' => 'js-navigation-list'
						);
						wp_nav_menu($args);
					?>
				</nav>
			</div>
		</div>
		<div class="row">
			<form class="search-form" role="search" action="<?php echo home_url( '/' ); ?>" method="get">
				<!-- <label class="visuallyhidden" for="s">digite sua busca</label> -->
				<input class="search-form__search" id="s" type="search" name="s" placeholder="digite sua busca" required />
				<input type="submit" value="buscar" class="anchor-button" />
			</form>
		</div>	
	</div>
</div>
<!-- END NAVIGATION ARTICLES -->