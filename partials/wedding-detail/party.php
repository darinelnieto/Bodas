<?php
/**
 * 
 * Partial Name: party
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$party = get_field('welcomme_party');
$c_center = $party['center_contennt'];
?>
<section class="party-partial-b2b7b5">
    <div class="title-content">
        <h1><?= the_title(); ?></h1>
    </div>
    <div class="content">
        <div class="left">
            <p class="date"><?= $party['hour'] ? $party['hour'] : 'Por definnir'; ?></p>
        </div>
        <div class="center">
            <?php if(!empty($c_center['event_image'])): $img = $c_center['event_image']; ?>
                <div class="image-contain">
                    <?= wp_get_attachment_image($img, 'full', false, array('class' => 'event-image')); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="right">
            <?= $party['content_right'] ? $party['content_right'] : ''; ?>
        </div>
    </div>
    <?php if(!empty($c_center['description'])): ?>
        <div class="description">
            <?= $c_center['description']; ?>
        </div>
    <?php endif; ?>
    <div class="left movil">
        <p class="date"><?= $party['hour'] ? $party['hour'] : 'Por definnir'; ?></p>
    </div>
</section>
                    