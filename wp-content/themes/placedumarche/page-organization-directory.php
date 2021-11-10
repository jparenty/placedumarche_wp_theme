<?php get_header(); ?>

    
    
    <div class="page-title container">
        <h1>Explore Local Organizations</h1>
        <img class="icon-location" src="<?php echo get_template_directory_uri(). '/media/icons/location.svg' ?>">
    </div>
    
    <div class="filter-custom-taxonomy container">
                        <?php
                        $terms = get_terms( 'org-target-demographic' );
                        foreach ( $terms as $term ) : ?>
                        <a href="?getby=cat&cat=<?php echo esc_attr( $term->slug ); ?>">
                                <?php echo esc_html( $term->name ); ?>
                        </a>
                        <?php endforeach; ?>
    </div>
    
    
    <div class="map container">
        <div class="map-padding">
        </div>
        <div class="acf-map">
            <?php
                while ( have_posts() ) { 
                    the_post();
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
        <?php
            while ( have_posts() ) { 
            the_post();
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
        <?php } ?>

    </div>

    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    
    <div class="container">
        <a href="<?php echo get_page_link( get_page_by_title( 'Find Your Ideal Organization' )->ID ); ?>" class="btn-find-ideal-org">
            <div class="btn-find-ideal-org-text">
                Find Your Ideal Organization
            </div>
            <img class="btn-arrow-right" src="<?php echo get_template_directory_uri(). '/media/icons/ic-arrows-right.svg' ?>">
        </a>
    </div>


<?php get_footer(); ?>