<?php 
/*
Template name: Quienes somos
*/
get_header(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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

        <!-- BULLETS - ->
        <div class="icons" id="myDIV">
            <div class="navigation">
                <a href="#1">
                    <div class="scroll"></div>
                    <span class="span">< ?php the_field('titulo_uno') ?></span>
                </a>
            </div>

            <div class="navigation">
                <a href="#2">
                    <div class="scroll"></div>
                    <span class="span">< ?php the_field('titulo_dos') ?></span>
                </a>
            </div>

            <div class="navigation">
                <a href="#3">
                    <div class="scroll"></div>
                    <span class="span">< ?php the_field('titulo_tres') ?></span>
                </a>
            </div>

            <div class="navigation">
                <a href="#4">
                    <div class="scroll"></div>
                    <span class="span">< ?php the_field('titulo_cuatro') ?></span>
                </a>
            </div>

            <div class="navigation">
                <a href="#5">
                    <div class="scroll"></div>
                    <span class="span">PILARES</span>
                </a>
            </div>

            <div class="navigation">
                <a href="#6">
                    <div class="scroll"></div>
                    <span class="span">< ?php the_field('titulo_cinco') ?></span>
                </a>
            </div>

        </div>
        <script>
            // Add active class to the current button (highlight it)
            var header = document.getElementById("myDIV");
            var btns = header.getElementsByClassName("navigation");
            var btnss = header.getElementsByClassName("span");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("actived");
              if (current.length > 0) { 
                current[0].className = current[0].className.replace(" actived", "");
              }
              this.className += " actived";
              });
            }
        </script-->
    <div class="container-fluid content-box" ata-spy="scroll" data-target="#myScrollspy" data-offset="0">
    <div>
        <div class="scroll-indicator" id="section01" data-scroll-indicator-title="<?php the_field('titulo_uno') ?>"></div>
    </div>
        <!-- Seccion Sobre Nosotros -->
        <div id="1" class="container-fluid about-section">
            <div class="row about-box">
                <div id="1" class="col-md-7 col-sm-12 text-box">
                    <h1><?php the_field('titulo_uno') ?></h1>
                    <?php the_field('texto_uno') ?>
                </div>
                <div class="col-md-4 col-sm-12 imagen">
                    <img src="<?php the_field('imagen_uno') ?>" class="img-fluid about-img" width="450">
                </div>
            </div>
        </div>
    <div>
        <div class="scroll-indicator" id="section02" data-scroll-indicator-title="<?php the_field('titulo_dos') ?>"></div>
    </div>
        <!-- Seccion Proposito -->
        <div id="2" class="container-fluid proposito">
            <div class="row content-purpose">
                <div class="col-md-5 col-sm-12 imagen-proposito">
                    <img src="<?php the_field('imagen_dos') ?>" class="img-fluid proposito-img" width="500">
                </div>
                <div class="col-md-7 col-sm-12 p-text">
                    <h1><?php the_field('titulo_dos') ?></h1>
                    <?php the_field('texto_dos') ?>
                </div>
            </div>
        </div>
    <div>
        <div class="scroll-indicator" id="section03" data-scroll-indicator-title="<?php the_field('titulo_tres') ?>"></div>
    </div>
        <!-- Seccion Mision -->
        <div id="3" class="container-fluid mision-box">
            <div class="row row-mision">
                <div class="col-md-6 col-sm-12 mision-text">
                    <h1><?php the_field('titulo_tres') ?></h1>
                    <?php the_field('texto_tres') ?>
                </div>
                <div class="col-md-5 col-sm-12 imagen-mision">
                    <img src="<?php the_field('imagen_tres') ?>" class="img-fluid mision-img">
                </div>
            </div>
        </div>
    <div>
        <div class="scroll-indicator" id="section04" data-scroll-indicator-title="<?php the_field('titulo_cuatro') ?>"></div>
    </div>
        <!-- Seccion vision o como nos vemos -->
        <div id="4" class="container-fluid how-look">
            <div class="row row-vision">
                <div class="col-md-4 col-sm-12 imagen-vision">
                    <img src="<?php the_field('imagen_cuatro') ?>" class="img-fluid vision-img">
                </div>

                <div class="col-md-7 col-sm-12 text-look">
                    <h1><?php the_field('titulo_cuatro') ?></h1>
                    <?php the_field('texto_cuatro') ?>
                </div>
            </div>
        </div>
    <div>
        <div class="scroll-indicator" id="section05" data-scroll-indicator-title="PILARES"></div>
    </div>
        <!-- Seccion Tajetas Pilares  -->
        <div id="5" class="container-fluid pillars">
            <div class="container logo-pillars">
                <div class="row row-title">
                    <h1>PILARES</h1>
                </div>
                <img src="http://ilovemedellin.com.co/tintexa/wp-content/uploads/2020/06/logo2.png" class="img-fluid about-img">
                <div class="box-card">
                    <div class="bot-frame">
                        <div>
                            <div class="dot"></div>
                        </div>  
                    </div>
                    <div class="card card1" style="width: 18rem;">
                        <h5 class="card-title"><?php the_field('titulo_pilar_uno') ?></h5>
                        <p class="card-text"><?php the_field('texto_pilar_uno') ?></p>
                    </div>
                </div>
                <div class="box-card2">
                    <div class="bot-frame2">
                        <div>
                            <div class="dot"></div>
                        </div>
                    </div>
                    <div class="card card2" style="width: 18rem;">
                        <h5 class="card-title"><?php the_field('titulo_pilar_dos') ?></h5>
                        <p class="card-text"><?php the_field('texto_pilar_dos') ?></p>
                    </div>
                </div>

                <div class="box-card3">
                    <div class="bot-frame3">
                        <div>
                            <div class="dot"></div>
                        </div>
                    </div>
                    <div class="card card3" style="width: 18rem;">
                        <h5 class="card-title"><?php the_field('titulo_pilar_tres') ?></h5>
                        <p class="card-text"><?php the_field('texto_pilar_tres') ?></p>
                    </div>
                </div>
                <div class="box-card4">
                    <div class="bot-frame4">
                        <div>
                            <div class="dot"></div>
                        </div>
                    </div>
                    <div class="card card4" style="width: 18rem;">
                        <h5 class="card-title"><?php the_field('titulo_pilar_cuatro') ?></h5>
                        <p class="card-text"><?php the_field('texto_pilar_cuatro') ?></p>
                    </div>
                </div>
            </div>
        </div>
    <div>
        <div class="scroll-indicator" id="section06" data-scroll-indicator-title="<?php the_field('titulo_cinco') ?>"></div>
    </div> 
        <!-- Seccion de politicas de calidad -->
        <div id="6" class="container-fluid quality-policies">
            <div class="row row-quality">
                <div class="col-md-7 col-sm-12 quality-text">
                    <h1><?php the_field('titulo_cinco') ?></h1>
                    <?php the_field('texto_cinco') ?>
                </div>
                <div class="col-md-4 col-sm-12 imagen-politicas">
                    <img src="<?php the_field('imagen_cinco') ?>" class="img-fluid politicas-img">
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
<script>
easyScrollDots({
  'fixedNav': false,
  'fixedNavId': '',
  'fixedNavUpward': false
});
</script>