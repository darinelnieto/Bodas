<?php
/**
 * 
 * Partial Name: restaurants
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$restaurants = get_field('restaurant_content');
if(!empty($restaurants)):
    foreach($restaurants as $content):
?>
<section class="restaurants-partial-38d844 <?= $content['background'] ?? 'apricot'; ?>">
    <div class="content">
        <div class="top">
            <?php if(!empty($content['title'])): ?>
                <h2><?= $content['title']; ?></h2>
            <?php endif; if(!empty($content['after_title'])): ?>
                <p class="after-title"><?= $content['after_title']; ?></p>
            <?php endif; ?>
        </div>
        <div class="restaurants">
            <?php if(!empty($content['restaurants'])): foreach($content['restaurants'] as $restaurant): $link = $restaurant['link']; $img = $restaurant['main_image']; ?>
                <div class="restaurant">
                    <a href="<?= $link['url'] ?? '#'; ?>" target="_blank">
                        <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" class="main-image">
                        <div class="text-content">
                            <h3><?= $restaurant['name']; ?></h3>
                            <p><?= $restaurant['description']; ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>
<?php endforeach; endif; ?>          