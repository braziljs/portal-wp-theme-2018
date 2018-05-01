<div class="content">
	<div class="powered">
		<span class="powered__title">BrazilJS é uma iniciativa <a href="https://nasc.io/?utm_source=braziljs" target="__blank"><strong>NASC</strong></a></span>
		<ul class="powered_link">
			<li class="p__link"><a href="https://asgabe.github.io//?utm_source=braziljs" target="__blank" title="Made by gabe">gabe</a></li>
			<li class="p__link"><a href="https://nasc.io/?utm_source=braziljs" target="__blank" title="Powered by Nasc">nasc</a></li>
			<li class="p__link"><a href="http://www.dex01.com/?utm_source=braziljs" target="__blank" title="Design by Dex01"><img src="<?php asset_path('img/logos/dex01.svg') ?>" /><span class="visuallyhidden">Designer by Dex01</span></a></li>
		</ul>
	</div>
</div>
<?php wp_footer(); ?>

<?php  if (getEnvironment() === 'dev') { ?>
	<script src="<?php echo get_template_directory_uri(); ?>/dev/js/lib/require.js" data-main="<?php echo get_template_directory_uri(); ?>/dev/js/main"></script>
<?php } else { ?>
  	<script src="<?php asset_path('js/main.js') ?>"></script>
<?php } ?>

<?php
	// Load Google Analytics Script
	if (getEnvironment() === 'assets') { ?>
	<script>

	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-32119524-1','auto');ga('send','pageview');

	</script>

	<!-- Scup -->
	<script>
		// Use the variables below to include the name and email address of the user who is currently logged in.
		window.scupSettings = {
		channelAccount:"LVC_1ca83170-0aa0-11e8-ba14-c1ce6c5c20e6",
		userName: "",
		userEmail: ""
		}
		</script>
	<script>!function(t){var e=t.createElement("script");e.src="https://api-live-chat.care.scup.com/widget",t.body.appendChild(e)}(document);</script>
  	<!-- /Scup -->


<?php } ?>
</body>

</html>
