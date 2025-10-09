<?php
/**
 * 
 * Partial Name: hero-banner
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$banner = get_field('banner');
$m_img = $banner['main_image'];
$s_img = $banner['secondary_image'];
?>
<section class="hero-banner-partial-f313d1" style="background:var(<?= $banner['background_section']; ?>);">
    <div class="banner-content">
        <?php if($m_img): ?>
            <img src="<?= $m_img['url']; ?>" alt="<?= $m_img['title']; ?>" width="<?= $m_img['width']; ?>" height="<?= $m_img['height']; ?>" class="main-image">
        <?php endif; if($banner['wendding_date']): ?>
            <h2 class="wedding-date"><?= $banner['wendding_date']; ?></h2>
        <?php endif; if($banner['main_text']): ?>
            <h1 class="main-text"><?= $banner['main_text']; ?></h1>
        <?php endif; if($banner['secondary_text']): ?>
            <p class="secondary-text"><?= $banner['secondary_text']; ?></p>
        <?php endif; if($s_img): ?>
            <img src="<?= $s_img['url']; ?>" alt="<?= $s_img['title']; ?>" width="<?= $s_img['width']; ?>" height="<?= $s_img['height']; ?>" class="secondary-image">
        <?php endif; ?>
    </div>
</section>
<script src='<?= get_template_directory_uri(); ?>/js/partials/hero-banner.js'></script>             