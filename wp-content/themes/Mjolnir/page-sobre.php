<?php
    // Template Name: Sobre

    // $servico = get_page_by_title('servicos');

$contato = get_page_by_title('contato');
    
    // Pega o template "header-min"
get_header();

    //Loop do Wordpress;
if (have_posts()) : while (have_posts()) : the_post();
?>

<section class="sobre">
    <div class="sobre__title">
        <h3>Nossa Filosofia</h3>
        <p>
            O que mais desejamos, é que nossos clientes consigam crescer sua marca no mercado de trabalho atual, usando as mídias digitais
            como principal meio de comunicação
        </p>
    </div>
</section>

<section class="filosofia">
    <div class="filosofia__bloco">
        <h2>Desenvolvemos estratégias, produtos e serviços digitais</h2>
        <p>Somos uma agência de comunicação e marketing localizada no Recife antigo. Oferecemos aos nossos clientes diversas ferramentas para que eles consigar aumentar a visibilidade de suas marcas, atrair novos negócios e, assim, aumentar suas vendas.</p>
    </div>
    <div class="filosofia__about">
        <h4>Cresça agora</h4>
        <button onClick="location.href='/wordpress/contato'">Contate-nos</button>
    </div>
</section>

<?php include(TEMPLATEPATH . '/inc/frase.php'); ?>


<?php
    //Fim do loop do wordpress
endwhile;
else : endif;

    //Pega o template do footer
get_footer();
?>
