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
        <?php if(is_front_page() === false): ?>
            <h2 class="names"><?= bloginfo('name'); ?></h2>
        <?php endif; ?>
        <div class="bar-menu">
            <span class="top"></span>
            <span class="center"></span>
            <span class="bottom"></span>
        </div>
        <div class="the-nav" style="background:var(<?= $background ?? '--secondary-color'; ?>);">
            <?php wp_nav_menu(array('menu' => 'Menu 1')); ?>
        </div>
    </div>
</section>
<script src='<?= get_template_directory_uri(); ?>/js/partials/header.js'></script>