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
			
			
	class Workshopinfo { 
	    public function __construct() {
	        $this->workshopinfo1 = get_field('workshop-sunday-info');
	        $this->workshopinfo2 = get_field('workshop-daytime-weekly-info');
	        $this->workshopinfo3 = get_field('workshop-evening-weekly-info');
	    	$this->workshopinfo4 = get_field('workshop-individual-info');
		    $this->workshopinfo5 = get_field('team-building-info');
				}
			}

		$workshopimages = new Workshopimages;
		$workshoplinks = new Workshoplinks;
		$workshoptext = new Workshoptext;
		$workshopinfo = new Workshopinfo;

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

<div class=container>
	
	<?php 
	
	class Paypalinfo { 
	    public function __construct() {
			$this->paypal_1_1 =  get_field('workshop-sunday-1-paypal'); 
			$this->paypal_2_1 =  get_field('workshop-sunday-2-paypal'); 
			$this->paypal_3_1 =  get_field('workshop-sunday-3-paypal'); 
			$this->paypal_4_1 =  get_field('workshop-sunday-4-paypal');
			
			$this->paypal_1_2 =  get_field('workshop-daytime-1-paypal'); 
			$this->paypal_2_2 =  get_field('workshop-daytime-2-paypal'); 
			$this->paypal_3_2 =  get_field('workshop-daytime-3-paypal'); 
			$this->paypal_4_2 =  get_field('workshop-daytime-4-paypal'); 
			
			$this->paypal_1_3 =  get_field('workshop-evening-1-paypal'); 
			$this->paypal_2_3 =  get_field('workshop-evening-2-paypal'); 
			$this->paypal_3_3 =  get_field('workshop-evening-3-paypal'); 
			$this->paypal_4_3 =  get_field('workshop-evening-4-paypal'); 
			    }
			}
			
			$paypalinfo = new Paypalinfo;
	?>
	
	<?php for ($i = 1; $i <= 5; $i++) { ?>
		<section class ="workshops-section" id="section_<?php echo $i ?>" >
			<div class="workshop-title"> <h2><?php echo $workshoptext->{"workshoptext{$i}"}; ?></h2></div>
			<div class="workshops-container workshops-container_<?php echo $i ?>">
				<div class="<?php echo $i ?>-text-area workshops-text-area">
					<?php echo $workshopinfo->{"workshopinfo{$i}"} ;?>
				
				</div><!--workshops-text-area-->
				<div class="workshops-page-image-area">
					<img class="workshop_image" src="<?php echo $workshopimages->{"workshopimage{$i}"}['url']; ?> "/>
					<div class="paypal"> 
					<?php $foo = 'wp_paypal_payment_box email="your@paypal-email" options="'. $paypalinfo->{"paypal_1_{$i}"} .'|' .$paypalinfo->{"paypal_2_{$i}"}. '|'.$paypalinfo->{"paypal_3_{$i}"}. '|' .$paypalinfo->{"paypal_4_{$i}"}.'"' ; ?>
						 
				<div> <?php if($i <=3 ){echo do_shortcode('[' .$foo . ']'); } ?> </div>
				</div> <!--paypal-->
				</div>
			</div>
				
		</section>
		<?php }  ?>
</div>





		</main><!-- #main -->
	
</div><!-- .wrap -->

<?php get_footer(); ?>