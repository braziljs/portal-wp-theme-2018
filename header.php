<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<link rel="dns-prefetch" href="//www.google-analytics.com">
	
	<!-- FONT'S -->
	<link href='https://fonts.gstatic.com' rel='preconnect' crossorigin>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400i,700,900i%7CLora:400,400i,700i' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Anton|Roboto+Mono:100,300,400,500,700" rel="stylesheet">

	<link rel="stylesheet" href="<?php asset_path('css/main.css') ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">

	<link rel="search" type="application/opensearchdescription+xml" title="BrazilJS.org" href="/wp-content/themes/braziljs-portal-theme/assets/media/omnisearch.xml" >

	<?php if (is_home()) { ?>
		<meta property="og:image" content="<?php asset_path('img/social-networks/braziljs.jpg') ?>" />
	<?php } ?>

	<?php wp_head(); ?>

</head>

<body id="js-body" class="body">

<script>
	window.THEME_PATH = "<?php echo get_template_directory_uri() ?>"
</script>
<script>
	(function (){
		var finalDate = new Date("2018/07/20"); // will only show the video for first viewers up to that date
		var today = new Date();
		if (today > finalDate) {
			return
		}
		// d.setMonth(d.getMonth() - 1);

		var hasSeen = localStorage.getItem('hasSeenVideo')
		if (!hasSeen) {
			document.body.dataset.vine = 1
			document.write(`
			<div
				id="brjs-opening-video"
				class="brjs-opening-video">
				<div class="video-loading-message">A BrazilJS tem uma surpresa<br/>preparada para você!</div>
				<video id="main-reborn-vine" muted>
					<source src="${window.THEME_PATH}/assets/media/braziljs-new-logo-2018.mp4" type="video/mp4">
				</video>
			</div>`)

			function brjsReborn () {
				var $ = window.$ || window.JQuery
				var vdContainer = $('#brjs-opening-video')
				if (vdContainer) {

					var vd = vdContainer.find('video')[0]

					if (!vd) {
						return
					}

					var allowedVideoToPlay = 0
					function canPlayVideo () {
						allowedVideoToPlay++

						if (allowedVideoToPlay >1) {
							// both animation and buffer have ended
							vd.style.visibility = 'visible'
							vd.play()
						}
					}
					function closeVideo () {
						vdContainer.fadeOut('slow');
						window.scrollTo(0,0)
						document.body.dataset.vine = 0
						localStorage.setItem('hasSeenVideo', 1)
					}
					
					vd.oncanplaythrough = function () {
						// video has buffered enought
						canPlayVideo()
					}
					vd.onended = function () {
						// video has finished
						closeVideo()
					}
					setTimeout(function () {
						canPlayVideo()
					}, 4000);

					vdContainer.css({ /* width: $(window).innerWidth() + 'px',*/ height: $(window).innerHeight() + 'px' });
					$(window).resize(function(){
						vdContainer.css({ /* width: $(window).innerWidth() + 'px',*/ height: $(window).innerHeight() + 'px' });
					});
				}
			}
			brjsReborn()
		}
	})()
</script>
