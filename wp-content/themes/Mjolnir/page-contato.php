<?php
    // Template Name: Contato

    $home = get_page_by_title('home');

$contato = get_page_by_title('contato');
    
    // Pega o template "header-min"
get_header();

    //Loop do Wordpress;
if (have_posts()) : while (have_posts()) : the_post();
?>

<section class="contato">
    <div class="contato__title">
        <h3>Contate-nos</h3>
        <p>Estamos ansiosos em poder ajudá-lo a melhorar seu negócio. Entre em contato conosco para saber mais sobre nossa agência, nossos planos, serviços e valores.</p>
    </div>

</section>


<?php include(TEMPLATEPATH . '/inc/contato.php'); ?>


<?php
    //Fim do loop do wordpress
endwhile;
else : endif;

    //Pega o template do footer
get_footer();
?>
