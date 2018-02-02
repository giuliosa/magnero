<?php

  //Setup
// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

// Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_false' );



// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/custom-post-types/portifolio.php' );
// include( get_template_directory() . '/includes/custom-post-types/produto.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/loja.php' );

// Hooks

//Estilos e JS
add_action( 'wp_enqueue_scripts', 'mjonir_enqueue' );

//Custom post type: Portifolio
add_action('init', 'custom_post_type_portfolio');

//Custom post type: Produto
// add_action('init', 'custom_post_type_produto');

//Registrar o menu
add_action( 'after_setup_theme', 'mjonir_setup_theme');

//Registra o sidebar
add_action('widgets_init', 'mjonir_widgets');

add_action( 'woocommerce_register_form_start', 'cs_wc_extra_register_fields' );

add_action( 'woocommerce_register_post', 'cs_wc_validate_extra_register_fields', 10, 3 );

add_action( 'woocommerce_created_customer', 'cs_wc_save_extra_register_fields' );

//Desregistrar os resultados da lista de produtos
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

//Desregistrar a ordenação da lista de produtos
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

//Desregistrar o sidebar
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

//Desregistrar o woocommerce_breadcrumb
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);


//Shortcodes




// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');

  // Paginação
  // function wordpress_pagination() {
  //           global $wp_query;

  //           $big = 999999999;

  //           echo paginate_links( array(
  //                 'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  //                 'format' => '?paged=%#%',
  //                 'current' => max( 1, get_query_var('paged') ),
  //                 'total' => $wp_query->max_num_pages
  //           ) );
  // }

  

?>
