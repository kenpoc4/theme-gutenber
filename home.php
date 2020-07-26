<?php get_header();?>

<?php
    $pagina_blog    =   get_option( 'page_for_posts' );
    $imagen_id      =   get_post_thumbnail_id( $pagina_blog );
    $imaneg_src     =   wp_get_attachment_image_src($imagen_id, 'full')[0];
?>

<div class="hero" style="background-image: url(<?php echo $imaneg_src ?>);">
    <div class="contenido-hero">
        <h1><?php echo get_the_title($pagina_blog); ?></h1>
    </div>
</div>

<div class="seccion contenedor">
    <main class="contenido-principal">
        <?php 
            if(have_posts()):
                while(have_posts()):    the_post(); ?>
                   <article class="entrada-blog">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'especialidades' ); ?>
                        </a>
                   </article>
                <?php   endwhile;
            endif;
        ?>
    </main>
</div>

<?php get_footer();?>