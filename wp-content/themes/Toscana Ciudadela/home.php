<?php get_header(); ?>

<!-- banner -->
<?php get_template_part('partials/banner'); ?>
<?php wp_reset_postdata(); ?>
<!-- form -->
<?php get_template_part('partials/contact-banner'); ?>

<!-- about -->
<?php if ( have_posts() ) : the_post(); ?>
<?php get_template_part('partials/about'); ?>

<!-- nearby-->
<?php get_template_part('partials/nearby'); ?>
<?php endif;?>

<!-- properties-->
<?php get_template_part('partials/properties'); ?>
<?php wp_reset_postdata(); ?>
<!-- ubication-->
<?php get_template_part('partials/ubication'); ?>

<!-- contact footer-->
<?php get_template_part('partials/contact-footer'); ?>

<?php get_footer(); ?>