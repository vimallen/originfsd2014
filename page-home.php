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

<div class="box1">
	<div class="logo-home">
<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo-fsd.png" alt="home page" /></a>
</div><!--logo-home-->
<?php wp_nav_menu( array( 'menu_class' => 'nav-home',) ); ?>
</div><!--box1-->

<div class="box2">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; ?>


</div>


