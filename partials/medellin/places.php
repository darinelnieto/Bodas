<?php
/**
 * 
 * Partial Name: places
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$places = get_field('places_content');
$items = $places['places_items'];
if(!empty($items)):
?>
<section class="places-partial-fd9a4c">
    <div class="content">
        <?php if(!empty($places['title'])): ?>
            <h2 class="title"><?= $places['title']; ?></h2>
        <?php endif; foreach($items as $item): ?>
            <div class="places">
                <?php if(!empty($item['title'])): ?>
                    <h3 class="subtitle"><?= $item['title']; ?></h3>
                <?php endif; if($item['place']): ?>
                    <div class="places-list">
                        <?php foreach($item['place'] as $place): ?>
                            <div class="place-card">
                                <?php if(!empty($place['image'])): $img = $place['image']; ?>
                                    <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" class="main-image">
                                <?php endif; ?>
                                <div class="text-content">
                                    <?php if(!empty($place['name'])): ?>
                                        <h4><?= $place['name']; ?></h4>
                                    <?php endif; if(!empty($place['description'])): ?>
                                        <p class="description"><?= $place['description']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>