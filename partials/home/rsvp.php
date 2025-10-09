 <?php
/**
 * 
 * Partial Name: rsvp
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$rsvp = get_field('rsvp_content');
$img = $rsvp['image'];
$after_rsvp = get_field('before_rsvp');
?>
<section class="rsvp-partial-39366a" style="background:var(<?= $rsvp['background']; ?>)">
    <?php if(!empty($after_rsvp['items'])): $key = 0; ?>
        <div class="after-rsvp" style="background:var(<?= $after_rsvp['background'] ?? '--third-color'; ?>)">
            <div class="content">
                <div class="top">
                    <?php if(!empty($after_rsvp['text_before_title'])): ?>
                        <p class="before-title"><?= $after_rsvp['text_before_title']; ?></p>
                    <?php endif; if($after_rsvp['title']): ?>
                        <h2><?= $after_rsvp['title']; ?></h2>
                    <?php endif; ?>
                </div>
                <div class="items">
                    <?php foreach($after_rsvp['items'] as $item): $key++; ?>
                        <div class="item">
                            <h3><?php if($key <= 9){ echo '0'.$key; }else{ echo $key; }; ?>.</h3>
                            <?php if(!empty($item['date'])): ?>
                                <h4 class="date"><?= $item['date']; ?></h4>
                            <?php endif; if(!empty($item['event_name'])): ?>
                                <p><?= $item['event_name'] ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="form-content">
        <?php if($rsvp['title']): ?>
            <h2 class="title"><?= $rsvp['title'] ?></h2>
        <?php endif; if($rsvp['description']): ?>
            <p class="description"><?= $rsvp['description']; ?></p>
        <?php endif; if($rsvp['form_shortcode']): ?>
            <div class="form">
                <?= do_shortcode($rsvp['form_shortcode']); ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if($img): ?>
        <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" class="main-image">
    <?php endif; ?>
</section>
<script src='<?= get_template_directory_uri(); ?>/js/partials/rsvp.js'></script>           