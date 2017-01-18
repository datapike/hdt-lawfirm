<?php
/*
	Template Name: Home Page 
*/

$thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
get_header();
?>

<!-- FEATURE IMAGE
================================================== -->

<?php if ( has_post_thumbnail() ) { ?>

<section class="feature-image feature-image-default" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover; background-position: center;" data-type="background" data-speed="2">
	
</section>

<?php } else { // Fallback image ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
	
</section>

<?php } ?>

<!-- main content for page --> 
<div class="main-container home-intro-section">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<p>
				Exhibiting unsurpassed skill in the courtroom, the firm has consistently achieved historic financial recoveries for its clients. Collectively, its members have obtained jury verdicts and settlements well in excess of $500 million dollars. U.S. News and World Report has recognized the firm as one of America’s “Best Law Firms” and John Henry, the firm’s principal, was recognized in 2015 as Baltimore’s Plaintiff “Lawyer of the Year”. Mr. Henry is also a Fellow of the prestigious American College of Trial Lawyers and is considered a “Top 100 Trial Lawyer” by The American Trial Lawyers Association.
			</p>
			<p>
				The firm has built its reputation on a willingness to take on complex matters against some of the country’s largest corporations including ExxonMobil, General Motors, Bell Atlantic, Publishers Clearinghouse, Novartis Pharmaceuticals, Medtronic, Royal Farms, and others.
			</p>
		</div>
	</div>
</div>


	
	<div class="spacer spacer-green">&nbsp;</div>
	
	<div class="about-us-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1>About Us</h1>
					<p>Henry, David, and Thoreau has earned its reputation as a Maryland law firm with excellence and unparalleled client service by providing legal services to businesses, individuals and families throughout the state of Maryland for more than four decades.</p>
					<p>The team at HDT is able to respond seamlessly and completely to the particular and changing needs of our clients and our community. In addition to providing outstanding legal representation through our law office in Baltimore, HDT attorneys are active in numerous community organizations and boards as well as law-related professional associations.</p>

					<p>HDT attorneys specialize in:</p>
					<ul>
						<li>Education Law</li>
						<li>Employment Law</li>
						<li>Land Use and Zoning Law</li>
						<li>Liquor Licensing Law</li>
						<li>Real Estate Law</li>
						<li>Personal Injury Law</li>
					</ul>

				</div>
				<div class="col-md-4">
					<?php if( is_active_sidebar('sidebar-home') ) { ?>
						<div class="sidebar-home">
							<?php dynamic_sidebar('sidebar-home'); ?>
						</div>
						<div class="clear"></div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	
<div class="call-out-section">
	<div class="container call-out">
		<div class="row">
			<div class="col-md-6">
				<p>Now accepting new clients.</p>
			</div>
			<div class="col-md-6 call-now">
				<a href="tel://1-410-123-4567" class="btn-ghost" role="button">Call Now</a>
			</div>
		</div>
	</div>
</div>
	
</div>
<!-- end main content for page -->

<a class="cd-top" href="#">Top</a>
<?php get_footer(); ?>
