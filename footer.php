<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HDT_Lawfirm
 */

?>
</div><!-- #content -->

	<footer>
		<div class="main-container sitemap">
			<div class="row">
				<div class="col-md-8">
					<?php
						wp_nav_menu( array(
							'menu'          => 'Footer',
							'menu-id'       => 'menu-2',
							'theme_location'	=> 'footer',
							'container'			=> 'nav',
							'menu_class'		=> 'list-unstyled list-inline'

						) );
					?>
					
				</div><!-- end col -->
				
				<div class="col-md-4">
					<p class="footer-address"><strong><?php bloginfo('name'); ?></strong> &copy; <?php echo date('Y'); ?> </p>
					<p class="footer-address">1234 Fake Street<br>Suite 100<br>Baltimore, MD 21234<br><br>
						<strong>Contact Us:</strong><br>
						<i class="ion-ios-email"></i> <a href="mailto:info@hdtlawfirm.com?Subject=Inquiry" target="_top">info@hdtlawfirm.com</a><br>
						<i class="ion-ios-telephone hero-icon"></i> <a href="tel://1-410-123-4567">410-123-4567</a></p>
				</div><!-- end col -->
			</div><!-- end row -->
			<div class="row credit" align="center">
				<p>Website Designed by <a href="http://copyquality.com" target="_blank">Quality Business Solutions</a></p>
			</div>
		</div><!-- container -->
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-2.2.3.min.js"></script>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.js"></script>
<script>
  new WOW().init();
</script>

<script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/js/main.js"></script>
<!-- Resource jQuery -->

</body>
</html>