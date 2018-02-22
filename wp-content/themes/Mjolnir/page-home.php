<?php
    // Template Name: Marketing

    // $servico = get_page_by_title('servicos');

$contato = get_page_by_title('contato');
    
    // Pega o template "header-min"
get_header();

    //Loop do Wordpress;
if (have_posts()) : while (have_posts()) : the_post();
?>

<section class="banner-marketing">
    <h1 class='console-container'>
        Atraia clientes para seu <br>
        negócio com <br>
    <span id='text'></span><div class='console-underscore' id='console'>&#95;</div></h1>

    <p>Usando as mídias digitais para ajudar seu negócio a crescer</p>
    <button onClick="location.href='/contato/#se-inscreva'" href="" class="butn">Peça um orçamento</button>
</section>

<!-- Seção com os serviços -->

<section class="frase-destaque">
    <div class="frase-destaque__bloco">
        <h2>Desenvolvemos estratégias, produtos e serviços digitais</h2>
        <p>Somos uma agência de comunicação e marketing localizada no Recife Antigo. Oferecemos aos nossos clientes diversas ferramentas para que eles consigar aumentar a visibilidade de suas marcas, atrair novos negócios e, assim, aumentar suas vendas.</p>
    </div>
</section>

<section class="servicos-marketing">
    <div class="servicos-marketing__lista-servicos">
        <div class="servico-bloco">
            <div class="foto-servico">
                <img src="<?php echo get_template_directory_uri() ?>/img/landing-pages.png" alt="">
            </div>
            <div class="corpo-servico">
                <h5>Sites Institucionais</h5>
                <p>Crie sites para apresentar sua empresa, ou até mesmo uma loja virtual para vender seus produtos</p>
                <button onClick="location.href='contato'">Peça um orçamento</button>
            </div>
        </div>
        <div class="servico-bloco">
            <div class="foto-servico">
                <img src="<?php echo get_template_directory_uri() ?>/img/seo-analytics.png" alt="">
            </div>
            <div class="corpo-servico">
                <h5>SEO & Analytics</h5>
                <p>Use as estratégias de SEO para ranquear bem o seu site, e use a ferramenta do Google para analisar o desempenho do mesmo</p>
                <button onClick="location.href='contato'">Peça um orçamento</button>
            </div>
        </div>
        <div class="servico-bloco">
            <div class="foto-servico">
                <img src="<?php echo get_template_directory_uri() ?>/img/socialmedia.png" alt="">
            </div>
            <div class="corpo-servico">
                <h5>Mídias Sociais</h5>
                <p>Tenha páginas do Facebook e Instagram que cativam milhares de seguidores</p>
                <button onClick="location.href='contato'">Peça um orçamento</button>
            </div>
        </div>
    </div>
    <aside class="servicos-marketing__aside-servicos">
        <div class="foto-whatever">
            <img src="<?php echo get_template_directory_uri() ?>/img/wow.png" alt="">
        </div>
        <div class="titulo-servico">
            <h5>Serviços</h5><br>
            <button  onClick="location.href='servico'">Veja Mais</button>
        </div>
    </aside>
</section>

<!-- Seção como funciona -->
<?php include(TEMPLATEPATH . '/inc/como-funciona.php'); ?>



<!-- 
<section class="portifolio-marketing">
    <h2>Nossos Clientes</h2>
    <p>Alguns de nossos mais recentes clientes</p>
    <div class="portifolio-marketing__linha">
        <div class="portifolio-marketing__linha__cliente">
            <img src="<?php echo get_template_directory_uri() ?>/img/elo.png" alt="Logo do cliente">
            <button onClick="location.href='wordpress/portfolio'">Veja mais</button>
        </div>
        <div class="portifolio-marketing__linha__cliente">
            <img src="<?php echo get_template_directory_uri() ?>/img/biglogo.png" alt="Logo do cliente">
            <button onClick="location.href='wordpress/portfolio'">Veja mais</button>
        </div>
        <div class="portifolio-marketing__linha__cliente">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Logo do cliente">
            <button onClick="location.href='wordpress/portfolio'">Veja mais</button>
        </div>
        <div class="portifolio-marketing__linha__cliente">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo-sem-bkg2.png" alt="Logo do cliente">
            <button onClick="location.href='wordpress/portfolio'">Veja mais</button>
        </div>
        
    </div>
</section> -->


<?php //include(TEMPLATEPATH . '/inc/news.php'); ?>
<h2>Contato</h2>
<?php include(TEMPLATEPATH . '/inc/contato.php'); ?>


<?php
    //Fim do loop do wordpress
endwhile;
else : endif;

    //Pega o template do footer
get_footer();
?>
