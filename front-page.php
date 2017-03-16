<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php 
		$mandalaHeartImage = get_field("mandala-heart-image");
		$mandalaHeartText = get_field("mandala-heart-text");
		$aboutAhnnaImage = get_field("about-ahnna-image");
		$aboutAhnnaText = get_field("about-ahnna-text");
		$mandalasImage = get_field("mandalas-image");
		$mandalasText = get_field("mandalas-text");
		 
		?>
		<div class=container>
		<section class ="front-page-section" id="mandala-heart" >
			<div class="front-page-container">
				<div class="mandala-heart-text-area front-page-text-area">
					<?php echo $mandalaHeartText;?>
				</div>
				<div class="mandala-heart-image-area front-page-image-area">
					<img id="mandala-heart-image" src="<?php echo $mandalaHeartImage['url']; ?> "/>
				</div>
			</div>
		</section>
		
		<section class ="front-page-section" id="about-ahnna">
			<div class="front-page-container">
				<div class="mandala-heart-image-area front-page-image-area">
					<img id="ahnna-profile-pic" src="<?php echo $aboutAhnnaImage['url']; ?> "/>
				</div>
				<div class="mandala-heart-text-area front-page-text-area">
					<?php echo $aboutAhnnaText; ?>
				</div>	
			</div>
		</section>
		
		<section class ="front-page-section" id="mandalas">	
		<div class="front-page-container front-page-container-end">
				<div class="mandala-heart-text-area front-page-text-area">
					<?php echo $mandalasText; ?>
				</div>
				<div class="mandala-heart-image-area front-page-image-area">
					<img id="about-mandala-image"src="<?php echo $mandalasImage['url']; ?> "/>
				</div>	
			</div>
		</section>
		</div>
		
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
