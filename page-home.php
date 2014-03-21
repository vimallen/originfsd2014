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

<div class="flexible-box flexible-box_logo">
	<div class="logo-holder">
    			
<section class="logo">
	<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo-fsd.png" alt="home page" /></a>
</section> <!-- /logo -->

<nav>
<?php wp_nav_menu( array( 'menu_class' => 'nav-home',) ); ?>
	</nav> <!-- /nav -->	
			
    		</div> <!-- /logo-holder -->
</div><!-- /flexible-box -->

<div class="flexible-box flexible-box_intro-home">
	<div class="intro-box">
		<section class="intro">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; ?>

</section> <!-- /intro -->
				
	</div> <!-- /intro-box -->
</div><!-- /flexible-box -->


