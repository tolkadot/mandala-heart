<?php
/**
 * Template Name: Workshops-Main
 */

get_header(); ?>

<div class="wrap">
	
<main id="main" class="site-main" role="main">
	<header class="page-header">
			<h1 class="page-title page-title-centered"><?php single_post_title(); ?></h1>
	</header>

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
	class Workshoptext { 
	    public function __construct() {
	        $this->workshoptext1 = get_field('workshop-sunday-text');
	        $this->workshoptext2 = get_field('workshop-daytime-weekly-text');
	        $this->workshoptext3 = get_field('workshop-evening-weekly-text');
	    	$this->workshoptext4 = get_field('workshop-individual-text');
		    $this->workshoptext5 = get_field('team-building-text');
				}
			}
	class Workshoplinks { 
	    public function __construct() {
	        $this->workshoplink1 = get_field('workshop-sunday-link');
	        $this->workshoplink2 = get_field('workshop-daytime-weekly-link');
	        $this->workshoplink3 = get_field('workshop-evening-weekly-link');
	    	$this->workshoplink4 = get_field('workshop-individual-link');
		    $this->workshoplink5 = get_field('team-building-link');
				}
			}

		$workshopimages = new Workshopimages;
		$workshoplinks = new Workshoplinks;
		$workshoptext = new Workshoptext;

			for ($i = 1; $i <= 5; $i++) { ?>
			<div class="workshopGallery">
				     <div class ="workshopImage" id="workshopImage_<?php echo $i ?>">
				      	<a href="<?php echo $workshoplinks->{"workshoplink{$i}"}; ?>">
						<img src="<?php echo $workshopimages->{"workshopimage{$i}"}['url']; ?> "/>
						<span> <?php echo $workshoptext->{"workshoptext{$i}"}; ?> </span>
						</a>
					</div>
			</div>
			<?php }  ?>
</section>

<script>
    function showText(text) {
        this.textContent = text;
        console.log(text);
    }
</script>


		</main><!-- #main -->
	
</div><!-- .wrap -->

<?php get_footer();
