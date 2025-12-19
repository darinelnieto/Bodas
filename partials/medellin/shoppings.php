<?php
/**
 * 
 * Partial Name: shoppings
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$shops = get_field('shoppings_content');
if(!empty($shops['stores'])):
?>
<section class="shoppings-partial-6a31bf">
    <div class="content">
        <?php if(!empty($shops['title'])): ?>
            <h2><?= $shops['title']; ?></h2>
        <?php endif; ?>
        <div class="stores">
            <?php foreach($shops['stores'] as $store): $img = $store['image']; ?>
                <div class="store">
                    <div class="text-content">
                        <h3><?= $store['name'] ?? ''; ?></h3>
                        <div class="description">
                            <?= $store['description'] ?? ''; ?>
                        </div>
                    </div>
                    <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" class="main-image">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>          
<?php endif; ?>