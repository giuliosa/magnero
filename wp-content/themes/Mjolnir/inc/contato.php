<?php $home = get_page_by_title('home'); ?>

<section id="orcamento" class="contato">
    <div class="contato__linha">
        <div id="map-canvas" class="contato--mapa"></div>
        <div class="contato__linha__endereco">
            <h3>Endereço</h3>
            <p>Rua Domingos José Martins, 75 sala 404, Recife-PE</p>
            <p>CEP: 50030-200</p>
        </div>
        <div class="contato__linha__contatos">
            <h3>Contatos</h3>
            <p>(81) 3877-1336</p>
            <p>contato@magnero.com.br</p>
        </div>

    </div>
    <div class="contato__formulario">
        <h2>Começe seu projeto</h2>
        <p>
            Não perca tempo e envie agora mesmo seu pedido de serviço. É muito simples!
            Digite seus dados e nos envie uma mensagem com uma breve explicação do seu negócio e de como podemos ajudá-lo a crescer. 
        </p>

        <?php the_field('formulario', $home); ?>
        
    </div>
  </section>