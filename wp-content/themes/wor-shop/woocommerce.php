<?php get_header(); ?>

    <main class="background content">
        <section class="container">
            <?php
            if ( function_exists('dynamic_sidebar') )
                dynamic_sidebar('homepage');
            ?>
            <?php woocommerce_content(); ?>
        </section>
    </main>
<?php get_footer(); ?>