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
?>
<section class="rsvp-partial-39366a" style="background:var(<?= $rsvp['background']; ?>)">
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