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

	<?php /* ?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
	<?php */ ?>

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">

	<link rel="search" type="application/opensearchdescription+xml" title="BrazilJS.org" href="/wp-content/themes/braziljs-portal-theme/assets/media/omnisearch.xml" >

	<?php if (is_home()) { ?>
		<meta property="og:image" content="<?php asset_path('img/thumb-generica-portal.png') ?>" />
	<?php } ?>

	<?php wp_head(); ?>

</head>

<body id="js-body" class="body">

<script>
	window.THEME_PATH = "<?php echo get_template_directory_uri() ?>"
</script>
