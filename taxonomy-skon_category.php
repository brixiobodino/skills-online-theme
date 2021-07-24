<?php
get_header();
?>
<section class="section">
	<div class="container">
		<div class="mb-6">
			<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
		</div>
		<div class="columns is-multiline">
			<div class="column is-full">
				<?php
					$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				?> 
				<h6 class="is-uppercase">Skills : <?php echo $term->name; ?> </h6>
			</div>
			<div class="column is-two-third">
				<?php 
				if (have_posts()) :
					while (have_posts()) :
						the_post();
						get_template_part( 'template-parts/content', 'skontaxonomy' ); 
					endwhile;
    				the_posts_navigation();
				else:
				?>
				<div class="">
					<p class="has-text-black">No Profile was found</p>
				</div>
				<?php
				
				endif;
				?>
			</div> <!-- column is-two-third -->
			<div class="column is-one-third">
				<?php get_sidebar('skon')?>
			</div>
		</div> <!-- columns-->
	</div> <!-- container -->
</section>
<?php
get_footer();
?>