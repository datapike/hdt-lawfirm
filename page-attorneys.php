<?php
/*
	Template Name: Attorneys Page 
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
		<h1>Attorneys</h1>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<a href="#attorney1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/john-henry.jpg" class="round spacing" width="200px"><p>John Henry</p></a>
		</div>
		<div class="col-sm-4">
			<a href="#attorney1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/samuel-david.jpg" class="round spacing" width="200px"><p>Samuel David</p></a>
		</div>
		<div class="col-sm-4">
			<a href="#attorney1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/arthur-thoreau.jpg" class="round spacing" width="200px"><p>Arthur Thoreau</p></a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<a href="#attorney1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/jennifer-lynn.jpg" class="round spacing" width="200px"><p>Jennifer Lynn</p></a>
		</div>	
		<div class="col-sm-4">
			<a href="#attorney1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/macy-dixon.jpg" class="round spacing" width="200px"><p>Macy Dixon</p></a>
		</div>	
		<div class="col-sm-4">
			<a href="#attorney1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carol-hutchins.jpg" class="round spacing" width="200px"><p>Carol Hutchins</p></a>
		</div>	
	</div>
</div>
	
<div class="spacer spacer-green">&nbsp;</div>
	
<div class="main-container attorneys">
	<div class="row attorney1">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="attorney1"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/john-henry.jpg" class="round" width="200px">
			<h2>John Henry</h2>
			<p>John Henry founded Henry, David, and Thoreau more than three decades ago. He has more than 45 years of experience in real estate finance and land use law, including zoning, development, subdivision, administrative and construction law. Mr. Carney spent the early part of his practice specializing in construction and development lending and FHA financing.</p>
			<p>Mr. Henry has a talent for understanding land issues and client needs, enabling him to conceptualize projects, anticipate issues and propose options to his clients. Having practiced in Baltimore County most of his career, Mr. Henry’s intimate knowledge of Baltimore County is of unique value to his local land use clients.</p> 
		</div>
	</div>
	<div class="row attorney2">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="attorney2"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/samuel-david.jpg" class="round" width="200px">
			<h2>Samuel David</h2>
			<p>Samuel David, who has been with Henry, David, and Thoreau for his entire legal career, focuses on all facets of real estate law, primarily real estate finance. He represents several construction and permanent lenders for residential, commercial and industrial projects throughout the state and regionally, using secondary market, mortgage revenue bond financing, HUD/Ginnie Mae, Fannie Mae/ Freddie Mac, and other funding sources and loan guarantees.</p>
			<p>In addition, he has represented numerous borrowers in the development, construction and acquisition process, with a specialty in counseling clients through the requirements of multi-tiered loan and equity components of difficult-to-finance projects, including choice of entity, condominium conversion, asset management issues and workouts. Mr. David also has an active construction practice, representing several of the region’s premier contractors, and serves as a resource to national firms for both local representation and specialty work in government contracting.</p> 
		</div>
	</div>
	<div class="row attorney3">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="attorney3"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/arthur-thoreau.jpg" class="round" width="200px">
			<h2>Arthur Thoreau</h2>
			<p>Arthur Thoreau, a managing partner of Henry, David, and Thoreau, focuses on education law, disabilities law, employment law and zoning law. He represents private and public educational institutions and interests throughout Maryland. He has served as a member of a county school board and as a local education hearing examiner. He has been counseling local school boards for more than 25 years.</p>
			<p>Mr. Thoreau has represented employers and employees in labor and employment disputes for more than a quarter of a century, assisting clients with federal and state claims. Mr. Thoreau served on the staff of the Anne Arundel County Office of Planning and Zoning as well as the Zoning Hearing Office, then spent 15 years as the attorney for the County Board of Appeals.</p> 
		</div>
	</div>
	<div class="row attorney4">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="attorney4"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/jennifer-lynn.jpg" class="round" width="200px">
			<h2>Jennifer Lynn</h2>
			<p>Jennifer Lynn is experienced in commercial and residential real estate law and represents leaders and developers in commercial and multifamily residential real estate acquisition, development and lending, negotiations, and closings. Ms. Lynn also assists homeowners and multifamily project owners in foreclosures, default and loan modifications. She works with HDT's development team in the preparation of professional service and construction contract documents.</p>
			<p>Prior to joining the firm, Ms. Lynn was an attorney for Weinstock, Friedman and Friedman in Baltimore. She also worked for Semmes, Bowen and Semmes in Baltimore.</p>
			<p>She has been named to the 2015 Rising Star list from Super Lawyers, a rating service of lawyers from more than 70 practice areas who have attained peer recognition and professional achievement.</p> 
		</div>
	</div>
	<div class="row attorney5">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="attorney5"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/macy-dixon.jpg" class="round" width="200px">
			<h2>Macy Dixon</h2>
			<p>Macy Dixon will be applying her legal skills, work experience, and motivation to help the firm's education clients deal successfully with a wide variety of issues, including matters involving student privacy, civil rights and discrimination, employee and student discipline, and special education.</p>
			<p>Prior to joining the firm, Ms. Dixon clerked for the Educational Opportunities Section of the U.S. Department of Justice. Previously, she was a research and compliance specialist for Robert White’s campaign for the Council of the District of Columbia. She was also a legal fellow and law clerk providing advice and legal assistance to American University.</p> 
		</div>
	</div>
	<div class="row attorney6">
		<div class="col-sm-8 col-sm-offset-2">
			<a name="attorney6"></a>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carol-hutchins.jpg" class="round" width="200px">
			<h2>Carol Hutchins</h2>
			<p>Carol Hutchins concentrates her practice in the field of school law, representing local boards of education and superintendents throughout Maryland. Ms. Hutchins handles legal issues involving personnel evaluation, discipline, dismissal, discrimination defense, and disability accommodations as well as student matters including discipline and expulsion.</p>
			<p>Ms. Hutchins also provides policy advice and representation on issues involving student assignment; school boundaries; and First Amendment Free Speech, Free Exercise of Religion and Establishment Clause cases. She counsels clients on Open Meetings Law and Public Information Act compliance as well as confidentiality laws and discrimination and civil rights matters. She is experienced in negotiating collective bargaining agreements, grievance and arbitration hearings and issues of governmental immunity.</p> 
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
