<?php
/**
 * 
 * Partial Name: header
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$background = get_field('background');
?>
<section class="header-partial-f00228" style="background:var(<?= $background ?? '--third-color'; ?>);">
    <div class="content">
        <!-- <div class="logo">
            <?= get_custom_logo(); ?>
        </div> -->
        <h2 class="names">
            <a href="<?= home_url(); ?>"><?= bloginfo('name'); ?></a>
        </h2>
        <div class="bar-menu">
            <span class="top"></span>
            <span class="center"></span>
            <span class="bottom"></span>
        </div>
        <div class="the-nav">
            <?php wp_nav_menu(array('menu' => 'Menu 1')); ?>
        </div>
    </div>
</section>
<script src='<?= get_template_directory_uri(); ?>/js/partials/header.js'></script>