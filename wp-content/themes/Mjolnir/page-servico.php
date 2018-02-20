<?php
    // Template Name: Serviço

    // $servico = get_page_by_title('servicos');

$contato = get_page_by_title('contato');
    
    // Pega o template "header-min"
get_header();

    //Loop do Wordpress;
if (have_posts()) : while (have_posts()) : the_post();
?>

<section class="servicos">
    <div class="servicos__title">
        <h3>Serviços oferecidos</h3>
        <p>
            Conheça um pouco sobre todos os serviços que nós oferecemos
        </p>
    </div>
</section>

<section class="lista">
    <div class="lista__coluna">
        <div class="lista__coluna__linha">
            <div class="lista__coluna__linha__head">
                <h5 class="lista__coluna__linha__head--title">Sites institucionais</h5>
                <div class="lista__coluna__linha__head--text">

                    <p>
                        Crie sites para apresentar sua empresa, ou até mesmo uma loja virtual para vender seus produtos
                    </p>
                    <button onClick="location.href='contato'">Peça um orçamento</button>
                </div>
            </div>
            <div class="lista__coluna__linha__body">
                <img src="<?php echo get_template_directory_uri() ?>/img/g4402.png" alt="Imagem retratando landing pages">
            </div>
        </div>
        <div class="lista__coluna__linha">
            <div class="lista__coluna__linha__head">
                <h5 class="lista__coluna__linha__head--title">SEO & Analytics</h5>
                <div class="lista__coluna__linha__head--text">

                    <p>
                        Use as estratégias de SEO para ranquear bem o seu site, e use a ferramenta do Google para analisar o desempenho do mesmo
                    </p>
                    <button onClick="location.href='contato'">Peça um orçamento</button>
                </div>
            </div>
            <div class="lista__coluna__linha__body">
                <img src="<?php echo get_template_directory_uri() ?>/img/g4386.png" alt="Imagem retratando SEO e Analytics">
            </div>
        </div>
        <div class="lista__coluna__linha">
            <div class="lista__coluna__linha__head">
                <h5 class="lista__coluna__linha__head--title">Google Adwords</h5>
                <div class="lista__coluna__linha__head--text">

                    <p>
                        Para atrair clientes com máxima eficácia e rapidez, a Magnero te ajuda a desenvolver campanhas utilizando o Google AdWords, que é a principal ferramenta de publicidade do Google. 
                    </p>
                    <button onClick="location.href='contato'">Peça um orçamento</button>
                </div>
            </div>
            <div class="lista__coluna__linha__body">
                <img src="<?php echo get_template_directory_uri() ?>/img/postagem.png" alt="Imagem retratando SEO e Analytics">
            </div>
        </div>
        <div class="lista__coluna__linha">
            <div class="lista__coluna__linha__head">
                <h5 class="lista__coluna__linha__head--title">Criação de páginas do Facebook</h5>
                <div class="lista__coluna__linha__head--text">

                    <p>
                         O Facebook é a rede social mais acessada do mundo com mais de 2 bilhões de usuários ativos. É importante estar presente onde há grande potencial para alcançar novos clientes. É crucial conhecer regras e algoritmos do Facebook para alcançar um maior número de pessoas. 
                    </p>
                    <button onClick="location.href='contato'">Peça um orçamento</button>
                </div>
            </div>
            <div class="lista__coluna__linha__body">
                <img src="<?php echo get_template_directory_uri() ?>/img/postagem-2.png" alt="Imagem retratando social media">
            </div>
        </div>
        <div class="lista__coluna__linha">
            <div class="lista__coluna__linha__head">
                <h5 class="lista__coluna__linha__head--title">Criação de páginas do Instagram</h5>
                <div class="lista__coluna__linha__head--text">

                    <p>
                        O Instagram já se tornou a segunda maior rede social do mundo. São mais de 400 milhões de usuários ativos. Conhecer as regras de uso do Instagram e elaborar uma estratégia específica para seu tipo de negócio pode ser determinante para o sucesso de um empreendimento. 
                    </p>
                    <button onClick="location.href='contato'">Peça um orçamento</button>
                </div>
            </div>
            <div class="lista__coluna__linha__body">
                <img src="<?php echo get_template_directory_uri() ?>/img/g4378.png" alt="Imagem retratando social media">
            </div>
        </div>
        <div class="lista__coluna__linha">
            <div class="lista__coluna__linha__head">
                <h5 class="lista__coluna__linha__head--title">Youtube</h5>
                <div class="lista__coluna__linha__head--text">

                    <p>
                        O Youtube é uma das plataformas de vídeos mais populares nos últimos tempos. Toda uma geração de jovens cresceu assistindo vídeos no Youtube. Ajudaremos você a criar um canal e produzir os vídeos, ou te ajudar a fazer propaganda nessa plataforma 
                    </p>
                    <button onClick="location.href='contato'">Peça um orçamento</button>
                </div>
            </div>
            <div class="lista__coluna__linha__body">
                <img src="<?php echo get_template_directory_uri() ?>/img/g4370.png" alt="Imagem retratando social media">
            </div>
        </div>
        <div class="lista__coluna__linha">
            <div class="lista__coluna__linha__head">
                <h5 class="lista__coluna__linha__head--title">Comunicação Visual</h5>
                <div class="lista__coluna__linha__head--text">

                    <p>
                         Criação de logo, imagens para publicações, fotos de produtos, apresentação de PowerPoint, branding e materiais gráficos, também são serviços que oferecemos para vocês 
                    </p>
                    <button onClick="location.href='contato'">Peça um orçamento</button>
                </div>
            </div>
            <div class="lista__coluna__linha__body">
                <img src="<?php echo get_template_directory_uri() ?>/img/g4374.png" alt="Imagem retratando social media">
            </div>
        </div>
    </div>
    <div class="lista__frase-impacto">
        <h4>Para outros, o que pode parecer impossível, <br> torna-se porssível com a Magnero</h4>
    </div>
</section>

<?php include(TEMPLATEPATH . '/inc/como-funciona.php'); ?>
<?php include(TEMPLATEPATH . '/inc/frase.php'); ?>


<?php
    //Fim do loop do wordpress
endwhile;
else : endif;

    //Pega o template do footer
get_footer();
?>
