<?php 
/*
Template name: blog
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
<section class="blog int paddiego">
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 div-blog">
                <?php $big = 9999999999; $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array( 'post_type' => 'post', 'post_status' => 'publish', 'category_name' => 'blog', 'posts_per_page' => 3, 'paged' => $paged );
                $arr_posts = new WP_Query( $args ); if (
                $arr_posts->have_posts() ) : ?>
                <div class="row">
                <? while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <div class="col-md-12 col-sm-12 cadablogdos post mb-5" id="post-<?php the_ID(); ?>" >
                            <div class="container-img">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </a>
                            </div>
                            <div class="card-body bordesli">
                                <div>
                                	<?php $archive_year  = get_the_time('Y'); 
                                    $archive_month = get_the_time('M'); 
                                    $archive_day   = get_the_time('d');?>
                                    <p class="mes"><?php echo $archive_day; ?> de <?php echo $archive_month; ?> de <?php echo $archive_year; ?></p>
                                </div>
                                <a class="link-title-blog" href="<?php the_permalink(); ?>">
                                    <h5 class="card-title-blog">
                                        <?php if (strlen($post->post_title) > 47) { echo substr(the_title($before = '', $after = '', FALSE), 0, 30) . '...'; } else { the_title(); } ?>
                                    </h5>
                                </a>
                                <p class="excerpblog"><?php echo substr(get_the_excerpt(), 0, 250) . '...'; ?></p>
                            </div> 
                            <div class="row boton-border-contact">
                                <a class="boton-contact" href="<?php the_permalink(); ?>">Ver más</a>
                            </div>
                    </div>
                <?php
                    endwhile;
                    endif; 
            ?>
                </div>
                <div id="nav-below" class="text-center">
                    <div class="navigation2">
                        <?php 
                            global $wp_query, $wp_rewrite;
                            $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;                  
                            if( $wp_rewrite->using_permalinks() )
                            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
                            if( !empty($wp_query->query_vars['s']) )
                            $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
                            echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged')),
                            'total' => $arr_posts->max_num_pages,
                            'prev_next' => true,
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>