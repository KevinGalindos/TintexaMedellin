<?php 
/*
Template name: inicio
*/
get_header(); 
$imagenesuno = get_field('silder_uno');
$imagenesdos = get_field('silder_dos');
?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <section>
        <div class="banner">
            <?php echo do_shortcode('[rev_slider alias="BannerHome"]');?>
            <div class="mouse-home">
                <img src="http://ilovemedellin.com.co/tintexa/wp-content/uploads/2020/06/mouse.png" alt="">
            </div>
        </div>
    </section>
    <!-- Contenedor -->
<div class="container-fluid content-box" ata-spy="scroll" data-target="#myScrollspy" data-offset="0">
    <div>
        <div class="scroll-indicator" id="section01" data-scroll-indicator-title="<?php the_field('titulo_uno') ?>"></div>
    </div>
        <!-- Seccion Sobre Nosotros -->
        <div id="1" class="container-fluid about-section-home">
            <div class="row about-box-home">
                <div class="col-md-7 col-sm-12 text-box-home">
                    <h1><?php the_field('titulo_uno') ?></h1>
                    <?php the_field('texto_uno') ?>
                    <div class="boton-border">
                        <a href="http://ilovemedellin.com.co/tintexa/nosotros/"><button class="boton"> Ver más <i class="fas fa-play"></i></button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 imagen-home">
                    <img src="<?php the_field('imagen_uno') ?>" class="img-fluid about-img" width="400">
                </div>
            </div>
        </div>
    <div>
        <div class="scroll-indicator" id="section02" data-scroll-indicator-title="<?php the_field('titulo_dos') ?>"></div>
    </div>
        <?php if ( wp_is_mobile() ) : ?>
            <!-- Seccion Servicios -->
            <div id="2" class="container-fluid services">
                <div class="row services-row">
                    <div class="col-md-4 col-sm-12 text-services">
                        <h1><?php the_field('titulo_dos') ?></h1>
                        <?php the_field('texto_dos') ?>

                        <div class="boton-border">
                            <a href="http://ilovemedellin.com.co/tintexa/servicios/"><button class="boton"> Ver más <i
                                        class="fas fa-play"></i></button></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 carousel-box">
                        <div id="carouselExampleControls" class="carousel slide slider1" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach( $imagenesuno as $key => $image): ?>
                                    <div class="carousel-item <?=$key == 0? 'active': '' ?>">
                                        <img src="<?=$image['imagen']; ?> " class="d-block w-100" height="550"/>
                                    </div>
                                 <?php endforeach; ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <!-- Seccion Servicios -->
            <div id="2" class="container-fluid services">
                <div class="row services-row">
                    <div class="col-md-4 col-sm-12 text-services">
                        <h1><?php the_field('titulo_dos') ?></h1>
                        <?php the_field('texto_dos') ?>

                        <div class="boton-border">
                            <a href="http://ilovemedellin.com.co/tintexa/servicios/"><button class="boton"> Ver más <i
                                        class="fas fa-play"></i></button></a>
                        </div>
                        <div class="row row-imgs">
                            <div class="owl-carousel slideruno owl-theme">
                            <?php  $rows = get_field('silder_uno'); if($rows) { 
                                foreach($rows as $row) { ?>
                                <div class="item">
                                    <div class="col-12">
                                        <div class="container-img">
                                            <img src="<?php echo $row['imagen']; ?>" class="img-fluid mini-img" width="170" >
                                        </div>
                                    </div>
                                </div>
                                <?php } 
                            } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 carousel-box">
                        <div id="carouselExampleControls" class="carousel slide slider1" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach( $imagenesuno as $key => $image): ?>
                                    <div class="carousel-item <?=$key == 0? 'active': '' ?>">
                                        <img src="<?=$image['imagen']; ?> " class="d-block w-100" height="550"/>
                                    </div>
                                 <?php endforeach; ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <div>
        <div class="scroll-indicator" id="section03" data-scroll-indicator-title="<?php the_field('titulo_tres') ?>"></div>
    </div>
        <!-- Seccion Paquete Completo -->
        <?php if ( wp_is_mobile() ) : ?>
            <div id="3" class="container-fluid full-package">
                <div class="row packague-row">
                    <div class="col-md-4 col-sm-12 text-package">
                        <h1><?php the_field('titulo_tres') ?></h1>
                        <?php the_field('texto_tres') ?>
                        <div class="boton-border" id="boton-package">
                            <a href="http://ilovemedellin.com.co/tintexa/paquetes/"><button class="boton"> Ver más <i
                                        class="fas fa-play"></i></button></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 carousel-package">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner car-1-fade">
                                <?php foreach( $imagenesdos as $key => $image): ?>
                                    <div class="carousel-item <?=$key == 0? 'active': '' ?>">
                                        <img src="<?=$image['imagen']; ?> " class="d-block w-100" height="550"/>
                                    </div>
                                 <?php endforeach; ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div id="3" class="container-fluid full-package">
                <div class="row packague-row">
                    <div class="col-md-7 col-sm-12 carousel-package">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner car-1-fade">
                                <?php foreach( $imagenesdos as $key => $image): ?>
                                    <div class="carousel-item <?=$key == 0? 'active': '' ?>">
                                        <img src="<?=$image['imagen']; ?> " class="d-block w-100" height="550"/>
                                    </div>
                                 <?php endforeach; ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 text-package">
                        <h1><?php the_field('titulo_tres') ?></h1>
                        <?php the_field('texto_tres') ?>
                        <div class="boton-border" id="boton-package">
                            <a href="http://ilovemedellin.com.co/tintexa/paquetes/"><button class="boton"> Ver más <i
                                        class="fas fa-play"></i></button></a>
                        </div>
                        <div class="row row-imgs-2">
                            <div class="owl-carousel slideruno owl-theme">
                            <?php  $rows = get_field('silder_dos'); if($rows) { 
                                foreach($rows as $row) { ?>
                                <div class="item">
                                    <div class="col-12">
                                        <div class="container-img">
                                            <img src="<?php echo $row['imagen']; ?>" class="img-fluid mini-img" width="170" >
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
        <?php endif; ?>
    <div>
        <div class="scroll-indicator" id="section04" data-scroll-indicator-title="BENEFICIOS TINTEXA"></div>
    </div>
        <!-- Seccion Beneficios -->
        <div id="4" class="container-fluid benefit-cards">
            <div class="row cards-title">
                <h1 class="col-lg title-cards">BENEFICIOS TINTEXA</h1>
            </div>
            <div class="container wrapper-cards">
                <div class="row box-cards">
                    <div class="col-md-3 col-sm-12 exterior-card">
                        <img src="<?php the_field('icono_beneficio_uno') ?>" class="img-fluid -img-benefits">
                        <img src="<?php the_field('icono_beneficio_uno_hover') ?>" class="img-fluid -img-benefits enhover">
                        <h4><?php the_field('titulo_beneficio_uno') ?></h4>
                        <p><?php the_field('texto_beneficio_uno') ?></p>
                        <div class="boton-border b">
                            <a href="<?php the_field('enlace_beneficio_uno') ?>"><button class="boton"> Ver más <i
                                        class="fas fa-play"></i></button></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mid-card">
                        <img src="<?php the_field('icono_beneficio_dos') ?>" class="img-fluid -img-mid-benefits">
                        <img src="<?php the_field('icono_beneficio_dos_hover') ?>" class="img-fluid -img-mid-benefits enhover">
                        <h4 class="card-color"><?php the_field('titulo_beneficio_dos') ?></h4>
                        <p class="card-color"><?php the_field('texto_beneficio_dos') ?></p>
                        <div class="boton-border m">
                            <a href="<?php the_field('enlace_beneficio_dos') ?>"><button class="boton"> Ver más <i
                                        class="fas fa-play"></i></button></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 exterior-card">
                        <img src="<?php the_field('icono_beneficio_tres') ?>" class="img-fluid -img-benefits">
                        <img src="<?php the_field('icono_beneficio_tres_hover') ?>" class="img-fluid -img-benefits enhover">
                        <h4><?php the_field('titulo_beneficio_tres') ?></h4>
                        <p><?php the_field('texto_beneficio_tres') ?></p>
                        <div class="boton-border b">
                            <a href="<?php the_field('enlace_beneficio_tres') ?>"><button class="boton"> Ver más <i
                                        class="fas fa-play"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php get_footer(); ?>
<script>
   jQuery('.owl-carousel.slideruno').owlCarousel({
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
           items:3
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
<script>
   jQuery('.owl-carousel.sliderdos').owlCarousel({
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
           items:3
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
<script>
easyScrollDots({
  'fixedNav': false,
  'fixedNavId': '',
  'fixedNavUpward': false
});
</script>