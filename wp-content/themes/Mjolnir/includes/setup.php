<?php

function mjonir_setup_theme(){

    // Fazer com que o Worpdress cuide do title tag para você ;)
    add_theme_support( 'title-tag' );

    //add_theme_support('custom-logo');

    add_theme_support('woocommerce');

    // Habilitar thumbnails
    add_theme_support('post-thumbnails');

    // Habilitar Menus
    add_theme_support('menus');

    // Registrar o Menu
    register_nav_menu( 'header-menu', __( 'Header Menu', 'mjonir' ) );
    

}

