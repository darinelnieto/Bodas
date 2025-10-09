   
<?php
/**
 * 
 * Template Name: faqs
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
$faqs = get_field('faqs');
?>
<main id="faqs-template-be8fe8">
    <section class="title" style="background:var(<?= get_field('main_background') ?? '--main-color'; ?>)">
        <h1><?= the_title(); ?></h1>
    </section>
    <?php if($faqs): foreach($faqs as $faq): ?>
        <section class="faqs" style="background:var(<?= $faq['background'] ?? '--five-color'; ?>)">
            <?php if(!empty($faq['title'])): ?>
                <div class="title">
                    <h2><?= $faq['title']; ?></h2>
                </div>
            <?php endif; if($faq['faqs_list']): ?>
                <div class="faqs-list">
                    <?php foreach($faq['faqs_list'] as $item): ?>
                        <div class="the-item">
                            <div class="icon">
                                <?php if(!empty($item['icon'])): $icon = $item['icon']; ?>
                                    <img src="<?= $icon['url']; ?>" alt="<?= $icon['title']; ?>" width="<?= $icon['width']; ?>" height="<?= $icon['height']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="question-and-answer">
                                <h3 class="question"><?= $item['question'] ?? ''; ?></h3>
                                <p class="answer"><?= $item['answer'] ?? ''; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    <?php endforeach; endif; ?>
</main>
<?php get_footer(); ?>
                    