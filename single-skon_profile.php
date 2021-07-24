	<?php
get_header();
?>
	<div class="container">
		<div class="columns">
			<div class="column is-full">
				<?php 
					if (have_posts()) :
						while (have_posts()) :
							the_post();
							get_template_part( 'template-parts/content', 'single_profile' ); 
						endwhile;
					endif;
				?>	
			</div> <!-- column is-two-third -->
		</div> <!-- columns-->
	</div> <!-- container -->

<?php
get_footer();
?>
