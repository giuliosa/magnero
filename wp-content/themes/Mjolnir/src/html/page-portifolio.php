<?php
  // Template Name: Portfolio

  get_header();
 ?>
<?php 
    if (have_posts()) : while (have_posts()) : the_post(); 

     $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

      $args = array (
        'post_type' => 'portfolio',
        'orderby' => 'title',
        'order'   => 'ASC',
        'nopaging' => true
    );
    $the_query = new WP_Query ( $args );
?>

<section class="contato">
    <div class="contato__title">
        <h3>Nossos Cases de Sucesso</h3>
        <p>Conheça um pouco dos trabalhos que já fizemos e também dos resultados que alcançamos com cada um deles</p>
    </div>

</section>
            


<section class="lista">
    <div class="lista__coluna">
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <div class="lista__coluna__linha">
                <div class="lista__coluna__linha__head">
                    <h5 class="lista__coluna__linha__head--title"><?php the_title(); ?></h5>
                    <div class="lista__coluna__linha__head--text">
                        <span> <?php the_field('data'); ?></span>                        

                        <button onClick="location.href='<?php the_permalink();?>'">Ver Mais</button>

                    </div>
                </div>
                <div class="lista__coluna__linha__body">
                    <img src="<?php the_field('imagem_principal');?>" alt="imagem de um trabalho">
                </div>
            </div>
            
        <?php endwhile; else: endif; ?>
        <?php wp_reset_query(); wp_reset_postdata(); ?>
    </div>
</section>

<?php endwhile; else: endif?>
<?php get_footer(); ?>
