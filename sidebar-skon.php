
				<div class="skon_arc_sidebar">
					<?php echo do_shortcode('[searchandfilter fields="search,skon_category,location"  headings=",Skills,Location" submit_label="Filter"]'); ?>
				</div>
				<div class="has-background-white py-4 px-4 my-4">
					<?php
						$args = array(
						'type'                     => 'skon_profile',
						'child_of'                 => 0,
						'parent'                   => '',
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 1,
						'hierarchical'             => 1,
						'taxonomy'                 => 'skon_category',
						'pad_counts'               => false );
						$categories = get_categories($args);
						?>
						<p class="has-text-black">Categories</p>
						<ul>
							<?php
								foreach ($categories as $category) {
							 		$url = get_term_link($category);?>
							 		<li><a href="<?php echo $url;?>"><?php echo $category->name; ?></a></li>
							 <?php
								}
							?>
						</ul>
				</div>
				<div class="has-background-white py-4 px-4 my-4">
					<?php
						$args = array(
						'type'                     => 'skon_profile',
						'child_of'                 => 0,
						'parent'                   => '',
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 1,
						'hierarchical'             => 1,
						'taxonomy'                 => 'location',
						'pad_counts'               => false );
						$categories = get_categories($args);
						?>
						<p class="has-text-black">Locations</p>
						<ul>
							<?php
								foreach ($categories as $category) {
							 		$url = get_term_link($category);?>
							 		<li><a href="<?php echo $url;?>"><?php echo $category->name; ?></a></li>
							 <?php
								}
							?>
						</ul>
				</div>
			