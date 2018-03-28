<?php
    //Template Name: Sorteio
    get_header('sorteio');
    //Loop do Wordpress;
    if (have_posts()) : while (have_posts()) : the_post();
?> 
   
<section class="sorteio">
    <header class="sorteio__header">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-white-shadow.png" alt="Logo Magnero">
    </header>
    <div class="sorteio__conteiner">
        <div class="sorteio__conteiner__texto">
            <h2>A promoção encerrou. Fique atento em nosso canal do Youtube para o resultado</h2>
            <button onClick="location.href='https://www.youtube.com/channel/UCUGB9ZUpwxrln0DCCr1G5gA'">Magnero TV</button>
        </div>
        <div class="sorteio__conteiner--video">
            <?php the_field('video_sorteio'); ?>
        </div>
        
    </div>
</section>

<?php
    endwhile;    else : endif;
    //Pega o template do footer
    get_footer('sorteio');
?>
