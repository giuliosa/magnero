<?php
  // Template Name: Single Portfolio
  get_header();
  $categorias = get_field('categorias');
  $redes_sociais = get_field('quais_redes_sociais');

?> <?php if (have_posts()) : while (have_posts()) : the_post();
        
    ?> <section class="portfolio"><div class="portfolio__title"><h3><?php the_title(); ?></h3><p><?php the_content();?></p></div><div class="portfolio__dados"><h4>Data: <?php the_field('data'); ?></h4><h5>Produtos oferecidos</h5> <?php 
        // check
        if( $categorias ): ?> <ul> <?php foreach( $categorias as $categoria ): ?> <li><?php echo $categoria; ?></li> <?php endforeach; ?> </ul> <?php endif; ?> </div></section><article class="port-servico"> <?php if( $categorias ): ?> <?php foreach( $categorias as $categoria ): 
        if($categoria == 'Desenvolvimento Web'){ ?> <div class="port-servico__linha port-servico__dev"><h2><?php echo $categoria; ?></h2><p><?php the_field('texto_desenvolvimento'); ?></p><img class="port-servico__dev--imagem-principal" src="<?php the_field('imagem_principal_desenvolvimento'); ?>" alt="Imagem Principal Desenvolvimento"> <button onclick="location.href='<?php the_field('link_do_site');?>'">Visite o site</button> <img class="port-servico__dev--detalhes-site" src="<?php the_field('detalhes_do_site'); ?>" alt="Detalhes do Site"> <img src="<?php the_field('detalhes_responsivo'); ?>" alt="Fotos Smartphone"></div> <?php }elseif ($categoria == 'Redes Sociais') { ?> <div class="port-servico__linha port-servico__redes-sociais"><h2><?php echo $categoria; ?></h2><p><?php the_field('texto_redes_sociais');?></p> <?php 
              // check
              if( $redes_sociais ): ?> <ul> <?php foreach( $redes_sociais as $value ): 
                  if($value == 'Facebook'){?> <li><a class="<?php echo $value; ?>" href="<?php the_field('facebook');?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li> <?php }elseif ($value == 'Instagram') { ?> <li><a class="<?php echo $value; ?>" href="<?php the_field('instagram');?>" target="_blank"><i class="fab fa-instagram"></i></a></li> <?php }elseif ($value == 'Twitter') { ?> <li><a class="<?php echo $value; ?>" href="<?php the_field('twitter');?>" target="_blank"><i class="fab fa-twitter"></i></a></li> <?php }elseif ($value == 'Pinterest') { ?> <li><a class="<?php echo $value; ?>" href="<?php the_field('pinterest');?>" target="_blank"><i class="fab fa-pinterest-p"></i></a></li> <?php }elseif ($value == 'Linkedin') { ?> <li><a class="<?php echo $value; ?>" href="<?php the_field('linkedin');?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li> <?php }elseif ($value == 'Youtube') { ?> <li><a class="<?php echo $value; ?>" href="<?php the_field('youtube');?>" target="_blank"><i class="fab fa-youtube"></i></a></li> <?php }?> <?php endforeach; ?> </ul> <?php 
              endif; 
              $images = get_field('galeria_redes_sociais');
              if( $images ):
              ?> <section class="port-servico__redes-sociais--imagens"> <?php foreach( $images as $image ): ?> <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?> <?php endforeach; ?> </section> <?php endif; ?> </div> <?php }elseif ($categoria == 'Vídeo') { ?> <div class="port-servico__linha port-servico__video"><h2><?php echo $categoria; ?></h2><p><?php the_field('texto_video');?></p><div class="port-servico__linha port-servico__video--video-incorporado"> <?php the_field('video');?> </div></div> <?php }elseif ($categoria == 'Criação de Logo') { ?> <div class="port-servico__linha port-servico__logo"><h2><?php echo $categoria; ?></h2><p><?php the_field('texto_criacao_de_logo');?></p><img src="<?php the_field('imagem_principal_logo'); ?>" alt=""> <?php $images = get_field('galeria_de_logo');
              if( $images ):
              ?> <section class="port-servico__logo--imagens"> <?php foreach( $images as $image ): ?> <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?> <?php endforeach; ?> </section> <?php endif; ?> </div> <?php }elseif ($categoria == 'E-mail Marketing') { ?> <div class="port-servico__linha port-servico__email"><h2><?php echo $categoria; ?></h2><p><?php the_field('texto_email');?></p><img src="<?php the_field('imagem_email');?>" alt=""></div> <?php } else { ?> <div class="port-servico__linha"><h2>Sem Serviço</h2></div> <?php } ?> <?php endforeach; ?> <?php endif; ?> </article> <?php
    //Fim do loop do wordpress
endwhile;
else : endif;

?> <footer class="pagination"><ul class="pagination__lista"><li class="pagination__lista--left"><?php previous_post_link(); ?></li><li class="pagination__lista--right"><?php next_post_link(); ?></li></ul></footer> <?php get_footer(); ?>