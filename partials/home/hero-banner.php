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
$images = $banner['images'];
?>
<section class="hero-banner-partial-f313d1">
    <div class="content">
        <div class="gallery desktop">
            <div class="left">
                <?php if(!empty($images[0]['image'])){  echo wp_get_attachment_image( $images[0]['image'], 'full', false, array( 'class' => 'image-left a-couple', )); } ?>
            </div>
            <div class="center">
                <?php if(!empty($images[1]['image'])){ echo wp_get_attachment_image( $images[1]['image'], 'full', false, array( 'class' => 'image-center a-couple', )); } ?>
            </div>
            <div class="right">
                <?php if(!empty($images[2]['image'])){  echo wp_get_attachment_image( $images[2]['image'], 'full', false, array( 'class' => 'image-right a-couple', ));} ?>
            </div>
        </div>
        <div class="gallery movil owl-carousel">
            <div class="left">
                <?php if(!empty($images[0]['image'])){  echo wp_get_attachment_image( $images[0]['image'], 'full', false, array( 'class' => 'image-left a-couple', )); } ?>
            </div>
            <div class="center">
                <?php if(!empty($images[1]['image'])){ echo wp_get_attachment_image( $images[1]['image'], 'full', false, array( 'class' => 'image-center a-couple', )); } ?>
            </div>
            <div class="right">
                <?php if(!empty($images[2]['image'])){  echo wp_get_attachment_image( $images[2]['image'], 'full', false, array( 'class' => 'image-right a-couple', ));} ?>
            </div>
        </div>
        <div class="text-content">
            <?php if(!empty($banner['names'])): ?>
                <h1><?= $banner['names']; ?></h1>
            <?php endif; if(!empty($banner['date_and_location'])): ?>
                <div class="date-and-location">
                    <?= $banner['date_and_location']; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if(!empty($banner['bee'])): ?>
        <div class="bee-image">
            <?= wp_get_attachment_image( $banner['bee'], 'full', false, array( 'class' => 'bee', )); ?>
        </div>
    <?php endif; if(!empty($banner['rings'])): ?>
        <div class="rings-image">
            <?= wp_get_attachment_image( $banner['rings'], 'full', false, array( 'class' => 'rings', )); ?>
        </div>
    <?php endif; ?>
</section>
<script src='<?= get_template_directory_uri(); ?>/js/partials/hero-banner.js'></script>             