<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(  );?>
</head>
<body>

<header class="site-header">
    <div class="logo">
        <a href="<?php echo esc_url( home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="logo">
        </a>
    </div>
    <div class="informacio-header">
        <div class="redes-sociales">
            <!-- Agregar redes sociales -->
        </div>
        <div class="direccion">
            <p>Aquí va la deirección, del sitio web</p>
            <p>Teléfono: 09450293480</p>
        </div>
    </div>
</header>