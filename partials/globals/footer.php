<script src='<?= get_template_directory_uri(); ?>/js/partials/footer.js'></script>   
<?php
/**
 * 
 * Partial Name: footer
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$copy = get_field('copyright', 'option');
?>
<section class="footer-partial-f2356c" style="background-image: url(<?= get_field('background_image', 'option'); ?>);">
    <p class="copyright"><?= $copy; ?></p>
</section>
                    