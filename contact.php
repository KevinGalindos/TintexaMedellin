<?php 
/*
Template name: contactanos
*/
get_header(); ?>

<section class="section-slider mb-5">
    <img class="banner" src="<?php the_field('banner') ?>" style="opacity: 1; filter: brightness(0.9);">
    <!--< ?php echo the_field('fondo_nosotros',25); ?>-->
    <header class="text">
        <?php the_title('<h1 class="card-title text-left">', '</h1>' ); ?>
        <div class="subtitulo">
            <p class="testobajotitulo"><?php the_field('subtitulo') ?></p>
        </div>
        <div class="miga">
            <h4><a href="http://pagarenlinea.com/novaseo/">Home </a>- <?php the_title(); ?></h4>
        </div>
        <div class="banner-mouse">
            <img src="http://ilovemedellin.com.co/tintexa/wp-content/uploads/2020/06/mouse.png" alt="">
        </div>
    </header>
</section>
<section class="contacto paddiego">
    <div class="container-fluid contact-box">
        <div class="row contenido-box">
            <div class="col-md-4 col-sm-12 footer-contact">
                <div class="row">
                    <div class="col-12 ftr-contact mb-5">
                        <div class="f-c-title">
                            <i class="far fa-clock"></i>
                            <h3>Horario de atención</h3>
                        </div>
                        <h4><?php the_field('horario',247) ?></h4>
                    </div>
                    <div class="col-12 ftr-contact mb-5">
                        <div class="f-c-title">
                            <i class="fa fa-phone"></i>
                            <h3>Números de teléfonos</h3>
                        </div>
                        <h4>Medellín: <?php the_field('fijo',247) ?></h4>
                        <h4>Celular: <?php the_field('movil',247) ?></h4>
                    </div>
                    <div class="col-12 ftr-contact">
                        <div class="f-c-title">
                            <i class="far fa-envelope"></i>
                            <h3>Correo</h3>
                        </div>
                        <h4><?php the_field('correo',247) ?></h4>
                        <a href="">Trabaja con nosotros</a>
                    </div>
                    <div class="col-12 social-media">
                        <a href="<?php the_field('facebook',247) ?>" target="blank"><i class="fab fa-facebook"></i></a>

                        <a href="<?php the_field('instagram',247) ?>" target="blank"><i class="fab fa-instagram"></i></a>

                        <a href="<?php the_field('youtube',247) ?>" target="blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 contact-form">
				<p class="mb-0"><?php the_field('contenido', 103); ?></p>
                <?php echo do_shortcode('[contact-form-7 id="7" title="Formulario de contacto 1"]');?>
            </div>
        </div>
    </div>
</section>
<section class="mapa">
    <div class="container-fluid">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6309027978004!2d-75.59635918573433!3d6.180132928775461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46833972739007%3A0x79b99966c0bda19f!2sTintexa%20S.A.!5e0!3m2!1ses-419!2sco!4v1591286708248!5m2!1ses-419!2sco"
                width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0">
            </iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>