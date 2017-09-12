<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astrid
 */

?>

		</div>
	</div><!-- #content -->

	<div class="footer-wrapper">
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<?php get_sidebar('footer'); ?>
		<?php endif; ?>
		
		<?php $toggle_contact = get_theme_mod('toggle_contact_footer', 1); ?>
		<?php if ( $toggle_contact ) : ?>
		<div class="footer-info">
			<div class="container">
				<?php astrid_footer_branding(); ?>
				<?php astrid_footer_contact(); ?>
			</div>
		</div>
		<?php endif; ?>

		<footer id="colophon" class="site-footer" role="contentinfo">	
			<div class="site-info container">
				<nav id="footernav" class="footer-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'depth' => '1', 'menu_id' => 'footer-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<div class="site-copyright">
					<!--<?php do_action('astrid_footer'); ?>-->
<a href='https://www.facebook.com/Quality-Flooring-Services-LLC-877958259028775/' style="">
<i class="fa fa-facebook" aria-hidden="true"></i></a> 

<a href ='https://www.yelp.com/biz/quality-flooring-services-silver-spring' style="margin-left:40px;"> 
<i class="fa fa-yelp" aria-hidden="true"></i> </a>

<!--<a href ='' style="margin-left:40px;">
<i class="fa fa-linkedin" aria-hidden="true"></i> </a>

<a href ='' style="margin-left:40px;">
<i class="fa fa-google-plus" aria-hidden="true"></i> </a>-->

<a href ='https://twitter.com/qualityfloorllc' style="margin-left:40px;">
<i class="fa fa-twitter" aria-hidden="true"></i> </a>

<a href ='https://www.pinterest.com/qualityfloorservicesllc/' style="margin-left:40px;">
<i class="fa fa-pinterest" aria-hidden="true"></i> </a> 
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
