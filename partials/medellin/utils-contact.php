<?php
/**
 * 
 * Partial Name: utils-contact
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$utils = get_field('utils_content');
$contact = $utils['contact_list'];
?>
<section class="utils-contact-partial-1f09f0">
    <div class="content">
        <h2 class="title"><?= $utils['title'] ?? ''; ?></h2>
        <?php if(!empty($contact)): ?>
            <div class="contacts-list">
                <?php foreach($contact as $item): ?>
                    <div class="contact-card">
                        <div class="top">
                            <h3><?= $item['title'] ?? ''; ?></h3>
                        </div>
                        <div class="bottom">
                            <?= $item['description'] ?? ''; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <p class="t-end"><?= $utils['text_end'] ?? ''; ?></p>
    </div>
</section>
                    