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
		<div class="wrap">

		<?php 
		$mandalaHeartImage = get_field("mandala-heart-image");
		$mandalaHeartText = get_field("mandala-heart-text");
		$mandalasTitle = get_field("mandala-heart-title");
		$aboutAhnnaImage = get_field("about-ahnna-image");
		$aboutAhnnaText = get_field("about-ahnna-text");
		$ahnna  = get_field("about-ahnna-title");
		$mandalasImage = get_field("mandalas-image");
		$mandalasText = get_field("mandalas-text");
		$mandalas = get_field("mandalas");
		
		 
		?>
		<div class=container>
		<section class ="front-page-section" id="mandala-heart" >
			<div class="front-page-container">
				<div class="mandala-heart-text-area front-page-text-area">
					<h3><?php echo $mandalasTitle; ?></h3>
					<?php echo $mandalaHeartText; ?>
				</div>
				<div class="mandala-heart-image-area front-page-image-area">
					<img id="mandala-heart-image" src="<?php echo $mandalaHeartImage['url']; ?> "/>
				</div>
			</div>
		</section>
		
		<section class ="front-page-section" id="about-ahnna">
			<div class="front-page-container front-page-container-ahnna">
				<div class="mandala-heart-text-area front-page-text-area">
						<h3><?php echo $ahnna; ?></h3>
					<?php echo $aboutAhnnaText; ?>
				</div>
				<div class="mandala-heart-image-area front-page-image-area">
					<img id="ahnna-profile-pic" src="<?php echo $aboutAhnnaImage['url']; ?> "/>
				</div>
			</div>
		</section>
		
		<section class ="front-page-section" id="mandalas">	
		<div class="front-page-container front-page-container-end">
				<div class="mandala-heart-text-area front-page-text-area">
						<h3><?php echo $mandalas; ?></h3>
					<?php echo $mandalasText; ?>
				</div>
				<div class="mandala-heart-image-area front-page-image-area">
					<img id="about-mandala-image"src="<?php echo $mandalasImage['url']; ?> "/>
				</div>	
			</div>
		</section>
		</div>
		</div><!-- #wrap-->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
