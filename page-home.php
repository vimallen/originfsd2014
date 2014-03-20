<?php
/**
 /**
 * Template Name: Page-home
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="flexible-box" id="flexible-box_logo-and-sign-up">
	<div id="logo-and-sign-up">
    			
<section id="logo">
	<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo-fsd.png" alt="home page" /></a>
</section> <!-- /logo -->

<section id="sign-up">
<?php wp_nav_menu( array( 'menu_class' => 'nav-home',) ); ?>
	</section> <!-- /sign-up -->	
			
    		</div> <!-- /logo-and-sign-up -->
</div><!-- /flexible-box -->

<div class="flexible-box" id="flexible-box_preorder">
	<div id="preorder-box">
		<section id="preorder">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; ?>

</section> <!-- /preorder -->
				
	</div> <!-- /preorder-box -->
</div><!-- /flexible-box -->


