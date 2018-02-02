<?php
    
get_header('postagem');

    //Loop do Wordpress;
    ?> 

    <?php if (have_posts()) : while (have_posts()) : the_post();
        $author_ID      =  get_the_author_meta('ID');
        $author_email      =  get_the_author_meta('user_email');
        $author_url     =  get_author_posts_url( $author_ID );
    ?>

    
<article class="postagem">
    <div class="postagem__imagem-principal">
        
            <?php 
                the_post_thumbnail('full', array('class' => 'postagem__imagem-principal__imagem'));
            ?>

        <div class="postagem__imagem-principal--titulo">
            <h2><?php the_title(); ?></h2>
            <p> <?php the_date(); ?> <b> | </b> <a href="<?php echo $author_url ?>"><?php the_author(); ?></a></p>
            
        </div>

    </div> <!-- Fim imagem-principal -->

    <div class="postagem__ajuste"></div>
    
    <div class="postagem__corpo-postagem">
        
        <span class="postagem__corpo-postagem--categoria" >
            <?php the_category(); ?>
        </span>

        <div class="postagem__corpo-postagem--texto" >
            <?php
                the_content(); 
            ?>

        </div>


        <div class="postagem__corpo-postagem--traco">
        </div>

        <div class="postagem__corpo-postagem--tags" >
            <?php the_tags('  ', ' | '); ?>
        </div>

        <div class="postagem__corpo-postagem__autor">
            <div class="postagem__corpo-postagem__autor__imagem-autor">
                <a href="<?php echo $author_url ?>">
                    <?php echo get_avatar($author_ID , 90, '', false, array('class' => 'img-circle')); ?>
                </div>
            </a>
            <div class="postagem__corpo-postagem__autor__info-autor">
                <a href="<?php echo $author_url ?>">
                    <h4><?php the_author(); ?></h4>
                </a>
                <p><?php echo get_the_author_meta('description'); ?></p>
            </div>
        </div>

        <div class="postagem__corpo-postagem__posts-relacionados"> 
            <h4>Posts relacionados</h4> 
            <div class="postagem__corpo-postagem__posts-relacionados__linha">

            
            <?php 

            $categories                 = get_the_category();

                $rp_query               = new WP_Query(array(
                    'posts_per_page'    => 3,
                    'post__not_in'      => array( $post->ID ),
                    'cat'               => $categories[0]->term_id
                ));

                if($rp_query->have_posts()){
                    while($rp_query->have_posts()){
                        $rp_query->the_post();
            ?>
                <div class="postagem__corpo-postagem__posts-relacionados__linha__coluna">
                        <?php
                            if(has_post_thumbnail()){ ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('full'); ?>
                                </a>
                        <?php } ?>
                        
                        <h6><?php the_title(); ?></h6>
                        <p><?php the_date(); ?></p>
                        <button type="button" name="button" onClick="location.href='<?php the_permalink();?>'">Veja mais</button>
                </div>
            
                        
            <?php } wp_reset_postdata(); } else{ ?>
                    <p>Nenhuma postagem relacionada</p>
            <?php } ?>
            </div>
        </div>


        <!-- <div class="postagem__comentarios-postagem">
            <?php //comments_template(); ?>
        </div> -->
    </div>
</article>




<?php
    //Fim do loop do wordpress
endwhile;
else : endif;

?>

<footer class="pagination">
    <ul class="pagination__lista">
        <li class="pagination__lista--left"><?php previous_post_link(); ?></li>
        <li class="pagination__lista--right"><?php next_post_link(); ?></li>
    </ul>
</footer>

<?php

    //Pega o template do footer
get_footer();
?>
