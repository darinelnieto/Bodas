<?php
/**
 * 
 * Partial Name: banner-erika-gordon
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$banner = get_field('hero_banner');
$img = $banner['main_image'];
$audio_url = $banner['son'];
?>
<section class="banner-erika-gordon-partial-bae786" style="background:var(<?= $banner['background'] ?? '--secondary-color'; ?>)">
    <div class="content">
        <?php if(!empty($img)): ?>
            <div class="image-contain">            
                <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" class="main-image">
            </div>
        <?php endif; if(!empty($banner['title'])): ?>
            <h1><?= $banner['title']; ?></h1>
        <?php endif; if(!empty($banner['date'])): ?>
            <h3><?= $banner['date']; ?></h3>
        <?php endif; if(!empty($banner['description'])): ?>
            <div class="description">
                <?= $banner['description']; ?>
            </div>
        <?php endif; if (!empty($audio_url)): ?>
            <div class="son-contain">
                <?= wp_audio_shortcode(array('src' => $audio_url)); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
                    