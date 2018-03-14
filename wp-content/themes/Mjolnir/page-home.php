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
    <div class="banner-marketing__para-frente">
        <h1 class='console-container'>
            Atraia clientes para seu <br>
            negócio com <br>
        <span id='text'></span><div class='console-underscore' id='console'>&#95;</div></h1>

        <p>Usando as mídias digitais para ajudar seu negócio a crescer</p>
        <button href="" class="butn">Peça um orçamento</button>
    </div>
    

    
    <svg width="510.5" height="510.5" version="1.1" viewBox="0 0 510.49963 510.49963" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:xlink="http://www.w3.org/1999/xlink"><metadata><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><dc:title/></cc:Work></rdf:RDF></metadata><defs><linearGradient id="b"><stop stop-color="#26053f" offset="0"/><stop stop-color="#f3615f" offset="1"/></linearGradient><linearGradient id="a" x1="66.383" x2="397.23" y1="435.22" y2="69.659" gradientUnits="userSpaceOnUse" xlink:href="#b"/></defs><g transform="matrix(.70711 .70711 -.70711 .70711 270.38 -121.92)" fill="url(#a)"><path d="m424.18 456.17h-69.293c-18.706 0-33.924-15.218-33.924-33.924v-218.94c0-35.941-28.687-65.62-63.949-66.158-17.498-0.302-34.054 6.372-46.566 18.693-12.514 12.327-19.408 28.756-19.408 46.261v67.368c0 7.971-6.463 14.436-14.436 14.436s-14.436-6.464-14.436-14.436v-67.368c0-25.3 9.952-49.036 28.021-66.831 18.064-17.792 41.948-27.389 67.265-26.992 50.94 0.778 92.381 43.407 92.381 95.027v218.94c0 2.786 2.266 5.053 5.053 5.053h69.293c2.786 0 5.053-2.266 5.053-5.053v-58.454c0-7.971 6.463-14.436 14.436-14.436s14.436 6.464 14.436 14.436v58.454c-3e-3 18.706-15.221 33.924-33.926 33.924zm-267.06 0h-69.294c-18.706 0-33.924-15.218-33.924-33.924v-220.14c0-111.44 90.663-202.1 202.1-202.1s202.1 90.663 202.1 202.1v66.883c0 7.971-6.463 14.436-14.436 14.436s-14.436-6.464-14.436-14.436v-66.883c0-95.519-77.711-173.23-173.23-173.23s-173.23 77.71-173.23 173.23v220.14c0 2.786 2.266 5.053 5.053 5.053h69.293c2.786 0 5.053-2.266 5.053-5.053v-71.922c0-7.971 6.463-14.436 14.436-14.436s14.436 6.464 14.436 14.436v71.922c-3e-3 18.706-15.221 33.924-33.925 33.924z"/><path d="m424.18 456.17h-69.293c-18.706 0-33.924-15.218-33.924-33.924v-84.448c0-7.971 6.463-14.436 14.436-14.436h108.27c7.973 0 14.436 6.464 14.436 14.436v84.448c-1e-3 18.706-15.219 33.924-33.924 33.924zm-74.346-103.94v70.012c0 2.786 2.266 5.053 5.053 5.053h69.293c2.786 0 5.053-2.266 5.053-5.053v-70.012h-79.399z"/><path d="m157.12 456.17h-69.294c-18.706 0-33.924-15.218-33.924-33.924v-84.448c0-7.971 6.463-14.436 14.436-14.436h108.27c7.973 0 14.436 6.464 14.436 14.436v84.448c-1e-3 18.706-15.219 33.924-33.923 33.924zm-74.346-103.94v70.012c0 2.786 2.266 5.053 5.053 5.053h69.293c2.786 0 5.053-2.266 5.053-5.053v-70.012h-79.399z"/></g></svg>

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
            <img src="<?php echo get_template_directory_uri() ?>/img/recife.png" alt="Recife Visto de Cima">
        </div>
        <div class="titulo-servico">
            <h5>Serviços</h5><br>
            <button  onClick="location.href='servico'">Veja Mais</button>
        </div>
    </aside>
</section>

<!-- Seção como funciona -->
<?php include(TEMPLATEPATH . '/inc/como-funciona.php'); ?>
<?php //include(TEMPLATEPATH . '/inc/news.php'); ?>
<h2 class="titulo-do-contato">Contato</h2>
<?php include(TEMPLATEPATH . '/inc/contato.php'); ?>


<?php
    //Fim do loop do wordpress
    endwhile; else : endif;

    //Pega o template do footer
    get_footer();
?>
