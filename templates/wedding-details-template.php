   
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
$main_img = get_field('main_image');
$weeding = get_field('wedding_details');
$last_image = get_field('last_image');
?>
<main id="wedding-details-template-f21090" style="background:var(<?= get_field('background'); ?>)">
    <section class="title-contain">
        <?php if($main_img): ?>
            <img src="<?= $main_img['url']; ?>" alt="<?= $main_img['title']; ?>" width="<?= $main_img['width']; ?>" height="<?= $main_img['height']; ?>" class="main-image">
        <?php endif; ?>
        <h1><?= the_title(); ?></h1>
    </section>
    <?php if($weeding): foreach($weeding as $item): ?>
        <section class="wedding-detail">
            <div class="title-content">
                <?php if($item['event_date']): ?>
                    <h2 class="title"><?= $item['event_date']; ?></h2>
                <?php endif; if($item['event_name']): ?>
                    <h3><?= $item['event_name']; ?></h3>
                <?php endif; ?>
            </div>
            <?php if($item['event_image']): $e_image = $item['event_image']; ?>
                <img src="<?= $e_image['url']; ?>" alt="<?= $e_image['title']; ?>" width="<?= $e_image['width']; ?>" height="<?= $e_image['height']; ?>" class="event-image">
            <?php endif; ?>
            <div class="end-content">
                <?php if($item['event_location']): ?>
                    <div class="event-location">
                        <?php if($item['title_after_event_image']): ?>
                            <h4><?= $item['title_after_event_image']; ?></h4>
                        <?php endif;  ?>
                        <p class="content"><?= $item['event_location'] ?></p>
                    </div>
                <?php endif; if($item['cta']): $cta = $item['cta']; ?>
                    <a href="<?= $cta['url']; ?>" target="<?= $cta['target'] ?>" class="cta">
                        <?php if(get_bloginfo("language") == "en-US"): ?>See Google Maps<?php else: ?>Ver Google Maps<?php endif; ?>
                    </a>
                <?php endif; if($item['description']): ?>
                    <div class="description">
                        <?= $item['description']; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endforeach; endif; if($last_image): ?>
        <img src="<?= $last_image['url']; ?>" alt="<?= $last_image['title']; ?>" width="<?= $last_image['width']; ?>" height="<?= $last_image['height']; ?>" class="last-image">
    <?php endif; ?>
</main>
<?php get_footer(); ?>
                    