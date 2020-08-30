<?php 
/*
Template name: Paquete completo
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
            <h4><a href="">Home </a>- <?php the_title(); ?></h4>
        </div>
        <div class="banner-mouse">
            <img src="http://ilovemedellin.com.co/tintexa/wp-content/uploads/2020/06/mouse.png" alt="">
        </div>
    </header>
</section>

    <!-- Seccion Proposito -->
    <div class="container-fluid purpose">
        <div class="container purpose-text">
            <h1><?php the_field('titulo_uno') ?></h1>
            <?php the_field('texto_uno') ?>
        </div>

        <div class="row entity-imgs">
            <div class="col-md-3 col-sm-12 entities">
                <img src="<?php the_field('icono_uno') ?>" width="220">
                <h2><?php the_field('titulo_icono_uno') ?></h2>
                <h3><?php the_field('subtitulo_icono_uno') ?></h3>
            </div>
            <div class="col-md-3 col-sm-12 entities">
                <img src="<?php the_field('icono_dos') ?>" width="200">
                <h2><?php the_field('titulo_icono_dos') ?></h2>
                <h3><?php the_field('subtitulo_icono_dos') ?></h3>
            </div>
            <div class="col-md-3 col-sm-12 entities">
                <img src="<?php the_field('icono_tres') ?>" width="380">
                <h2><?php the_field('titulo_icono_tres') ?></h2>
                <h3><?php the_field('subtitulo_icono_tres') ?></h3>
            </div>
        </div>
    </div>

    <!-- Seccion Pruebas -->
    <div class="container-fluid container-tests">
        <h1><?php the_field('titulo_grande') ?></h1>
        <div class="row test-items">
            <div class="col-md-3 col-sm-12 title-test">
                <div class="number">1</div>
                <div class="icon-test">
                    <img src="<?php the_field('icono_uno_copiar') ?>" width="100" class="img-fluid">
                </div>
            </div>
            <div class="col-md-9 col-sm-12 desc-t">
                <h3><?php the_field('titulo_icono_uno_copiar') ?></h3>
                <div class="content-text-">
                    <?php the_field('subtitulo_icono_uno_copiar') ?>
                </div>
            </div>
        </div>

        <div class="row test-items">
            <div class="col-md-3 col-sm-12 title-test">
                <div class="number">2</div>
                <div class="icon-test">
                    <img src="<?php the_field('icono_dos_copiar') ?>" width="100" class="img-fluid">
                </div>
            </div>
            <div class="col-md-9 col-sm-12 desc-t">
                <h3><?php the_field('titulo_icono_dos_copiar') ?></h3>
                <div class="content-text-">
                    <?php the_field('subtitulo_icono_dos_copiar') ?>
                </div>
            </div>
        </div>

        <div class="row test-items">
            <div class="col-md-3 col-sm-12 title-test">
                <div class="number">3</div>
                <div class="icon-test">
                    <img src="<?php the_field('icono_tres_copiar') ?>" width="100" class="img-fluid">
                </div>
            </div>
            <div class="col-md-9 col-sm-12 desc-t">
                <h3><?php the_field('titulo_icono_tres_copiar') ?></h3>
                <div class="content-text-">
                    <?php the_field('subtitulo_icono_tres_copiar') ?>
                </div>
            </div>
        </div>

    </div>

    <div class="container slidercar">
        <div class="row">
            <div class="col-12">
                <!-- Seccion Galeria -->
                <div class="row pics">
                    <div class="owl-carousel marcas owl-theme">
                        <?php  $rows = get_field('imagenes'); if($rows) { 
                            foreach($rows as $row) { ?>
                            <div class="item">
                                <div class="col-12">
                                    <div class="container-img">
                                        <img src="<?php echo $row['imagen']; ?>" alt="" class="card-img-top">
                                    </div>
                                </div>
                            </div>
                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>





<?php get_footer(); ?>
<script>
   jQuery('.owl-carousel.marcas').owlCarousel({
   loop:true,
   margin:10,
   nav:true,
   dots: true,
   responsive:{
       0:{
           items:1
       },
       600:{
           items:3
       },
       1000:{
           items:5
       }
   },
   autoplay:true,
   autoplayTimeout:5000,
   autoplayHoverPause:true
});
$('.play').on('click',function(){
   owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
   owl.trigger('stop.owl.autoplay')
})
</script>