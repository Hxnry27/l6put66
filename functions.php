<?php


function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'header' => __( 'Header' ),
      'footer' => __( 'Footer' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

?>

