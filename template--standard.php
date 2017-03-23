<?php
/**
 * Template Name: Standard
 */

get_header(); ?>

<div class="wrap">
	
<main id="main" class="site-main" role="main">
	<header class="page-header">
			<h1 class="page-title page-title-centered"><?php single_post_title(); ?></h1>
	</header>


 <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>





		</main><!-- #main -->
	
</div><!-- .wrap -->

<?php get_footer(); ?>