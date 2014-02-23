<header>
	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<?php bloginfo( 'description' ); ?>
	<?php wp_nav_menu( array( 'menu_class' => 'nav',) ); ?>
	<?php get_search_form(); ?>
</header>
