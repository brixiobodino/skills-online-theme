<div class="skon_profile_wrapper">
	<div class="column is-full p-0">
		<?php
			$file3 = get_field('intro_video');
			if( $file3 ):
			$video_id3= substr($file3 , -11);  
		?>
	    	<iframe src="https://www.youtube.com/embed/<?php echo $video_id3 ?>" width="100%" height="500"></iframe>
		<?php endif; ?>
	</div>
	<div class="profile_content px-6 py-5">
		<div class="column is-full">
			<h3 class="title is-3 profile_title">
				<?php print the_title();?>
			</h3>
			<p class="has-text-centered">
				<?php if (get_field('occupation')): ?>
					<span class="has-text-black is-medium">
						<?php the_field('occupation');?>
					</span>
				<?php endif ?>	
				<?php if (get_field('company')): ?>
					<span class="has-text-black"> at </span>
					<span class="is-medium has-text-black">
						<?php the_field('company');?>
					</span>
				<?php endif ?>
			</p>
		</div>
		<div class="column is-full skon_single_profile_link has-text-centered mb-5">
			<?php if (get_field('contact_number')): ?>
				<a href="tel:<?php the_field('contact_number');?>" class="button is-link"><i class="fas fa-phone-alt mr-3"></i>Call</a>	
			<?php endif ?>
			<?php if (get_field('website')): ?>
				<a href="<?php the_field('website');?>" class="button is-link"><i class="fas fa-globe mr-3"></i> Website</a>
			<?php endif ?>
		</div> <!-- skon_single_profile_link -->
		<div class="column is-full has-text-black">
		    <?php the_content(); ?>
		</div>
		
		<!-- PORTFOLIO VIDEO URL -->
		<?php if (!empty(get_field('portfolio-video'))):?>
			<h4 class="title is-4">My Portfolio</h4>
			<div class="spacer"></div>
			<div class="columns is-multiline mb-6">
			<?php
				$string = get_field('portfolio-video');
				$regex = '/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:.;]*[A-Z0-9+&@#\/%=~_|$]/i';
				preg_match_all($regex, $string, $matches);
				$urls = $matches[0];
				foreach($urls as $url) 
				{		
    		?>
    			<div class="column is-one-third">
    				<iframe src="https://www.youtube.com/embed/<?php echo substr($url , -11); ?>" width="100%" height="250"></iframe>
    			</div>
   			<?php }?>
   		</div>
   		<?php endif; ?> <!-- END OF MY PORTFOLIO -->

   		<!-- TRAVEL VIDEO URL -->
		<?php if (!empty(get_field('travel-video'))):?>
			<h4 class="title is-4">My Travels and Adventures</h4>
			<div class="spacer"></div>
			<div class="columns is-multiline mb-6">
			<?php
				$string = get_field('travel-video');
				$regex = '/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:.;]*[A-Z0-9+&@#\/%=~_|$]/i';
				preg_match_all($regex, $string, $matches);
				$urls = $matches[0];
				foreach($urls as $url) 
				{		
    		?>
    			<div class="column is-one-third">
    				<iframe src="https://www.youtube.com/embed/<?php echo substr($url , -11); ?>" width="100%" height="250"></iframe>
    			</div>
   			<?php }?>
   		</div>
   		<?php endif; ?> <!-- END OF TRAVEL VIDEO URL -->


		<!-- MY NETWORK -->
		<?php
			if (!empty(get_field('gallery'))):
		?>
			<h4 class="title is-4">My Network</h4>
			<div class="spacer"></div>
			<div class="columns is-multiline mb-6">
			<?php
				$string = get_field('gallery');
				$regex = '/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:.;]*[A-Z0-9+&@#\/%=~_|$]/i';
				preg_match_all($regex, $string, $matches);
				$urls = $matches[0];
				foreach($urls as $url) 

				{		
    		?>
    			<div class="column is-one-third">
    				<img src="<?php echo $url ?>" style="height: 221px">
    			</div>
   			<?php }?>
		</div>
		<?php
			endif;	
		?> <!-- END OF MY NETWORK -->
		
	
		<div class="columns is-multiline">
			<div class="column is-full">
				<h4 class="title is-4">Members Directory</h4>
				<div class="spacer"></div>
			</div>
			<?php get_template_part( 'template-parts/content', 'memberList' );  ?>
		</div>
		<div class="columns mt-6">
			<div class="column is-half has-text-centered">
				<p class="is-uppercase">Work</p>
				<p class="has-text-black">
					<?php if (get_field('occupation')): ?>
						<span class="has-text-black is-medium">
							<?php the_field('occupation');?>
						</span>
					<?php endif ?>
					<?php if (get_field('company')): ?>
						<span> - </span>
						<span class="is-medium">
							<?php the_field('company');?>
						</span>
					<?php endif ?>
				</p>
			</div>
			<div class="column is-half has-text-centered">
				<p class="is-uppercase">Education</p>
				<p class="has-text-black">
					<?php if (get_field('education')): ?>
						<span class="has-text-black is-medium">
							<?php the_field('education');?>
						</span>
					<?php endif ?>
					<?php if (get_field('course')): ?>
						<span> - </span>
						<span class="is-medium">
							<?php the_field('course');?>
						</span>
					<?php endif ?>
				</p>
			</div>
		</div>
		<!-- SOCIAL MEDIA LINK -->
		<div class="column is-full has-text-centered skon_socials">
			<?php if (get_field('email_address')): ?>
				<a class=" skon_email_link" href="mailto:<?php echo the_field('email_address');?>"><i class="fas fa-envelope"></i></a>
			<?php endif ?>
			<!-- Linkedin -->
			<?php if (get_field('linkedin')): ?>
				<a href="<?php echo the_field('linkedin');?>"><i class="fab fa-linkedin-in"></i></a>
			<?php endif ?>
			<!-- Twitter -->
			<?php if (get_field('twitter')): ?>
				<a href="<?php echo the_field('twitter');?>"><i class="fab fa-twitter"></i></a>
			<?php endif ?>
			<!-- Youtube -->
			<?php if (get_field('youtube')): ?>
				<a href="<?php echo the_field('youtube');?>"><i class="fab fa-youtube"></i></a>
			<?php endif ?>
			<!-- Youtube -->
			<?php if (get_field('facebook')): ?>
				<a href="<?php echo the_field('facebook');?>"><i class="fab fa-facebook"></i></a>
			<?php endif ?>
		</div>
	</div>
</div> <!-- .skon_profile_wrapper -->
<?php echo do_shortcode('[wp-reviews]') ?>





				
		