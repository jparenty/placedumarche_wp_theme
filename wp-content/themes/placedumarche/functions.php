<?php

function load_stylesheets() {
    
    
    // wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    // wp_enqueue_style('bootstrap');
    
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    
}

//add_action('wp_enqueue_scripts', 'load_stylesheets');


function loadjs() {

//     wp_deregister_script('jquery');
// 	wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), null, true);        
    
//     wp_register_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js' , array(), null, true);
//     wp_enqueue_script('popperjs');
    
//     wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true);
//     wp_enqueue_script('bootstrapjs');

    // other necessary bootstrap files imported at the bottom of footer.php
    // reason: it seems like bootstrap 4 doesn't properly support dropdown in navbar so had to use bootstrap 3.1.1
    
    wp_register_script('headerjs', get_template_directory_uri() . '/js/header.js', array(), null, true);
    wp_enqueue_script('headerjs');
    
    wp_register_script('filterjs', get_template_directory_uri() . '/js/filter.js', array(), null, true);
    wp_enqueue_script('filterjs');
    
    wp_register_script('counterjs', get_template_directory_uri() . '/js/counter.js', array(), null, true);
    wp_enqueue_script('counterjs');
    
    wp_register_script('fadeAnimationjs', get_template_directory_uri() . '/js/fadeAnimation.js', array(), null, true);
    wp_enqueue_script('fadeAnimation');
    
}

add_action('wp_enqueue_scripts', 'loadjs');


add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

function wpb_custom_new_menu() {
    register_nav_menus(
    
        array(
            'navigation-menu' => __('Navigation Menu'),
            'footer-menu' => __('Footer Menu')
        )
        
    );
}
add_action('init', 'wpb_custom_new_menu');

add_image_size('small', 300, 300, false);
add_image_size('medium', 800, 800, false);


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//Google map api key
function my_acf_init() {
    acf_update_setting('google_api_key',  'AIzaSyBqPLjnWb4JjogcbtIJtx42b5r4MeMeDa0');
}

add_action('acf/init', 'my_acf_init');

