<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(  
        'post_type' => 'skon_profile',
        'post_status' => 'publish',
        'posts_per_page' => 10, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'paged' => $paged,
        
    );
    $loop = new WP_Query( $args );  
	while ( $loop->have_posts() ) : $loop->the_post(); 
	?>
	<div class="skon_profile_wrapper">
		<div class="columns is-multiline">
		    <div class="column is-one-fifth">
		    	<?php the_post_thumbnail();?>
		    </div>
		    <div class="column is-four-fifth">
		    	<h4 class="has-text-left title is-4 mb-0"><?php print the_title();?></h4>
		    	<?php if (get_field('occupation')): ?>
					<span class="has-text-black is-medium">
						<?php the_field('occupation');?>
					</span>
				<?php endif ?>
				<?php if (get_field('company')): ?>
					<span> at </span>
					<span class="is-medium">
						<?php the_field('company');?>
					</span>
				<?php endif ?>
				
		    </div>
		    <div class="column is-full">
		    	<?php if (get_field('location')): ?>
					<p><?php the_field('location');?></p>	
				<?php endif ?>
				<div class="skon_single_profile_link has-text-left">
					<?php if (get_field('contact_number')): ?>
						<a href="tel:<?php the_field('contact_number');?>" class="button is-link"><i class="fas fa-phone-alt mr-3"></i> Call</a>	
					<?php endif ?>
					<?php if (get_field('website')): ?>
						<a href="<?php the_field('website');?>" class="button is-link"><i class="fas fa-globe mr-3"></i>Website</a>
					<?php endif ?>
					<a href="<?php the_permalink();?>" class="button is-link"><i class="fas fa-user-tag mr-3"></i>View Profile</a>
				</div> <!-- skon_single_profile_link -->
		    </div> <!-- .column is-full -->
		</div> <!-- .columns is-multiline -->
       </div> <!-- .skon_profile_wrapper -->
	<?php
    endwhile;
    ?>
    <div class="skon_pagination">
	    <?php 
	        echo paginate_links( array(
	            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
	            'total'        => $loop->max_num_pages,
	            'current'      => max( 1, get_query_var( 'paged' ) ),
	            'format'       => '?paged=%#%',
	            'show_all'     => false,
	            'type'         => 'plain',
	            'end_size'     => 2,
	            'mid_size'     => 1,
	            'prev_next'    => false,
	            'add_args'     => false,
	            'add_fragment' => '',
	        ) );
	    ?>
	</div>
<?php wp_reset_postdata();?>