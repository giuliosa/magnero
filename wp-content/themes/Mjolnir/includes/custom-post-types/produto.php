<?php

    // Custom post type - produtos
    function custom_post_type_produto(){
        register_post_type('produto', array(
            'label' => 'produtos',
            'description' => 'produtos',
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'produto', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),

            'labels' => array(
            'name' => 'Produtos',
            'singular_name' => 'Produto',
            'menu_name' => 'Produtos',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Produto',
            'edit' => 'Editar',
            'edit_item' => 'Editar Produto',
            'new_item' => 'Novo Produto',
            'view' => 'Ver Produto',
            'view_item' => 'Ver Produto',
            'search_items' => 'Procurar Produtos',
            'not_found' => 'Nenhum Produto Encontrado',
            'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
        )
        
    ));
    flush_rewrite_rules();
}