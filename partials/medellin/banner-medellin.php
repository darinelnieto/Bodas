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
$repeat = $banner['transportations_and_climate'];
?>
<section class="banner-medellin-partial-2a557e">
    <div class="content">
        <h1><?= $banner['title'] ?? get_the_title(); ?></h1>
        <?php if(!empty($banner['main_image'])): $img = $banner['main_image']; ?>
            <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" class="main-image">
        <?php endif; if(!empty($banner['description'])): ?>
            <p class="description"><?= $banner['description']; ?></p>
        <?php endif; ?>
    </div>
    <?php if($repeat): foreach($repeat as $item): ?>
        <div class="repeat-content <?= $item['text-content']; ?>">
            <span class="before" style="background:var(<?= $item['background']; ?>)"></span>
            <div class="content">
                <h2 class="title" style="color:var(<?= $item['text_color']; ?>);"><?= $item['title'] ?? ''; ?></h2>
                <p class="description" style="color:var(<?= $item['text_color']; ?>);"><?= $item['description'] ?? ''; ?></p>
            </div>
        </div>
    <?php endforeach; endif; ?>
</section>
                    