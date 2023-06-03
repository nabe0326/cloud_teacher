<?php
/*
Template Name: contact Archives
*/
get_header();
?>
<main>
    <div class="company width">
        <section class="width">
            <div class="title">
                <h2>お問い合わせ</h2>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="10" title="お問い合わせ"]'); ?>
        </section>
    </div>
</main>
<?php
get_footer();
?>