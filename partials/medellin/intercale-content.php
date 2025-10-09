<?php
/**
 * 
 * Partial Name: intercale-content
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$content = get_field('interleaved_content');
$air_port = $content['airport'];
$climate = $content['climate'];
$transport = $content['transport'];
?>
<section class="intercale-content-partial-600cd4">
    <div class="content-item left">
        <span class="before"></span>
        <div class="content">
            <h2><?= !empty($climate['title']) ? $climate['title'] : ''; ?></h2>
            <p><?= !empty($climate['description']) ? $climate['description'] : ''; ?></p>
        </div>
    </div>
    <div class="content-item right">
        <span class="before"></span>
        <div class="content">
            <h2><?= !empty($transport['title']) ? $transport['title'] : ''; ?></h2>
            <p><?= !empty($transport['description']) ? $transport['description'] : ''; ?></p>
        </div>
    </div>
</section>