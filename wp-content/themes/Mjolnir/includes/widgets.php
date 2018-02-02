<?php 

function  mjonir_widgets(){
    register_sidebar( array(
        'name'          => __('Sidebar', 'mjonir'),
        'id'            => 'mjonir_sidebar',
        'description'   => __('Sidebar para o tema da mjonir', 'mjonir'),
        'before_widget' => '<div id="%1$s" class="flex-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>'
        
    ));
}