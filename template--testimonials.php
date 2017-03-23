<?php
/**
 * Template Name: testimonials
 */

get_header(); ?>

<div class="wrap">
	
<main id="main" class="site-main" role="main">
	<header class="page-header">
			<h1 class="page-title page-title-centered"><?php single_post_title(); ?></h1>
	</header>

<section class="Testimonials">
	<?php 

			$testimonialtext =[];
			$testimonialauthor =[];
			for ($i = 1; $i <= 10; $i++) { 
				if(!empty(get_field('testimonial_'.$i))){
			array_push($testimonialtext,  get_field('testimonial_'.$i));
				}
			array_push($testimonialauthor,  get_field('testimonial_name_'.$i));
			//var_dump($testimonialtext[1]); 
			}

			?>
			
</section>

<div class=container>
	<?php for($j = 0; $j < sizeof($testimonialtext); $j++) { ?>
	<div class="testimonial-section">
	<div class="testimonial-text">
		<?php echo $testimonialtext[$j] ?>
	</div>
	<div class="testimonial-author">
		<?php echo $testimonialauthor[$j] ?>
	</div>
	</div>
	
	<?php } ?>
	
</div>

		</main><!-- #main -->
	
</div><!-- .wrap -->

<?php get_footer(); ?>