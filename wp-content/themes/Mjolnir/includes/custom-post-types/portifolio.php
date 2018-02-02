<?php

    function custom_post_type_portfolio() {
        register_post_type('portfolio', array(
            'label' => 'Portfolios',
            'description' => 'Portfolios',
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'portfolio', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'editor', 'page-attributes','post-formats'),

            'labels' => array (
                'name' => 'Portfolios',
                'singular_name' => 'Portfolio',
                'menu_name' => 'Portfolios',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Portfolio',
                'edit' => 'Editar',
                'edit_item' => 'Editar Portfolio',
                'new_item' => 'Novo Portfolio',
                'view' => 'Ver Portfolio',
                'view_item' => 'Ver Portfolio',
                'search_items' => 'Procurar Portfolios',
                'not_found' => 'Nenhum Portfolio Encontrado',
                'not_found_in_trash' => 'Nenhum Portfolio Encontrado no Lixo',
            )
        ));
    }