<?php get_header(); ?>

    <div class="page-title container">
        <h1>Explore Local Organizations</h1>
        <img class="icon-location" src="<?php echo get_template_directory_uri(). '/media/icons/location.svg' ?>">
    </div>
    <div class="single-org container">
        <h1 class="org-title">
            <?php echo the_title(); ?>
        </h1>
        <div class="single-org-row">
            <div class="single-org-logo">
                <img class="org-logo" src="<?php the_post_thumbnail_url('medium');?>">
            </div>
            <div class="single-org-content">
                <p><?php echo the_content(); ?></p>
            </div>
        </div>
        <div class="single-org-categories">
            <div class="single-org-target">
                <h3 class="org-category-title">
                    Target demographic
                </h3>
                <?php 
                $terms = get_the_terms($post->ID, 'org-target-demographic');
                if ( $terms != null ) {
                    echo "<ul class='org-target-list'>";
                    foreach ( $terms as $term ) {
                        echo "<li class='list-element'>" . $term->name . "</li>";
                    }
                    echo "</ul>";
                    unset($term);
                }
                ?> 
            </div>
            <div class="single-org-service">
                <h3 class="org-category-title">
                    Service provided
                </h3>
                <?php 
                $terms = get_the_terms($post->ID, 'org-services-provided');
                if ( $terms != null ){
                    echo "<ul class='org-service-list'>";
                    foreach ( $terms as $term ) {
                        echo "<li class='list-element'>" . $term->name . "</li>";
                    }
                    echo "</ul>";
                    unset($term);
                }
                ?>
            </div>
            <div class="single-org-contact">
                <h3 class="org-category-title">
                    Contact
                </h3>
                <ul class="org-contact-list">
                    <li class="list-element">Org tel number</li>
                    <li class="list-element">Org email</li>
                    <li class="list-element"><?php $mapLocation = get_field('address'); echo $mapLocation['address']; ?></li>
                </ul>    
            </div>
        </div>
        <div class="single-org-map-contact">
            <div class="map">
                <div class="acf-map"">
			        <?php
        	            $mapLocation = get_field('address');
      		        ?>
        	        <div class="marker" data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
          		        <h3><?php the_title(); ?></h3>
          		        <?php echo $mapLocation['address']; ?>
        	        </div>			
		        </div>
            </div>
            
        </div>
        <div class="single-role-org">
            <h3 class="org-category-title">
                How you can help?
            </h3>
            <?php 
                $terms = get_the_terms($post->ID, 'org-available-roles');
                if ( $terms != null ){
                    echo "<ul class='org-roles-list'>";
                    foreach ( $terms as $term ) {
                        echo "<li class='list-element'>" . $term->name . "</li>";
                    }
                    echo "</ul>";
                    unset($term);
                }
            ?>
            <a href="<?php echo the_field('volunteer_link'); ?>" class="btn-volunteer" target="_blank">
                        <div class="btn-readmore-text">
                            Volunteer
                        </div>
                        <img class="btn-arrow-right" src="<?php echo get_template_directory_uri(). '/media/icons/ic-arrows-right.svg' ?>">
            </a>
        </div>
        <div class="single-btn-redirect">
            <a href="<?php echo get_page_link( get_page_by_title( 'Organization Directory' )->ID ); ?>" class="btn-org-directory">
                <div class="btn-readmore-text">
                    Explore Other Organizations
                </div>
                <img class="btn-arrow-right" src="<?php echo get_template_directory_uri(). '/media/icons/ic-arrows-right.svg' ?>">
            </a>
            <a href="<?php echo get_page_link( get_page_by_title( 'Find Your Ideal Organization' )->ID ); ?>" class="btn-ideal-org">
                <div class="btn-find-ideal-org-text">
                    Find Your Ideal Organization
                </div>
                <img class="btn-arrow-right" src="<?php echo get_template_directory_uri(). '/media/icons/ic-arrows-right.svg' ?>">
            </a>
        </div>
    </div>
    


<?php get_footer(); ?>