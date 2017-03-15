<?php
/**
 * Template Name: Workshops-Main
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<section class="workshopsSplash">
<?php 
	class Workshopimages { 
    public function __construct() {
        $this->workshopimage1 = get_field('workshop-sunday');
        $this->workshopimage2 = get_field('workshop-daytime-weekly');
        $this->workshopimage3 = get_field('workshop-evening-weekly');
    	$this->workshopimage4 = get_field('workshop-individual');
	    $this->workshopimage5 = get_field('image-team-building');
			}
		}

$workshopimages = new Workshopimages;

			for ($i = 1; $i <= 5; $i++) { ?>
			<div class="workshopImage">
			<img src="<?php echo $workshopimages->{"workshopimage{$i}"}['url']; ?> "/>
			</div>
			<?php }  ?>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
