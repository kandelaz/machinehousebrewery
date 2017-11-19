<?php
/*
Theme Name: Machine House Brewery
Author: Luis Candelas
Author URI: http://candelasluis.com
Version: 3.0
*/



/************************************************/
/* Add menus */
/************************************************/

function register_my_menus() {
	register_nav_menus(array(
		'main-menu' => 'Main Menu',
		'footer-menu' => 'Footer Menu'
	));
}

add_action('init', 'register_my_menus');



/************************************************/
/* Create post thumnails */
/************************************************/

add_theme_support( 'post-thumbnails' );

add_image_size('slides', 1020, 510, true);
add_image_size('larger-thumb', 1024, 400, true);
add_image_size('medium-thumb', 1024, 683, true);
add_image_size('square-thumb', 140, 140, true);
add_image_size('home-thumb', 316, 316, true);



/************************************************/
/* Create excerpts */
/************************************************/

add_post_type_support( 'page', 'excerpt' );



/************************************************/
/* Custom post types for Home Page*/
/************************************************/

function create_post_type () {

	register_post_type('mhb_hours',
		array('labels' =>
			array(
				'name' => __('Hours'),
				'singular_name' => __('Hour'),
				'add_new' => __('Add New Field')
			),
			'supports' => array('title'),
			'public' => true,
			'menu_icon' => 'dashicons-clock',
			'menu_position' => 4
		)
	);

	register_post_type('mhb_matches',
		array('labels' =>
			array(
				'name' => __('Matches on TV'),
				'singular_name' => __('Match'),
				'add_new' => __('Add New Match')
			),
			'supports' => array('title'),
			'public' => true,
			'menu_icon' => 'dashicons-welcome-view-site',
			'menu_position' => 5
		)
	);

	}

add_action('init', 'create_post_type');



//************************************************/
/* Get my title tag by Mike Sinkula

   https://github.com/msinkula */
/************************************************/

function get_my_title_tag() {

	global $post; // make sure you make this a global variable

	if ( is_front_page() ) {  // for the site’s Front Page

		bloginfo('description'); // retrieve the site tagline

	}

	elseif ( is_page() || is_single() ) { // for your site’s Pages or Postings

		the_title(); // retrieve the page or posting title

	}

	else { // for everything else

		bloginfo('description'); // retrieve the site tagline

	}
	/*
	if ( $post->post_parent ) { // for your site’s Parent Pages

		echo ' | '; // separator with spaces
		echo get_the_title($post->post_parent);  // retrieve the parent page title

	}
	*/
	echo ' | '; // separator with spaces
	bloginfo('name'); // retrieve the site name
	echo ' | '; // separator with spaces
	echo 'Seattle Beer'; // write in the location

}



/************************************************/
/* Get my description by Luis Candelas */
/************************************************/

function get_my_page_description() {

	global $post;

	if ( is_front_page() ){
	  echo 'Traditional English style beer brewed in Seattle\'s Georgetown neighborhood.';
	}
	elseif( is_page ('about') ){
	  echo 'Machine House Brewery has been producing authentic cask-conditioned beer since 2013.';
	}
	elseif( is_page ('beer') ){
	  echo 'Beer with balanced and nuanced flavors for our customers to enjoy.';
	}
	elseif( is_page ('news') ){
	  echo 'Find out about the latest seasonal beer on tap, special announcements &amp; much more!';
	}
	elseif( is_page ('events') ){
	  echo 'Check out our upcoming events! (Art galleries, music, dinners &amp; more!)';
	}
	elseif( is_page ('tasting-room') ){
	  echo 'Always serving cask beer from traditional hand pumps.';
	}
	elseif( is_page ('regulars') ){
	  echo 'A Pint Club! Jump on the annual regular membership.';
	}
	elseif( is_page ('contact') ){
	  echo 'Get in touch! Like us on facebook &amp; follow us on twitter.';
	}
	elseif( in_category ('4') ){
	  echo 'Machine House Brewery News | Seattle Beer';
	}
	elseif( in_category ('5') ){
	  echo 'Machine House Brewery Event | Seattle Beer';
	}
	else {
	  echo 'Machine House Brewery | Authentic traditional English style cask-conditioned beer';
	}

}



/************************************************/
/* Add Single Templates */
/************************************************/


//Define a constant path to our single template folder
define("SINGLE_PATH", TEMPLATEPATH . '/single');

//Filter the single_template with our custom function
add_filter('single_template', 'my_single_template');

//Single template function which will choose our template
function my_single_template($single) {
	global $wp_query, $post;


//Checks for single template by ID
if(file_exists(SINGLE_PATH . '/single-' . $post->ID . '.php'))
		return SINGLE_PATH . '/single-' . $post->ID . '.php';


//Checks for single template by category
// Check by category slug and ID
foreach((array)get_the_category() as $cat) :

	if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
		return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';

	elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
		return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';

endforeach;

//Closing
return $single;

}



/************************************************/
/* FontAwesome */
/************************************************/


function add_font_awesome() {
    wp_enqueue_style('font_awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', false, null);
}
add_action('wp_enqueue_scripts', 'add_font_awesome');



/************************************************/
/* Jetpack Related Title Change */
/************************************************/


function jetpackme_related_posts_headline( $headline ) {
$headline = sprintf(
            '<h3 class="jp-relatedposts-headline"><em>%s</em></h3>',
            esc_html( 'There\'s More!' )
            );
return $headline;
}
add_filter( 'jetpack_relatedposts_filter_headline', 'jetpackme_related_posts_headline' );


function jetpackme_remove_rp() {
    if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
        $jprp = Jetpack_RelatedPosts::init();
        $callback = array( $jprp, 'filter_add_target_to_dom' );
        remove_filter( 'the_content', $callback, 40 );
    }
}
add_filter( 'wp', 'jetpackme_remove_rp', 20 );



/************************************************/
/* Changing the menu name of 'Posts' to 'News'
   on the admin area  */
/************************************************/


function edit_admin_menus() {
    global $menu;

    $menu[5][0] = 'News'; // Change Posts to News
}
add_action( 'admin_menu', 'edit_admin_menus' );




/************************************************/
/* Enqueue Styles  */
/************************************************/

function h5bs_enqueue_styles() {
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '3.0.2');
	wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '2.2.0');

	wp_enqueue_style('normalize');
	wp_enqueue_style('flexslider');

	}

add_action('wp_enqueue_scripts', 'h5bs_enqueue_styles' );


/************************************************/
/* Enqueue Scripts  */
/************************************************/

function h5bs_enqueue_scripts() {
	wp_register_script( 'modernizr' , get_template_directory_uri() . '/js/modernizr.custom.js', array(), '2.6.2', false);
	wp_register_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '2.2.0', true);
	wp_register_script( 'global-js', get_template_directory_uri() . '/js/global.js', array('jquery'), '1.0', true);



	wp_enqueue_script('modernizr');
	wp_enqueue_script('flexslider');
	wp_enqueue_script('global-js');

	}

add_action('wp_enqueue_scripts', 'h5bs_enqueue_scripts' );




/************************************************/
/* Register our sidebars and widgetized areas  */
/************************************************/

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Post sidebar',
		'id'            => 'post_sidebar_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
