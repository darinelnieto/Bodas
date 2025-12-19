   
<?php
/**
 * 
 * Template Name: wedding-details
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
?>
<main id="wedding-details-template-f21090">
    <?php get_template_part('partials/wedding-detail/party'); ?>
    <?php get_template_part('partials/wedding-detail/boda'); ?>
    <?php get_template_part('partials/wedding-detail/reception'); ?>
    <?php get_template_part('partials/wedding-detail/dresscode-and-gif'); ?>
</main>
<?php get_footer(); ?>
                    