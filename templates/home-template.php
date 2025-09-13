   
<?php
/**
 * 
 * Template Name: home
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
?>
<main id="home-template-d9979d">
    <?php get_template_part('partials/home/hero-banner'); ?>
    <?php get_template_part('partials/home/countdown'); ?>
    <?php get_template_part('partials/home/rsvp'); ?>
</main>
<?php get_footer(); ?>
                    