   
<?php
/**
 * 
 * Template Name: our-history
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
$img_bg = get_field('main_image');
$subtitle = get_field('title');
$description = get_field('desciption');
?>
<main id="our-history-template-75da3c">
    <section class="our-history" style="background:var(<?= get_field('background'); ?>)">
        <?php if($img_bg): ?>
            <img src="<?= $img_bg['url']; ?>" alt="<?= $img_bg['title']; ?>" width="<?= $img_bg['width']; ?>" height="<?= $img_bg['height']; ?>" class="bg-image">
        <?php endif; ?>
        <div class="text-content">
            <h1><?= the_title(); ?></h1>
            <?php if($subtitle): ?>
                <h2><?= $subtitle; ?></h2>
            <?php endif; if($description): ?>
                <div class="description">
                    <?= $description; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
                    