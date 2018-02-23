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
            <h2>PROMOÇÃO: Ganhe um vídeo produzido GRATUITAMENTE pela Magnero!</h2>
            <button onClick="location.href='#se-inscreva'">participe agora</button>
        </div>
        <div class="sorteio__conteiner--video">
            <?php the_field('video_sorteio'); ?>
        </div>
        
    </div>
</section>

<section class="regras">
    <div class="regras__body">
        <h3>Entenda como funciona</h3>
        <p>
            A Magnero está inaugurando sua loja virtual e, para comemorar, vai sortear um vídeo de até 
            1 minuto produzido por nossa equipe. Pode ser vídeo institucional, clipe musical, vlog para Youtube, 
            dentre outros. E você ainda pode escolher se vai querer o vídeo em live action ou animação.
            A produção do vídeo INCLUI:
        </p>

        <ul>
            <li>Gravação</li>
            <li>Vinheta</li>
            <li>Edição</li>
            <li>Locução (temos várias opções de voz)</li>
        </ul>

        <p>
            A produção NÃO INCLUI: 
        </p>
        <ul>
            <li>Locação</li>
            <li>Imagens aéreas</li>
            <li>Atores/ Atrizes</li>
            <li>Figurantes</li>
            <li>Apresentadores</li>
        </ul>

        <p>
            O sorteio será realizado no dia 28/03/2018 às 20:00 ao vivo no lançamento
            do nosso canal no Youtube (Agência Magnero). O resultado também será divulgado
            em nossas redes sociais (Facebook e Instagram) e em nosso site.
            Não perca essa oportunidade e compartilhe nossa promoção com seus amigos!
        </p>
        <button onClick="location.href='#se-inscreva'">Inscreva-se</button>
    </div>
    <aside class="regras__aside"></aside>
</section>

<section class="form" id="se-inscreva">
    <aside class="form__title">
        <img class="form__title--icon" src="<?php echo get_template_directory_uri(); ?>/img/clapperboard.svg" alt="claquete">
        <h3>Inscreva-se agora mesmo</h3>
    </aside>
    <div class="form__formulario">
        <?php the_field('form_sorteio'); ?>
    </div>
</section>





<?php
    endwhile;    else : endif;
    //Pega o template do footer
    get_footer('sorteio');
?>
