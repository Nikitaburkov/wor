<?php get_header();?>
    <!--
        Template name: checkout
    -->
    <main class="background content">
        <section class="container">
            <?php echo do_shortcode( '[woocommerce_checkout]' ); ?>
        </section>
    </main>
<?php get_footer(); ?>