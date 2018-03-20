<?php

    function mjonir_enqueue(){
        // Registrando as folhas de estilo

        // Registra as fontes do Google Fonts
        wp_register_style('mjonir_google_fonts', 'https://fonts.googleapis.com/css?family=Alegreya:900|Lora');

        // Registra o estilo principal
        wp_register_style('mjonir_style', get_template_directory_uri() . '/style.css', array(), false, false );

        wp_enqueue_style( 'mjonir_google_fonts' );
        wp_enqueue_style( 'mjonir_style' );

        // Desregistra o jQuery do Wordpress
        wp_deregister_script('jquery');

        wp_register_script( 'mjonir_main-script', get_template_directory_uri() . '/js/main.js', array(), false, true );

        wp_enqueue_script( 'mjonir_main-script' );
    }