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
$cta = $rsvp['get_rsvp'];
$bg = $rsvp['background_image'];
?>
<section class="rsvp-partial-39366a">
    <div class="form-content">
        <?php if($rsvp['title']): ?>
            <h2 class="title"><?= $rsvp['title'] ?></h2>
        <?php endif; if($rsvp['description']): ?>
            <p class="description"><?= $rsvp['description']; ?></p>
        <?php endif; if(!empty($cta)): ?>
            <a href="<?= $cta['url']; ?>" target="<?= $cta['target']; ?>" class="cta-link">
                <?= $cta['title']; ?>
            </a>
        <?php endif; ?>
    </div>
    <?php if(!empty($img)): ?>
        <img src="<?= $img['url']; ?>" alt="<?= $img['title']; ?>" width="<?= $img['width']; ?>" height="<?= $img['height']; ?>" loading="lazy" class="svg-bee">
    <?php endif; if(!empty($bg)): ?>
        <img src="<?= $bg['url']; ?>" alt="<?= $bg['title']; ?>" width="<?= $bg['width']; ?>" height="<?= $bg['height']; ?>" loading="lazy" class="bakground-imagen">
    <?php endif; ?>
</section>
<script src='<?= get_template_directory_uri(); ?>/js/partials/rsvp.js'></script>           