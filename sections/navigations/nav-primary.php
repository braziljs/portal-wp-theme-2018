<!-- NAVIGATION -->
<style>
:root {
    --color-primary:#fff;
    --color-secondary:#fff;
    --transparent:rgba(0,0,0,0);
}

.login-container {
  color: #fff;
  position: fixed;
  left: 0;
  top: 0;
  z-index: 99999;
  text-align: right;
  width: 100%;
  padding: 2px 14px 8px 14px;
  background: rgba(0,0,0,.5);
}

.login {
  cursor: pointer;
  position: relative;
  z-index: 9;
}

.login-content {
    display: none;
    position: absolute;
    right: 0px;
    top: 16px;
    z-index: 9;
    width: 140px;
    background: #000;
    border: solid 1px #555;
    padding-right: 10px;
    margin-top: 10px;
}
.login-container.open .login-content {
  display: block;
}

.login-content button {
    display: block;
    background: transparent;
    border: none;
    color: #fff;
    margin: 10px 5px;
    text-align: right;
    width: 100%;
    font-size: 14px;
    font-family: "Roboto Mono",monospace;
    cursor: pointer;
    text-transform: capitalize;
}
.login-content button:hover {
  text-decoration: underline;
}

.login-layer {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  display: none;
}

.login-container.open .login-layer {
  display: block;
}

</style>

<div class="nav-braziljs" data-type="primary">
	<div class="content">
		<div class="nav-wrapper">
			<a href="<?php bloginfo('url'); ?>/" class="nav-logo">
				<?php get_template_part('sections/logo/logo-anim-vertical'); ?>
			</a>
			<div id="js-navigation-wrapper" class="nav-wrapper-list">
				<button id="js-navigation-toogler" class="default-button navigation-toogler" type="button" aria-label="Abrir o menu de navegação">
					<span class="navigation-toogler__text">menu</span><span class="navigation-toogler__burguer">&nbsp;</span>
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

        <div class="login-container">
          <div class="login-layer"></div>
          <div class="login">...</div>
          <div class="login-content"></div>
        </div>

        <script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>
        <script src="https://cdn.rawgit.com/NascHQ/nasc-auth/060ac198/index.js"></script>
        <script>
            const loginContent = document.querySelector('.login-content');

            window.Nasc.auth.onStatusChange(function (userData) {
              const target = document.querySelector('.login');
              document.querySelector('.login-container').classList.remove('open');
              if (userData) {
                target.innerHTML = userData.displayName.substring(0, 30);
                loginContent.appendChild(window.Nasc.auth.getButton('logout'))
              } else {
                target.innerHTML = 'Login'
                loginContent.appendChild(window.Nasc.auth.getButton('google'));
                loginContent.appendChild(window.Nasc.auth.getButton('twitter'));
                loginContent.appendChild(window.Nasc.auth.getButton('facebook'));
                loginContent.appendChild(window.Nasc.auth.getButton('github'));
              }
            });
            document.querySelector('.login').onclick = event => {
                const container = document.querySelector('.login-container');
                if (container.classList.contains('open')) {
                  container.classList.remove('open');
                } else {
                  container.classList.add('open');
                }

                // if (userData) {
                //   window.Nasc.auth.logout();
                // } else {
                //   window.Nasc.auth.login();
                // }
            };
            document.querySelector('.login-layer').onclick = event => {
              document.querySelector('.login-container').classList.remove('open');
            }
        </script>
			</div>
		</div>
	</div>
</div>
<!-- END NAVIGATION -->
