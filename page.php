<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HDT_Lawfirm
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
<div class="spacer">&nbsp;</div>

<div class="container">
	<div id="primary" class="content-area pages">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<a class="cd-top" href="#">Top</a>
<?php get_footer(); ?>
