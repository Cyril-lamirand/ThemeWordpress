<section>
	<div class="text-center">
		<h5>Recherche</h5>
	</div>

	<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="col-12">
			<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		</div>
    	<div class="row justify-content-center">

			<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" style="margin-right: 5px;" />

			<div class="text-center">
    			<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
    		</div>
     	
    	</div>
	</form>

</section>