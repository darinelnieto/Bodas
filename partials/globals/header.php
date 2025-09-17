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
<section class="header-partial-f00228" style="background:var(<?= $background ?? '--secondary-color'; ?>);">
    <div class="content">
        <div class="logo">
            <?= get_custom_logo(); ?>
        </div>
        <?php if(is_front_page() === false): ?>
            <h2 class="names" style="background-image:url(<?= get_template_directory_uri() ?>/images/text-color.jpg);"><?= bloginfo('name'); ?></h2>
        <?php endif; ?>
        <div class="bar-menu <?php if(is_front_page() === true): ?>menu-light<?php endif; ?>">
            <span class="top"></span>
            <span class="center"></span>
            <span class="bottom"></span>
        </div>
        <div class="the-nav <?php if(is_front_page() === true): ?>nav-light<?php endif; ?>" style="background:var(<?= $background ?? '--secondary-color'; ?>);">
            <?php wp_nav_menu(array('menu' => 'Menu 1')); ?>
        </div>
    </div>
</section>
<script src='<?= get_template_directory_uri(); ?>/js/partials/header.js'></script>