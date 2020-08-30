<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TexMake
 */

?>
    <footer class="row row-footer">
    
            <div class="col-md-3 col-sm-12 ftr-contact">
                <div class="f-c-title">
                    <i class="far fa-clock"></i>
                    <h3>Horario de atención</h3>
                </div>
                <h4><?php the_field('horario',247) ?></h4>
            </div>

            <div class="col-md-3 col-sm-12 ftr-contact">
                <div class="f-c-title">
                    <i class="fa fa-phone"></i>
                    <h3>Números de teléfonos</h3>
                </div>
                <h4>Medellín: <?php the_field('fijo',247) ?></h4>
                <h4>Celular: <?php the_field('movil',247) ?></h4>
            </div>

            <div class="col-md-3 col-sm-12 ftr-contact">
                <div class="f-c-title">
                    <i class="far fa-envelope"></i>
                    <h3>Correo</h3>
                </div>
                <h4><?php the_field('correo',247) ?></h4>
                <a href="">Trabaja con nosotros</a>
            </div>
            <div class="col-md-2 col-sm-12 social-media">
                <a href="<?php the_field('facebook',247) ?>" target="blank"><i class="fab fa-facebook"></i></a>

                <a href="<?php the_field('instagram',247) ?>" target="blank"><i class="fab fa-instagram"></i></a>

                <a href="<?php the_field('youtube',247) ?>" target="blank"><i class="fab fa-youtube"></i></a>
            </div>
    </footer>

        <copyright class="row copyright">
            <h3>All Rights Reserved - Tintexa</h3>
            <a class="link-contacto" target="blank" href="https://www.simbolointeractivo.com/"><img src="http://ilovemedellin.com.co/tintexa/wp-content/uploads/2020/06/sn.png" width="140" alt=""></a>
        </copyright>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
