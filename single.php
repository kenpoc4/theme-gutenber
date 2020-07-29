<?php get_header(); ?>
<?php 
    if(have_posts()):
        while(have_posts()):    the_post(); ?>

            <?php get_template_part( 'template-parts/loop', 'contenido' ); ?>
            
            <!-- Comentarios -->
            <?php comments_template(); ?>
        <?php   endwhile;
    endif;
?>
<?php get_footer(); ?>