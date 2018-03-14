<?php

    function mjonir_enqueue(){
        // Registrando as folhas de estilo

        // Registra as fontes do Google Fonts
        wp_register_style('mjonir_google_fonts', 'https://fonts.googleapis.com/css?family=Alegreya:900|Lora');

        // Registra o estilo principal
        wp_register_style('mjonir_style', get_template_directory_uri() . '/style.css', array(), false, false );

        // Registra o bootstrap
        wp_register_style('mjonir_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, false );

        // Registra o Normalize
        wp_register_style('mjonir_normalize', get_template_directory_uri() . '/css/normalize.css', array(), false, false);

        // Registra o Font Awesome
        wp_register_style('mjonir_fa-svg', get_template_directory_uri() . '/css/fa-svg-with-js.css', array(), false, false);
        
        // Registra o Font Reset
        wp_register_style('mjonir_reset', get_template_directory_uri() . '/css/reset.css', array(), false, false);



        
        // wp_enqueue_style( 'mjonir_reset' );
        // wp_enqueue_style( 'mjonir_normalize' );
        // wp_enqueue_style( 'mjonir_bootstrap' );
        wp_enqueue_style( 'mjonir_google_fonts' );
        // wp_enqueue_style( 'mjonir_fa-svg' );
        wp_enqueue_style( 'mjonir_style' );

        // Desregistra o jQuery do Wordpress
        wp_deregister_script('jquery');

        // Registra o jQuery Novo
        wp_register_script( 'mjonir_jquery', get_template_directory_uri() . '/js/libs/jquery.js', array(), "3.1.1", true );

        // Registra o Script de Plugins, com dependência do jquery, sem especificar versão e no footer do site
        wp_register_script( 'mjonir_plugins-script', get_template_directory_uri() . '/js/plugins.js', array( 'mjonir_jquery' ), false, true );

        // Registra o Script Principal, com dependência do jquery e plugins, sem especificar versão e no footer do site
        wp_register_script( 'mjonir_main-script', get_template_directory_uri() . '/js/main.js', array( 'mjonir_jquery', 'mjonir_plugins-script' ), false, true );

        // Registra o Modernizr
        wp_register_script( 'mjonir_modernizr', get_template_directory_uri() . '/js/libs/modernizr.custom.45655.js', array(), "4565", true );
    
        // Registra o Font Awesome
        wp_register_script( 'mjonir_font-awesome', get_template_directory_uri() . '/js/fontawesome-all.min.js', array(), false, true );

        // Coloca script no site
        wp_enqueue_script( 'mjonir_modernizr' );
        wp_enqueue_script( 'mjonir_main-script' );
        wp_enqueue_script( 'mjonir_font-awesome' );
    }