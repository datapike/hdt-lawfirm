<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HDT_Lawfirm
 */

?>
<div class="main-container blog pages">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		
		<div class="post-details">
			<i class="ion-ios-clock"></i> <time><?php the_date(); ?> </time>
			<i class="ion-ios-folder"></i> <?php the_category(', ') ?>

			<?php edit_post_link( 'Edit', '<i class="ion-edit"></i> ', ''  ); ?>
		</div><!-- post-details -->
		
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) { // check for feature image ?> 
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div><!-- post-image -->
	<?php } ?>
	
	<div class="post-body">
		<?php the_content(); ?>
	</div><!-- post-body -->
	
</article><!-- #post-## -->
</div>