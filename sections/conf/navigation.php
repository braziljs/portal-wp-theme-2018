<!-- NAVIGATION CONF -->
<style>
:root {
    --color-primary:#fff;
    --color-secondary:#ff0;
    --transparent:rgba(0,0,0,0);
}
</style>


<div class="nav-braziljs nav-conf">
	<div class="content">
		<div class="nav-wrapper">
			<a href="<?php bloginfo('url'); ?>/" class="nav-logo">
				<?php get_template_part('sections/logo/logo-anim-vertical'); ?>
			</a>
			<div class="nav-wp">
				<div id="js-navigation-wrapper" class="nav-wrapper-list">
					<button id="js-navigation-toogler" class="default-button navigation-toogler" type="button" aria-label="Abrir o menu de navegação">
						<span class="navigation-toogler__text"></span><span class="navigation-toogler__burguer">&nbsp;</span>
					</button>
					<nav id="js-navigation" class="navigation-list" role="navigation">
						<?php
							$args = array(
								'menu' => 'menu',
								'container' => false,
								'menu_class' => 'navigation-item',
								'menu_id' => 'js-navigation-list'
							);
							wp_nav_menu($args);
						?>
					</nav>
				</div>
				<div class="ingresse-widget" data-btntext="Comprar Ingressos" data-btnbgcolor="#ffc819" data-btntextcolor="#222" data-eventid="23468"></div>
			</div>
		</div>
	</div>
</div>
<!-- END NAVIGATION CONF -->


