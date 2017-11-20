<?php
require 'post-types/attorney.php';
require 'post-types/client.php';
add_theme_support('menus');
add_theme_support('post-thumbnails');

function zrpat_enqueue_script() {


    wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/style.css',
        true );

    wp_enqueue_script(
        'jq',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js',
        ['jquery',],
        '1.0.0',
        true );

    wp_enqueue_script(
        'app',
        get_stylesheet_directory_uri() . '/js/app.js',
        ['jquery'],
        '1.0.0',
        true );

    wp_enqueue_script(
        'gm',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyAUnaZkrEmtT3lU74DxOgUFOPEf8QgTPT8'
    );

}
add_action( 'wp_enqueue_scripts' , 'zrpat_enqueue_script' );


  add_action( 'admin_menu', 'remove_menus' );

  function remove_menus() {
      global $menu;
      global $submenu;

      //wyswietla obiekt menu
//       echo '<pre>';
//       print_r($menu);
//       print_r($submenu);
//       echo '</pre>';

      // Menu dla uzytkownika
      // Ukryj niektore menu
      if ( wp_get_current_user()->ID != 1 ) {
          unset($menu[25]); // Usuwa 'Comments'.
          unset($menu[65]); // Usuwa 'Plugins'.
          unset($menu[10]); // Usuwa 'Media'.
          unset($menu[75]); // Usuwa 'Tools'.

      }
  }



