<?php

	function skon_styles() {
		wp_enqueue_style( 'bulma', 'https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css',false, '1','all' );
		wp_enqueue_style( 'skon_child_style', get_stylesheet_uri(), array(), 1, $media = 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'skon_styles' );
	
	function skon_widget() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'SkOn Profile List Sidebar', 'skon-theme' ),
				'id'            => 'skon-profile-sidebar',
				'description'   => esc_html__( 'Add widgets here.', 'skon-theme' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title title is-5">',
				'after_title'   => '</h2>',
			)
		);
	}
	add_action( 'widgets_init', 'skon_widget' );

function skon_profile_background(){
	?>
	 <style type="text/css">
	 	.single-skon_profile div#content {
	 		background: url(<?php the_field('profile_background'); ?>) !important;
	 		
	 		background-repeat: no-repeat;
	 		margin:0;
	 		padding-top:60px;
	 		padding-bottom:60px;
	 		background-attachment: fixed !important;
	 	}
	 	footer#colophon{
	 		margin-top: 0;
	 	}
	 </style>
<?php
}
add_action('wp_head','skon_profile_background');
?>
