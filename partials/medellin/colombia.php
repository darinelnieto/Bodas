<?php
/**
 * 
 * Partial Name: colombia
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$colombia = get_field('colombia_content');
if(!empty($colombia['colombia_places'])):
?>
<section class="colombia-partial-518f89">
    <div class="content">
        <div class="top">
            <?php if(!empty($colombia['title'])): ?>
                <h2><?= $colombia['title']; ?></h2>
            <?php endif; if(!empty($colombia['short_description'])): ?>
                <p class="description"><?= $colombia['short_description']; ?></p>
            <?php endif; ?>
        </div>
        <div class="colombia-places">
            <?php foreach($colombia['colombia_places'] as $item): ?>
                <div class="place">
                    <?php if(!empty($item['main_image'])): $img = $item['main_image']; ?>
                        <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" class="main-image">
                    <?php endif; ?>
                    <div class="text-content">
                        <?php if(!empty($item['name'])): ?>
                            <h3><?= $item['name']; ?></h3>
                        <?php endif; if($item['description']): ?>
                            <p class="description"><?= $item['description']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>