function google_maps_scripts() {
  if (!is_admin()) {
    wp_register_script('googlemapsapi', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBqPLjnWb4JjogcbtIJtx42b5r4MeMeDa0', array(), '', false);
    wp_enqueue_script('googlemapsapi');
    
    wp_register_script('markercluster', 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js', array(), '', false);
    wp_enqueue_script('markercluster');
      
    wp_register_script('gmaps-init', get_stylesheet_directory_uri().'/js/gmaps.js', array('jquery'), '', false);
    wp_enqueue_script('gmaps-init');
  } 
}

add_action('wp_enqueue_scripts', 'google_maps_scripts', 100);

// alter the main query to set the default post type to organization

function search_filter($query) {
    if ( ! is_admin() && $query->is_main_query() && is_home() ) {
        $query->set( 'post_type', 'pdm_organization' );
        $query->set( 'posts_per_page', -1 );
        
    }
}
add_action( 'pre_get_posts', 'search_filter' );


add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

function misha_filter_function(){
	$args = array(
		'post_type' => 'pdm_organization',
		'posts_per_page' => -1
	);
    
     if( !empty( $_POST['neighborhoodfilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'neighborhoods',
				'field' => 'id',
				'terms' => $_POST['neighborhoodfilter']
			)
			
		);
		
	 if( !empty( $_POST['demographicfilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'org-target-demographic',
				'field' => 'id',
				'terms' => $_POST['demographicfilter']
			)
			
		);
    
	// for taxonomies / categories
	if( !empty($_POST['demographicfilter']) && !empty($_POST['neighborhoodfilter']) )

		$args['tax_query'] = array(
		array(
				'taxonomy' => 'neighborhoods',
				'field' => 'id',
				'terms' => $_POST['neighborhoodfilter']
			),
		array(
				'taxonomy' => 'org-target-demographic',
				'field' => 'id',
				'terms' => $_POST['demographicfilter']
		    )
	    );
    
    // only large org size
    if( $_POST['organizationLarge'] == 1  && $_POST['organizationSmall'] == 0 && $_POST['organizationMedium'] == 0)
        $args['meta_query'][] = array(
			'key' => 'organization_size',
			'value' => 'Large',
			'compare' => 'IN'
		);
	
	// only medium org size	
	if( $_POST['organizationLarge'] == 0  && $_POST['organizationSmall'] == 0 && $_POST['organizationMedium'] == 1 )
        $args['meta_query'][] = array(
			'key' => 'organization_size',
			'value' => 'Medium',
			'compare' => 'IN'
		);

    // 	only small org size	
	if( $_POST['organizationLarge'] == 0  && $_POST['organizationSmall'] == 1 && $_POST['organizationMedium'] == 0 )
        $args['meta_query'][] = array(
			'key' => 'organization_size',
			'value' => 'Small',
			'compare' => 'IN'
		);
    
    // when small and medium org size is checked
    if( $_POST['organizationLarge'] == 0  && $_POST['organizationSmall'] == 1 && $_POST['organizationMedium'] == 1 )
        $args['meta_query'][] = array(
            'relation'		=> 'OR',
            array(
			    'key' => 'organization_size',
			    'value' => 'Small',
			    'compare' => 'IN'
			),
			array(
			   'key' => 'organization_size',
			    'value' => 'Medium',
			    'compare' => 'IN' 
			)
		);
    
    // when medium and large is checked
    if( $_POST['organizationLarge'] == 1  && $_POST['organizationSmall'] == 0 && $_POST['organizationMedium'] == 1 )
        $args['meta_query'][] = array(
            'relation'		=> 'OR',
            array(
			    'key' => 'organization_size',
			    'value' => 'Large',
			    'compare' => 'IN'
			),
			array(
			   'key' => 'organization_size',
			    'value' => 'Medium',
			    'compare' => 'IN' 
			)
		);
		
	// when small and large is checked
	if( $_POST['organizationLarge'] == 1  && $_POST['organizationSmall'] == 1 && $_POST['organizationMedium'] == 0 )
        $args['meta_query'][] = array(
            'relation'		=> 'OR',
            array(
			    'key' => 'organization_size',
			    'value' => 'Large',
			    'compare' => 'IN'
			),
			array(
			   'key' => 'organization_size',
			    'value' => 'Small',
			    'compare' => 'IN' 
			)
		);
    
    // when small, medium and large is checked
    if( $_POST['organizationLarge'] == 1  && $_POST['organizationSmall'] == 1 && $_POST['organizationMedium'] == 1 )
        $args['meta_query'][] = array(
            'relation'		=> 'OR',
            array(
			    'key' => 'organization_size',
			    'value' => 'Large',
			    'compare' => 'IN'
			),
			array(
			   'key' => 'organization_size',
			    'value' => 'Small',
			    'compare' => 'IN' 
			),
			array(
			   'key' => 'organization_size',
			    'value' => 'Medium',
			    'compare' => 'IN' 
			)
		);
    
   
    
	$query = new WP_Query( $args );
	
	if( $query->have_posts() ) :
	    ?>
	   <div class="map container">
            <div class="map-padding">
            </div>
            <div class="acf-map">
                <?
		            while( $query->have_posts() ){ 
		                $query->the_post();
		                $mapLocation = get_field('address');
    			        $brief_descritpion = get_field('brief_descritpion');
	            ?>
        	    <div class="marker" data-lat="<?php echo $mapLocation['lat']?>" data-lng="<?php echo $mapLocation['lng']?>">
				    <div class="info-window" style="width: 300px; text-align: justify">
            		    <h3 style="text-align: center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					    <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="300">
					    <p style="text-align: justify"><?php echo $brief_descritpion; ?></p>
            		    <?php echo $mapLocation['address'];?>
				    </div>
        	    </div>
  		        <?php  
  			        }
		        ?>
	        </div>
            <div class="map-padding">
            </div>
        </div>
    
        <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    
	    <div class="org-list container">
		    <?
		        while( $query->have_posts() ): $query->the_post(); 
	        ?>
                <div class="org-container">

                    <div class="org-logo-container">
                        <span class="helper"></span>
                        <img class="org-logo" src="<?php the_post_thumbnail_url('medium');?>">
                    </div>
                    
                    <h1 class="org-title"> <?php the_title(); ?> </h1>
                    <p class="org-descrption">
                        <?php the_field('brief_descritpion'); ?>
                    </p>
                    <a href="<?php the_permalink() ?>" class="btn-readmore">
                        <div class="btn-readmore-text">
                            Read More
                        </div>
                        <img class="btn-arrow-right" src="<?php echo get_template_directory_uri(). '/media/icons/ic-arrows-right.svg' ?>">
                    </a>
                    
                </div>
		    <?
		        endwhile;
		    ?>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://myplacedumarche.com/test/wp-content/themes/placedumarche/js/gmaps.js"></script>

		<?
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;
	
	die();
}
