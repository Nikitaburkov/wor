get_header(); ?>
<!--Template Name: Archives Template-->
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while ( have_posts() ) :
            the_post();

            // Include the page content template.
            get_template_part( 'template-parts/content', 'page' );




        endwhile;
        ?>

    </main>



</div>


<?php get_footer(); ?>