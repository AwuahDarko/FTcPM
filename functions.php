<?php 

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';



// theme support

function ftcmp_theme_setup(){
    add_theme_support('post-thumbnails');


    register_nav_menus( array(
        'primary' => __('Primary Menu')
    ));
}


add_action('after_setup_theme', 'ftcmp_theme_setup');



function ftcmp_set_excerpt_length(){
    return 10;
}

add_filter('excerpt_length','ftcmp_set_excerpt_length');


if ( !function_exists( 'wpex_pagination' ) ) {
	
	function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}


// widget location

function ftcmp_init_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-box ftco-animate">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'OnShowCaseImageLeftBox',
		'id' => 'onshowcaseimageleftbox',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
	register_sidebar(array(
		'name' => 'OnShowCaseImageMiddleBox',
		'id' => 'onshowcaseimagemiddlebox',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
	register_sidebar(array(
		'name' => 'OnShowCaseImageRightBox',
		'id' => 'onshowcaseimagerightbox',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));

	// how it works
	register_sidebar(array(
		'name' => 'HowItWorksStep1',
		'id' => 'howitworksstep1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));

	register_sidebar(array(
		'name' => 'HowItWorksStep2',
		'id' => 'howitworksstep2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));

	register_sidebar(array(
		'name' => 'HowItWorksStep3',
		'id' => 'howitworksstep3',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));

	// register_sidebar(array(
	// 	'name' => 'HowItWorksStep4',
	// 	'id' => 'howitworksstep4',
	// 	'before_widget' => '<div>',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h2>',
	// 	'after_title' => '</h2>'
	// ));

	// register_sidebar(array(
	// 	'name' => 'HowItWorksStep5',
	// 	'id' => 'howitworksstep5',
	// 	'before_widget' => '<div>',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h2>',
	// 	'after_title' => '</h2>'
	// ));

	// register_sidebar(array(
	// 	'name' => 'HowItWorksStep6',
	// 	'id' => 'howitworksstep6',
	// 	'before_widget' => '<div>',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h2>',
	// 	'after_title' => '</h2>'
	// ));

	// register_sidebar(array(
	// 	'name' => 'HowItWorksStep7',
	// 	'id' => 'howitworksstep7',
	// 	'before_widget' => '<div>',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h2>',
	// 	'after_title' => '</h2>'
	// ));


	// testimonials
		register_sidebar(array(
			'name' => 'Testimony1',
			'id' => 'testimony1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
		));

		register_sidebar(array(
			'name' => 'Testimony2',
			'id' => 'testimony2',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
		));

		register_sidebar(array(
			'name' => 'Testimony3',
			'id' => 'testimony3',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
		));

		register_sidebar(array(
			'name' => 'Testimony4',
			'id' => 'testimony4',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
		));

		register_sidebar(array(
			'name' => 'Testimony5',
			'id' => 'testimony5',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
		));

}


add_action('widgets_init', 'ftcmp_init_widgets');

// customizer file
require get_template_directory(). '/includes/cutomizer.php';