<?php 
/*
Template name: servicios
*/
get_header(); 
$imagenesuno = get_field('slider_uno');?>

<section class="section-slider mb-5">
    <img class="banner" src="http://ilovemedellin.com.co/tintexa/wp-content/uploads/2020/06/BannerInterna.jpg" style="opacity: 1; filter: brightness(0.9);">
    <!--< ?php echo the_field('fondo_nosotros',25); ?>-->
    <header class="text">
        <?php the_title('<h1 class="card-title text-left">', '</h1>' ); ?>
        <div class="subtitulo">
            <p class="testobajotitulo">Aca va un subtitulo</p>
        </div>
        <div class="miga">
            <h4><a href="http://pagarenlinea.com/novaseo/">Home </a>- <?php the_title(); ?></h4>
        </div>
        <div class="banner-mouse">
            <img src="http://ilovemedellin.com.co/tintexa/wp-content/uploads/2020/06/mouse.png" alt="">
        </div>
    </header>
</section>

<!-- Seccion Parrafos full width -->
<div class="container text-wrapper">
    <?php the_field('texto_superior'); ?>
</div>

<!-- Seccion Portafolio empresarial  -->
<div class="container-fluid portfolio">
    <?php if ( wp_is_mobile() ) : ?>
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
    <?php else : ?>
        <div class="col-md-5 col-sm-12 box-portfolio">
            <?php the_field('texto_en_lista'); ?>
            <div class="row row-imgs miniaturas">
                <div class="owl-carousel slideruno owl-theme">
                <?php  $rows = get_field('slider_uno'); if($rows) { 
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
    <?php endif; ?>
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