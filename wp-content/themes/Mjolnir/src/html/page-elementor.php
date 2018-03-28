<?php
    //Template Name: Elementor
    get_header('elementor');
    //Loop do Wordpress;

?> 

    
<?php
   if (have_posts()) : while (have_posts()) : the_post();

    the_content();

    endwhile;
    else : endif;
?>

<?php
    //Pega o template do footer
    get_footer('elementor');
?>
