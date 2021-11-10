jQuery(function($){
	$('#filter').submit(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
			}
		});
		return false;
	});
});

function resetFilter() {
	document.getElementById('response').innerHTML = 
		`<div class="map container">
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

    </div>`
}	