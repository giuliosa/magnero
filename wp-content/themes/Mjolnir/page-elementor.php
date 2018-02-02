<?php
    //Template Name: Elementor
    get_header('elementor');
    //Loop do Wordpress;
?> 

<?php 
    if (have_posts()) : while (have_posts()) : the_post(); 
?>
    
    <section class="contato">
        <div class="contato__title">
            <h3><?php the_title(); ?></h3>
        </div>
    </section>
    
    
<?php
    the_content(); 
    
    //Fim do loop do wordpress
    endwhile; else : endif;

?>

<?php
    //Pega o template do footer
    get_footer('elementor');
?>
