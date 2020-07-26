<?php get_header(); ?>
<?php 
    if(have_posts()):
        while(have_posts()):    the_post(); ?>
            <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)";>
                <div class="contenido-hero">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>

            <div class="seccion contenedor">
                <main class="contenido-principal">
                    <?php the_content(); ?>
                </main>
            </div>

        <?php   endwhile;
    endif;
?>
<?php get_footer(); ?>