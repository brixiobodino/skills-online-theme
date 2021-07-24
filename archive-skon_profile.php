<?php
get_header();
?>

<section class="section">
	<div class="container">
		<div class="mb-6">
			<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
		</div>
		<h5 class="has-text-black title is-5 mb-5 has-text-weight-bold">List of Profiles</h5>
		<div class="columns">
			<div class="column is-two-third">
				<?php 
				if (have_posts()) :
					while (have_posts()) :
						the_post();
						get_template_part( 'template-parts/content', 'skontaxonomy' ); 
					endwhile;
    				the_posts_navigation();
				else:
				echo "No results Found";
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