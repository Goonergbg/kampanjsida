<?php
  function kampanj_styles() {
      wp_enqueue_style( 'style.css', get_stylesheet_uri());
      wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css', array(), '5.10.2');
      wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2'); 
      wp_enqueue_style('raleway', "https://fonts.googleapis.com/css?family=Raleway:900");
      wp_enqueue_style('baskersville', "https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700");
      wp_enqueue_script('jquery');
      wp_enqueue_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);
  }
  add_action('wp_enqueue_scripts', 'kampanj_styles');

  add_theme_support('title-tag');

  if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

?>
