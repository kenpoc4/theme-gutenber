<footer class="site-footer">
    <?php
        $args   =   array(
            'theme_location'    =>  'header-menu',
            'container'         =>  'nav',
            'container_class'   =>  'footer-nav',
            'after'             =>  '<span class="separador"> | </span>'
        );
        wp_nav_menu( $args );
    ?>
    <div class="direccion">
        <p>Aquí va la deirección, del sitio web</p>
        <p>Teléfono: 09450293480</p>
    </div>
</footer>
    <?php wp_footer(  ); ?>
</body>
</html>