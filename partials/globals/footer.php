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
$background = get_field('footer_background');
?>
<section class="footer-partial-f2356c <?php if(!empty($background)){ echo $background; }else{ echo 'apricot'; } ?>">
    <p class="copyright"><?= $copy; ?></p>
</section>