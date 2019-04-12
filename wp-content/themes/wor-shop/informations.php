<?php get_header();?>
<!--
    Template name: informations
-->
<main class="background content">
    <section class="container center">
        <h1>новости</h1>
        <?php // Display blog posts on any page @ http://m0n.co/l
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="container-new">
                <div class="content-post"><?php the_content(); ?></div>
                <p class="date-news"><?php the_time('j F Y'); ?></p>
            </div>
        <?php endwhile; ?>

        <?php
        the_posts_pagination( array(
            'mid_size' => 2,
            'screen_reader_text' => __( "dsa" )
        ) );
        ?>

        <?php wp_reset_postdata(); ?>





    </section>
</main>

<?php get_footer(); ?>
