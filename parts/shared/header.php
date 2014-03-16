<header>
<?php if (!is_page('4')) { ?>
	<h1 class="visuallyhidden"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
<div class="logo-base">
<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo-fsd-base.png" alt="home page" /></a>
</div><!--logo-base"-->
	<p class="visuallyhidden"><?php bloginfo( 'description' ); ?></p>
		<?php wp_nav_menu( array( 'menu_class' => 'nav',) ); ?>
	
<?php } ?>
</header>
