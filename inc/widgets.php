<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function atlantis_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'atlantis' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'atlantis' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'atlantis_widgets_init' );