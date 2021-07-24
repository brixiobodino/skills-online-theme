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
		    <div class="column is-one-fifth has-text-centered">
		    	<?php the_post_thumbnail();?>
		    	<p class="has-text-weight-bold mt-5">
		    		<?php
						the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
					?>
		    	</p>
		    </div>
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