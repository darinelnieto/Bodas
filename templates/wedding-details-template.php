   
<?php
/**
 * 
 * Template Name: wedding-details
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
$wedding_details = get_field('wedding_details');
$description = get_field('description');
?>
<main id="wedding-details-template-f21090" style="background:var(<?= get_field('background'); ?>)">
    <section class="title-contain">
        <h1><?= the_title(); ?></h1>
    </section>
    <?php if(!empty($wedding_details)): ?>
        <section class="wedding-details">
            <?php foreach($wedding_details as $item): ?>
                <div class="item">
                    <div class="left">
                        <?php if(!empty($item['hour'])): ?>
                            <p class="hout"><?= $item['hour']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="center">
                        <?php if(!empty($item['main_image'])): $img = $item['main_image']; ?>
                            <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" class="main-image">
                        <?php else: ?>
                            <span class="replace-image"></span>
                        <?php endif; ?>
                        <div class="text">
                            <?php if(!empty($item['event_name'])): ?>
                                <h2><?= $item['event_name']; ?></h2>
                            <?php endif; if(!empty($item['date'])): ?>
                                <h3><?= $item['date']; ?></h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="right">
                        <?php if(!empty($item['place'])): ?>
                            <p class="place"><?= $item['place']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    <?php endif; if(!empty($description)): ?>
        <section class="description">
            <div class="content">
                <?= $description; ?>
            </div>
        </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
                    