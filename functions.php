<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	// Stop WordPress adding dimensions on upload

	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

// CUSTOM ADMIN LOGIN HEADER LOGO
 
function my_custom_login_logo()
{
    echo '<style  type="text/css"> h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/images/logo-fsd-login.png)  !important; background-size: cover;} </style>';
}
add_action('login_head',  'my_custom_login_logo');





	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */
// Creates Module-home post type
	register_post_type('module-home', array(
	'label' => 'Module-home',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array('slug' => 'home'),
	'query_var' => true,
	'supports' => array(
	'title',
	'editor',
	'excerpt',
	'trackbacks',
	'custom-fields',
	'',
	'revisions',
	'thumbnail',
	'author',
	'page-attributes',)
	) );


		register_post_type('module-portfolio', array(
		'label' => 'Module-portfolio',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'porfolio'),
		'query_var' => true,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'trackbacks',
		'custom-fields',
		'',
		'revisions',
		'thumbnail',
		'author',
		'page-attributes',)
		) );


		register_post_type('module-category', array(
		'label' => 'Module-category',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'categories'),
		'query_var' => true,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'trackbacks',
		'custom-fields',
		'',
		'revisions',
		'thumbnail',
		'author',
		'page-attributes',)
		) );

		register_post_type('module-bar', array(
		'label' => 'Module-bar',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'bar'),
		'query_var' => true,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'trackbacks',
		'custom-fields',
		'',
		'revisions',
		'thumbnail',
		'author',
		'page-attributes',)
		) );

		register_post_type('module-restaurant', array(
		'label' => 'Module-restaurant',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'bar'),
		'query_var' => true,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'trackbacks',
		'custom-fields',
		'',
		'revisions',
		'thumbnail',
		'author',
		'page-attributes',)
		) );

		register_post_type('module-hotel', array(
		'label' => 'Module-hotel',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'bar'),
		'query_var' => true,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'trackbacks',
		'custom-fields',
		'',
		'revisions',
		'thumbnail',
		'author',
		'page-attributes',)
		) );

		register_post_type('module-residential', array(
		'label' => 'Module-residential',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'bar'),
		'query_var' => true,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'trackbacks',
		'custom-fields',
		'',
		'revisions',
		'thumbnail',
		'author',
		'page-attributes',)
		) );
	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );

		/**
        Adding a parameter of false puts the script in the head, where Modernizr needs to be, for example.
        Adding true puts the script before the closing tag.
        **/

		wp_register_script( 'modernizr', get_template_directory_uri().'/js/modernizr-v2.7.1.js', array(), '2.6.2', false );
		wp_enqueue_script( 'modernizr' );

		wp_register_script( 'respond', get_template_directory_uri().'/js/respond.min.js', array(), '1.1.0', true );
		wp_enqueue_script( 'respond' );



	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
