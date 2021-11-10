<?php get_header(); ?>

    
    
    <div class="page-title container">
        <h1>Explore Local Organizations</h1>
        <img class="icon-location" src="<?php echo get_template_directory_uri(). '/media/icons/location.svg' ?>">
    </div>
    
    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" class="container filter" method="POST" id="filter">
        
        
        <div class="filter-features">
            
            
            <?php
    		    if( $terms = get_terms( array( 'taxonomy' => 'neighborhoods', 'orderby' => 'name' ) ) ) : 
    	
    			    echo '<select name="neighborhoodfilter" class="neighborhood-filter"><option value="">Explore by neighborhood...</option>';
    			    foreach ( $terms as $term ) :
    				    echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
    			    endforeach;
    			    echo '</select>';
    		    endif;
    	    ?>
    
        
            <?php
    		    if( $terms = get_terms( array( 'taxonomy' => 'org-target-demographic', 'orderby' => 'name' ) ) ) : 
    	
    			    echo '<select name="demographicfilter"><option value="">Explore by target demographic...</option>';
    			    foreach ( $terms as $term ) :
    				    echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
    			    endforeach;
    			    echo '</select>';
    		    endif;
    	    ?>
    	    
    	   
    	    
            <div id="list1" class="dropdown-check-list" tabindex="100">
                <span class="anchor">Explore by organization size...</span>
                <ul id="items" class="items">
                    <li><input type="checkbox" name="organizationLarge" value="1" />Large </li>
                    <li><input type="checkbox" name="organizationMedium" value="1"/>Medium</li>
                    <li><input type="checkbox" name="organizationSmall" value="1" />Small </li>
                </ul>
            </div>
            
        </div>
        
        <div class="filter-btns">
	        <button class="apply-filter">Apply filter</button>
	        <div id="reset" class="reset-filter">Reset Filter</div>
	    </div>
	    
	    <input type="hidden" name="action" value="myfilter">
    </form>
    
    
   
    <div id="response">
    
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
    
<script>

var checkList = document.getElementById('list1');
var items = document.getElementById('items');
        checkList.getElementsByClassName('anchor')[0].onclick = function (evt) {
            if (items.classList.contains('visible')){
                items.classList.remove('visible');
                items.style.display = "none";
            }
            
            else{
                items.classList.add('visible');
                items.style.display = "block";
            }
            
            
        }

        items.onblur = function(evt) {
            items.classList.remove('visible');
        }


var $=jQuery.noConflict();
$("#reset").click(function() { 
		document.getElementById('filter').reset(); 
		$('#response').append();
		
		var filter = $('#filter');
		
		$.ajax({
      		url:filter.attr('action'),
      		type:filter.attr('method'),
			data:filter.serialize(),
      		success:function(data){
         		$('#response').html(data);
       		}
    	});	
    	return false;
});
</script>


<?php get_footer(); ?>