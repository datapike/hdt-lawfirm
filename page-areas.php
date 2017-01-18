<?php
/*
	Template Name: Specialties Page 
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
<div class="main-container area-buttons">
	<div class="row">
		<h1>Areas of Specialty</h1>
	</div>
	<div class="row">
			
		<a href="#area1"><button class="btn btn-lg btn-ghost-color btn-areas">Education Law</button></a>
		<a href="#area2"><button class="btn btn-lg btn-ghost-color btn-areas">Employment Law</button></a>
		<a href="#area3"><button class="btn btn-lg btn-ghost-color btn-areas">Land Use and Zoning Law</button></a>
		
		
	</div>
	<div class="row">
		<a href="#area4"><button class="btn btn-lg btn-ghost-color btn-areas">Liquor Licensing Law</button></a>
		<a href="#area5"><button class="btn btn-lg btn-ghost-color btn-areas">Real Estate Law</button></a>
		<a href="#area6"><button class="btn btn-lg btn-ghost-color btn-areas">Personal Injury Law</button></a>
	</div>
</div>
	
<div class="spacer spacer-green">&nbsp;</div>
	
<div class="main-container areas">
	<div class="row area1">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="area1"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-education.png">
			<h2>Education Law</h2>
			<p>Henry, David, and Thoreau has unparalleled experience in education law and is uniquely positioned to assist school systems in responding to a wide variety of legal issues impacting school systems, including those traditionally viewed as outside the realm of school law.  </p>
			<p>Providing legal services to public school systems for more than four decades, HDT serves as counsel to Superintendents and local boards of education, or as General Counsel to numerous Maryland school systems including  Howard, Anne Arundel, and Baltimore counties. Additionally, we provide specialized services as needed to several other Maryland school systems.</p> 
		</div>
	</div>
	<div class="row area2">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="area2"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-employment.png">
			<h2>Employment Law</h2>
			<p>Employment law can have a significant impact on almost every business. The rights and obligations of employers and employees are dictated by a complicated mix of federal, state and local laws. Understanding the intricacies of employment law is vital in this sometimes emotional realm, but effective and empathetic counsel can assist employers and employees in successfully resolving difficult situations. </p>
			<p>Henry, David, and Thoreau attorneys draft employee handbooks, employment agreements, noncompete agreements and severance agreements. We provide counsel on all employment documents. HDT also represents employers and employees in all matters of employment law before the courts, agencies, boards and commissions that preside over employment disputes.  </p> 
		</div>
	</div>
	<div class="row area3">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="area3"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-land.png">
			<h2>Land Use and Zoning Law</h2>
			<p>Land use and development is a highly regulated and complex field that requires an intimate knowledge of both the law and the governmental and political framework that is necessary for effective legal representation. Henry, David, and Thoreau has grown, developed and adapted to continue to provide aggressive representation to correspond with the ever-changing and publicly- and politically-charged field of zoning and land use regulations.</p>
			<p>HDT has represented clients in matters before planning boards and commissions, hearing examiners and zoning boards in Howard County, Baltimore County, Baltimore City, and Anne Arundel County. HDT represents clients in matters before all government agencies that have a role in land use and development in these jurisdictions as well as before the state of Maryland agencies. </p> 
		</div>
	</div>
	<div class="row area4">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="area4"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-liquor.png">
			<h2>Liquor Licensing Law</h2>
			<p>Restaurants, taverns and liquor stores need approval from the local liquor board to sell alcoholic beverages. Liquor laws are different in every Maryland county and city. To successfully navigate the complex laws and ensure applicants and businesses receive the necessary and vital approval from the local liquor board requires an uncommon level of attention to the details and subtle differences in the laws from county to county.</p>
			<p>Henry, David, and Thoreau has successfully represented national, regional and local businesses in the unique field of liquor licensing law for more than 30 years.</p> 
		</div>
	</div>
	<div class="row area5">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="area5"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-realestate.png">
			<h2>Real Estate Law</h2>
			<p>Carney, Kelehan, Bresler, Bennett & Scherr real estate practitioners provide legal services and advice relating to all aspects of real estate law, from commercial acquisitions to residential to finance. For more than three decades, CarneyKelehan’s attorneys have handled a variety of complex real estate matters, including:</p>
			<ul>
				<li>Land acquisition</li>
				<li>Land development</li>
				<li>Financing</li>
				<li>Zoning</li>
				<li>Government and administrative approvals</li>
				<li>Easement/right of way acquisitions</li>
				<li>Leasing</li>
				<li>Construction/professional contracts</li>
				<li>Title insurance</li>
				<li>Resolution of real estate disputes</li>
			</ul>

		</div>
	</div>
	<div class="row area6">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="area6"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-injury.png">
			<h2>Personal Injury Law</h2>
			<p>Personal injuries can come about in many ways; for example, unsafe or careless actions of automobile drivers, doctors, manufacturers, landlords, storeowners or any other organizations. As personal injury lawyers, Henry, David, and Thoreau can ably represent you for personal injuries that you suffer from incidents that occur anywhere in the state of Maryland. Call us for a free consultation.</p> 
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
