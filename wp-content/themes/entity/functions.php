<?php

/****************************************
Theme Setup
*****************************************/

require_once( get_template_directory() . '/lib/init.php' );
require_once( get_template_directory() . '/lib/theme-helpers.php' );
require_once( get_template_directory() . '/lib/theme-functions.php' );
require_once( get_template_directory() . '/lib/theme-comments.php' );


/****************************************
Require Plugins
*****************************************/

require_once( get_template_directory() . '/lib/class-tgm-plugin-activation.php' );
require_once( get_template_directory() . '/lib/theme-require-plugins.php' );

add_action( 'tgmpa_register', 'mb_register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/

// add featured image support
function custom_image_sizes() {
    add_theme_support('post-thumbnails');
	add_image_size('slide', 940, 300, TRUE);
	add_image_size('partners', 102, 43, TRUE);
	add_image_size('feature', 520, 9999, TRUE);
	add_image_size('template-icon', 80, 999, TRUE);
	add_image_size('lightbox-small', 230, 999, TRUE);
	add_image_size('lightbox-large', 1000, 999, TRUE);
	add_image_size('logoicon', 100, 999, TRUE);
	add_image_size('partner', 220, 80, TRUE);
	add_image_size('postthumb', 280, 999, TRUE);
	add_image_size('sideboxfeat', 220, 999, TRUE);
	add_image_size('homefeature', 330, 999, TRUE);
}
add_action('after_setup_theme', 'custom_image_sizes');


// add breadcrumb support
function the_breadcrumb() {

    $sep = '<span>»</span>';

    if (!is_front_page()) {

        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
       	echo 'Home';
        echo '</a>' . $sep;

        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }

        if (is_single()) {
            echo $sep;
            ?>
             <p><?php  the_title(); ?></p>
            <?php
        }
        if (is_page()) {
        ?>
         <p><?php  the_title(); ?></p>
        <?php
        }

        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
}

/**
 * Define custom post type capabilities for use with Members
 */
function mb_add_post_type_caps() {
	// mb_add_capabilities( 'portfolio' );
}

/**
 * Remove width and height from images
 */
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

/**
 * Allow SVG file upload in Wordpress Admin area
 */
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


/**
 * Use same template for all services pages
 */
$page_children = get_pages('child_of=27');
foreach($page_children as $child){
	$current_page_template = get_post_meta($child->ID,'_wp_page_template',true);
	if($current_page_template != 'page-products-single.php') update_post_meta($child->ID,'_wp_page_template','page-products-single.php');
}

function the_url( $url ) {
    return get_bloginfo( 'url' );
}
 
add_filter( 'login_headerurl', 'the_url' );


/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
function mb_filter_yoast_seo_metabox() {
	return 'low';
}

// truncate function
function truncate($string, $limit, $break=" ", $pad="...")
{
	// Remove any formatting first
	$string = strip_tags($string);
	if(strlen($string) <= $limit) return $string;
	if(false !== ($breakpoint = strpos($string, $break, $limit)))
	{
		if($breakpoint < strlen($string) - 1)
		{
			$string = substr($string, 0, $breakpoint) . $pad;
		}
	}
	return $string;
}

 /*-----------------------------------------------------------------------------------*/
/* Custom post type added by Annemarie
/*-----------------------------------------------------------------------------------*/
add_action('init', 'feature_init');
function feature_init() 
{
	//Default arguments
	$args = array
	(
		'public' 						=> true,
		'publicly_queryable'		=> true,
		'show_ui' 			   		=> true, 
		'query_var' 			 	=> true,
		'rewrite' 			   		=> true,
		'capability_type' 	   		=> 'post',
		'has_archive' 		   		=> true, 
		'hierarchical' 		  		=> false,
		'menu_position' 		 	=> NULL,
	);

	
	/* ----------------------------------------------------
	Partner
	---------------------------------------------------- */
	
	$labels = array
	(
		'name'						=> 'Partners',
		'singular_name' 			=> 'Partner',
		'add_new' 			  		=> _x('Add New', 'Partner'),
		'add_new_item' 		 	=> 'Add Partner',
		'edit_item' 					=> 'Edit Partner',
		'new_item' 			 	=> 'New Partner',
		'view_item' 				=> 'View Partners',
		'search_items' 		 	=> 'Search Partners',
		'not_found' 				=> 'No Partners found',
		'not_found_in_trash'  => 'No Partners found in Trash',
		'parent_item_colon' 	=> '',
		'menu_name' 				=> 'Partners'
	);
	
	$args['labels'] 				= $labels;
	$args['supports'] 		  	= array('title','editor','thumbnail');
	$args['rewrite']		   		= array('slug' => 'partners');
	$args['menu_icon']		 	= get_bloginfo('template_directory').'/assets/images/people-admin.png';
	$args['show_in_menu']	= true;
	$args['has_archive']	    = true;
	
	register_post_type('partners', $args);
	
	flush_rewrite_rules();
	
	/* ----------------------------------------------------
	Case Studies
	---------------------------------------------------- */
	
	$labels = array
	(
		'name'						=> 'Case Studies',
		'singular_name' 			=> 'Case Study',
		'add_new' 			  		=> _x('Add New', 'Case Study'),
		'add_new_item' 		 	=> 'Add Case Study',
		'edit_item' 					=> 'Edit Case Studies',
		'new_item' 			 	=> 'New Case Studies',
		'view_item' 				=> 'View Case Studies',
		'search_items' 		 	=> 'Search Case Studies',
		'not_found' 				=> 'No Case Studies found',
		'not_found_in_trash'  => 'No Case Studies found in Trash',
		'parent_item_colon' 	=> '',
		'menu_name' 				=> 'Case Studies'
	);
	
	$args['labels'] 				= $labels;
	$args['supports'] 		  	= array('title','editor','thumbnail');
	$args['rewrite']		   		= array('slug' => 'casestudy');
	$args['menu_icon']		 	= get_bloginfo('template_directory').'/assets/images/people-admin.png';
	$args['show_in_menu']	= true;
	$args['has_archive']	    = true;
	
	register_post_type('casestudies', $args);
	
	flush_rewrite_rules();
}
