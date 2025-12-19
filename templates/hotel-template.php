   
<?php
/**
 * 
 * Template Name: hotel
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
$main_content = get_field('main');
$hotels = get_field('hotels');
$end = get_field('wedding_area');
$top = $end['top_content'];
$bottom = $end['bottom_content'];
?>
<main id="hotel-template-caaf6c">
    <section class="main-content">
        <div class="text-content">
            <h1><?= the_title(); ?></h1>
        </div>
    </section>
    <section class="hotels">
        <div class="content">
            <?php if($hotels['hotels_list']): foreach($hotels['hotels_list'] as $hotel): $img = $hotel['main_image']; ?>
                <div class="hotel">
                    <?= $img ? wp_get_attachment_image($img, 'full', false, array('class' => 'hotel-image')) : ''; ?>
                    <div class="text-content">
                        <?php if($hotel['name']): ?>
                            <h3 class="name"><?= $hotel['name']; ?></h3>
                        <?php endif; if($hotel['google_maps']): $map = $hotel['google_maps']; ?>
                            <a href="<?= $map['url']; ?>" target="<?= $map['target']; ?>" class="google-maps">
                                <?php if(get_bloginfo("language") == "en-US"): ?>Click here to open Google Maps<?php else: ?>Clic aquí para abrir Google Maps<?php endif; ?>
                            </a>
                        <?php endif; if($hotel['description']): ?>
                            <div class="description">
                                <?= $hotel['description']; ?>
                            </div>
                        <?php endif; if(!empty($hotel['primary_button'])): $cta = $hotel['primary_button']; ?>
                            <a href="<?= $cta['url']; ?>" target="<?= $cta['target']; ?>" class="primary-button cta">
                                <?php if(get_bloginfo("language") == "en-US"): ?>Book your stay<?php else: ?>Reserva tu estadía<?php endif; ?>
                            </a>
                        <?php endif; if(!empty($hotel['secondary_button'])): $cta = $hotel['secondary_button']; ?>
                            <a href="<?= $cta['url']; ?>" target="<?= $cta['target']; ?>" class="secondary-button cta">
                                <?php if(get_bloginfo("language") == "en-US"): ?>More info<?php else: ?>Más info<?php endif; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </section>
    <!-- Content end -->
    <section class="end-content">
        <?php if($end['title']): ?>
            <h2><?= $end['title']; ?></h2>
        <?php endif; ?>
        <div class="top-content">
            <div class="left">
                <?php if($top['title']): ?>
                    <h3><span><?= $top['title']; ?></span></h3>
                <?php endif; if($top['description']): ?>
                    <div class="description"><?= $top['description']; ?></div>
                <?php endif; ?>
            </div>
            <div class="right">
                <?php if($top['image']): $img = $top['image']; ?>
                    <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="bottom-content">
            <div class="left">
                <?php if($bottom['title']): ?>
                    <h3><span><?= $bottom['title']; ?></span></h3>
                <?php endif; if($bottom['column_left']): ?>
                    <div class="description"><?= $bottom['column_left']; ?></div>
                <?php endif; ?>
            </div>
            <div class="right">
                <?php if($bottom['column_right']): ?>
                    <div class="description"><?= $bottom['column_right']; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
                    