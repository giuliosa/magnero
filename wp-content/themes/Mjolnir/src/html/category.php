<?php
    
get_header();

    //Loop do Wordpress;
    ?> 

<section class="contato">
    <div class="contato__title">
        <h3><? the_archive_title(); ?></h3>
        <p>Gostaria de enfatizar que a consulta aos diversos militantes representa uma abertura para a melhoria do levantamento das variáveis envolvidas.</p>
    </div>

</section>

<?php
    if (have_posts()) : while (have_posts()) : the_post();
    get_sidebar('top'); 
    get_template_part('inc/post/content-excerpt');

    //Fim do loop do wordpress
    endwhile;
    else : endif; 
?>
<footer class="pagination">
    <ul class="pagination__lista">
        <li class="pagination__lista--left"><?php next_posts_link('<i class="fas fa-angle-left"></i> Antigos'); ?></li>
        <li class="pagination__lista--right"><?php previous_posts_link(' Novos <i class="fas fa-angle-right"></i>'); ?></li>
    </ul>
</footer>

<?php

    //Pega o template do footer
get_footer();
?>
