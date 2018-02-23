<?php
//$contato = get_page_by_title('contato');
//$sobre = get_page_by_title('sobre');
?>
    <!-- Footer -->
<footer class="footer">
    <div class="footer__container">
        <div class="footer__container--col-4 footer__container--logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-white-shadow.png" alt="Imagem Logo Magnero">
        </div>

        <div class="footer__container--col-4">
            <p>
                Somos uma agência de comunicação e marketing localizada no Recife Antigo. 
                Oferecemos aos nossos clientes diversas ferramentas para que eles consigam 
                aumentar a visibilidade de suas marcas, atrair novos negócios e, assim, maximizar suas vendas.
            </p>
        </div>

        <div class="footer__container--col-4">
            <h4>Mapa do site</h4>
            <?php
                $args = array(
                    'menu'              => 'Menu Secundário',
                    'menu_class'        => 'footer__container--col-4__lista',
                    'theme_location'    => 'header-menu',
                    'container'         => false,
                    'depth'             => 4
                );
                wp_nav_menu($args);
            
            ?>
        </div>

        <div class="footer__container--col-4">
            <h4>Redes Sociais</h4>
            <p>Siga-nos</p>
            <ul class="footer__container--col-4__social">
                <a href="https://www.facebook.com/agenciamagnero/" target="_blank">
                    <li color="magenta"><i class="fab fa-facebook-f"></i></li>
                </a>
                <a href="http://twitter.com/agenciamagnero/" target="_blank">
                    <li><i class="fab fa-twitter"></i></li>
                </a>
                <!-- <a href="http://linkedin.com" target="_blank">
                    <li><i class="fab fa-linkedin-in"></i></li>
                </a> -->
                <a href="https://instagram.com/agenciamagnero" target="_blank">
                    <li><i class="fab fa-instagram"></i></li>
                </a>
            </ul>
        </div>
    </div>

    

    
    <div class="footer__direitos-reservados">
        <p>Todos os direitos reservados &copy;</p>
        <!-- <p>Feito por: <a href="#" target="_blank">Giulio Sá</a> </p> -->
    </div>

        

   

</footer>


<!-- WP FOOTER -->
<?php wp_footer(); ?>
<!-- FIM WP FOOTER -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114700344-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114700344-1');
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSy58jX-AnCLhdZw4Msbbhwg6l_8kP0qw&callback=initMap"></script>
</body>

</html>
