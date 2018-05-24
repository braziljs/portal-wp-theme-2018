<?php get_header(); ?>
<?php get_template_part('sections/navigations/nav-ontheroad'); ?>

<?php
$context = Timber::get_context();
$context['events'] = Timber::get_posts();

// echo '<pre>';
// print_r($context);
// echo '</pre>';
// die();
?>

<?php Timber::render('event.twig', $context); ?>

<?php get_template_part('sections/footer'); ?>
<?php get_footer(); ?>