<?php get_header(); ?> 

<section class="contato">
    <div class="contato__title">
        <h3><?php _e('Você procurou por:', 'mjonir'); ?> <?php echo get_search_query(); ?></h3>
    </div>

</section>

    <?php 
        if (have_posts()) : while (have_posts()) : the_post();
    
        get_sidebar('top'); 
        get_template_part('inc/post/content-excerpt');
    ?>

<?php
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
