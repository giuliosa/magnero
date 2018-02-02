<article class="artigo">
    <div class="artigo__coluna">
        <div class="artigo__coluna__linha">
            <div class="artigo__coluna__linha__head">
                <a href="<?php the_permalink();?>" >
                    <?php the_post_thumbnail('full', array('class' => '__imagem'));?>
                </a>

            </div>
            <div class="artigo__coluna__linha__body">
                <h5><?php the_title(); ?></h5>
                <p><?php the_date(); ?></p>
                <p><?php the_excerpt(); ?></p>
                <button type="button" name="button" onClick="location.href='<?php the_permalink();?>'">Veja mais</button>
            </div>
            
        </div>
    </div>


</article>