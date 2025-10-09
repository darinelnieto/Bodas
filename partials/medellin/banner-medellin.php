<?php
/**
 * 
 * Partial Name: banner-medellin
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$banner = get_field('banner');
?>
<section class="banner-medellin-partial-2a557e">
    <div class="content">
        <h1><?= $banner['title'] ?? get_the_title(); ?></h1>
        <p class="after-title"><?= $banner['text_after_title'] ?? ''; ?></p>
        <?php if(!empty($banner['main_image'])): $img = $banner['main_image']; ?>
            <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" class="main-image">
        <?php endif; ?>
        <div class="seconadry-content">
            <?php if(!empty($banner['medellin_image'])): $img = $banner['medellin_image']; ?>
                <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" class="medellin">
            <?php endif; if(!empty($banner['description'])): ?>
                <p class="description"><?= $banner['description']; ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
                    