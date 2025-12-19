<?php
/**
 * 
 * Partial Name: reception
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$reception = get_field('reception');
$c_center = $reception['center_contennt'];
$img_left = $reception['image_left_bottom'];
$img_top_left = $reception['left_top_image'];
$img_right = $reception['image_right'];
?>
<section class="reception-partial-5c2da2">
    <div class="content">
        <div class="left">
            <p class="date"><?= $reception['hour'] ? $reception['hour'] : 'Por definnir'; ?></p>
        </div>
        <div class="center">
            <?php if(!empty($c_center['event_image'])): $img = $c_center['event_image']; ?>
                <div class="image-contain">
                    <?= wp_get_attachment_image($img, 'full', false, array('class' => 'event-image')); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="right">
            <?= $reception['content_right'] ? $reception['content_right'] : ''; ?>
        </div>
    </div>
    <?php if(!empty($c_center['description'])): ?>
        <div class="description">
            <?= $c_center['description']; ?>
        </div>
    <?php endif; ?>
    <div class="left movil">
        <p class="date"><?= $reception['hour'] ? $reception['hour'] : 'Por definnir'; ?></p>
    </div>
    <?= $img_top_left ? wp_get_attachment_image($img_top_left, 'full', false, array('class' => 'top-left-image')) : ''; ?>
    <?= $img_left ? wp_get_attachment_image($img_left, 'full', false, array('class' => 'bottom-left-image')) : ''; ?>
    <?= $img_right ? wp_get_attachment_image($img_right, 'full', false, array('class' => 'top-right-image')) : ''; ?>
</section>
                    