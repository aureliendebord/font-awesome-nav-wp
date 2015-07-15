<?php
//* Do NOT include the opening php tag shown above. Copy the code shown below.

//* Remove the unchosen option

//* Load externally Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
}

//* Load locally Font Awesome externaly
function enqueue_our_required_stylesheets(){
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome/css/font-awesome.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');
