<?php
/**
 * 
 * Partial Name: boda
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$boda = get_field('boda');
$c_center = $boda['center_contennt'];
$img_left = $boda['image_left'];
?>
<section class="boda-partial-f6625b">
    <?= $img_left ? wp_get_attachment_image($img_left, 'full', false, array('class' => 'left-image')) : ''; ?>
    <div class="content">
        <div class="left descktop">
            <p class="date"><?= $boda['hour'] ? $boda['hour'] : 'Por definnir'; ?></p>
        </div>
        <div class="center">
            <?php if(!empty($c_center['event_image'])): $img = $c_center['event_image']; ?>
                <div class="image-contain">
                    <?= wp_get_attachment_image($img, 'full', false, array('class' => 'event-image')); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="right">
            <?= $boda['content_right'] ? $boda['content_right'] : ''; ?>
        </div>
    </div>
    <?php if(!empty($c_center['description'])): ?>
        <div class="description">
            <?= $c_center['description']; ?>
        </div>
    <?php endif; ?>
    <div class="left movil">
        <p class="date"><?= $boda['hour'] ? $boda['hour'] : 'Por definnir'; ?></p>
    </div>
</section>