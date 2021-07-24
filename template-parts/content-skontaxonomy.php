<div class="skon_profile_wrapper">
	<div class="columns is-multiline">
		<div class="column is-one-fifth">
			<?php the_post_thumbnail();?>
		</div>
		<div class="column is-four-fifth">
			<?php
				the_title( '<h4 class="has-text-left title is-4 mb-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			?>
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
			<!-- Profile Rating -->
			<p>
				<?php echo do_shortcode('[wp-reviews-rating post-id='.$post->ID.' ratting-show="yes" count-show="no" vote-show="yes" vote-text="Reviews" class=""]')?>
			</p>
		</div>
		<div class="column is-full">
			<?php if (get_field('location')): ?>
				<p><?php the_field('location');?></p>	
			<?php endif ?>
			<div class="skon_single_profile_link has-text-left">
				<?php if (get_field('contact_number')): ?>
					<a href="tel:<?php the_field('contact_number');?>" class="button is-link"><i class="fas fa-phone-alt mr-3"></i>Call</a>	
				<?php endif ?>
				<?php if (get_field('website')): ?>
					<a href="<?php the_field('website');?>" class="button is-link"><i class="fas fa-globe mr-3"></i> Website</a>
				<?php endif ?>
				
				<a href="<?php esc_url(the_permalink()) ;?>" class="button is-link"><i class="fas fa-user-tag mr-3"></i>View Profile</a>

			
			</div> <!-- skon_single_profile_link -->
		</div> <!-- .column is-full -->
	</div> <!-- .columns is-multiline -->
</div> <!-- .skon_profile_wrapper -->