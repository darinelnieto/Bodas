<?php
/**
 * 
 * Partial Name: dresscode-and-gif
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$content_end = get_field('content_end');
$img_top = $content_end['top_right_image'];
$img_center = $content_end['bottom_left_image'];
?>
<section class="dresscode-and-gif-partial-5c4110">
    <?= $img_top ? wp_get_attachment_image($img_top, 'full', false, array('class' => 'img-top-right')) : '';  ?>
    <?= $img_center ? wp_get_attachment_image($img_center, 'full', false, array('class' => 'img-center-left')) : '';  ?>
    <div class="content">
        <?= $content_end['dresscode_and_gif'] ? $content_end['dresscode_and_gif'] : ''; ?>
    </div>
</section>
                    