<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="col-md-4 col-sm-4 col-xs-4">
			<h1 class="title">About Us</h1>
			<p>We have created dozens of custom Wordpress sites for our clients and can do the same for you. From brand new sites to existing popularWe have created dozens of custom Wordpress sites for our clients and can do the same for you. From brand new sites to existing popular</p>
			<?php //  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Aboutus') ) : endif; ?>
		</div>
		
		<div class="col-md-4 col-sm-4 col-xs-4">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="mainnavigation" role="navigation" aria-label="<?php _e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
				<h1 class="title">Important Category</h1>
				<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footermenu') ) : endif; ?>
					<?php /*
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
				*/	?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>
</div>
	<div class="col-md-4 col-sm-4 col-xs-4">
			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
				<h1 class="title">Follow Us </h1>
				
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>
			
			<div class="our-location">
			<h1 class="title"> Our Location </h1>
			Street NO 599,<br/>
			FAX :234 456 789<br/>
			Phone: 3456789021
			</div>
			</div>

			</div>
			</footer><!-- .site-footer -->
		
		<div class="copyright">Copyright <?php echo date("Y"); ?> kingandqueenradio.com All right reserved </div>
		
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
