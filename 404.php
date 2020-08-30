<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TexMake
 */

get_header();
?>
<section class="error" style="margin-top: 2%;">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 text-center py-5">
				<img style="width: 40%;" src="http://ilovemedellin.com.co/tintexa/wp-content/uploads/2020/06/logo1.png" alt="">
				<header class="page-header mt-3 text-center">
					<h1 class="page-title" style="width: 100%;"><?php esc_html_e( 'Lamentablemente no podemos mostrar contenido.', 'textmake' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content" style="margin-top: 10px;">
					<p><?php esc_html_e( 'Puede que la página no exista o no esté disponible en el momento. Prueba seleccionando un item del menú, o informanos del error comunicandote con nosotros mediante nuestro formulario de contacto. Gracias!', 'textmake' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
</div><!-- #primary -->

<?php
get_footer();
