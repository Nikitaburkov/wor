<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header();
?>

	<section id="primary" class="background content">
		<main id="main" class="container">

			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
				</header><!-- .page-header -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
