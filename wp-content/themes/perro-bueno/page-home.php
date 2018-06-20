<?php
/*
    Template Name: Home Page
 */

//Advanced variables
$imagen_principal = get_field('imagen_principal');
$titulo_principal = get_field('titulo');
$subtitulo_principal = get_field('subtitulo');
$titulo_servicios = get_field('titulo_servicios');
$contenido_servicios = get_field('contenido_servicios');
$imagen_video = get_field('imagen_video');
$titulo_video = get_field('titulo_video');
$video = get_field('video');
$titulo_galeria = get_field('titulo_galeria');
$titulo_titulacion = get_field('titulo_titulacion');
$contenido_titulacion = get_field('contenido_titulacion');
$teaming_imagen = get_field('teaming_imagen');
$contenido_teaming = get_field('contenido_teaming');
$esterilizacion_teaming = get_field('esterilizacion_teaming');

get_header(); ?>

<!-- Start Hero -->
    <div class="large-hero">
        <div class="large-hero__img-wrapper">
            <img src="<?php echo $imagen_principal['url']; ?>" alt="<?php echo $imagen_principal['alt']; ?>" class="large-hero__image">
        </div>
        <div class="large-hero__text-content">
            <div class="container">
                <div class="large-hero__fix">   
                    <h1 class="large-hero__title"><?php echo $titulo_principal; ?></h1>
                    <p class="large-hero__description"><?php echo $subtitulo_principal; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    
    <!-- Start Services -->
    <main class="services page-section" id="services">
        <div class="container">
            <h2 class="title"><?php echo $titulo_servicios; ?></h2>
            <div class="marginb-3">
                <?php echo $contenido_servicios; ?>    
            </div>
            
            
            <div class="row">
               <?php $loop =  new WP_Query(array('post_type' => 'cajas_servicio', 'orderby' => 'post_id', 'order' => 'ASC'));?>
               
               <?php while ($loop -> have_posts() ) : $loop -> the_post(); ?>
               <?php $a_donde_quiere_redireccionar = get_field('a_donde_quiere_redireccionar');
                     $elija_una_opcion = get_field('elija_una_opcion');
                ?>
               
                <div class="services__item--content col-md-6 col-lg-4">
                    <a href="<?php echo $a_donde_quiere_redireccionar; ?>" onclick="<?php echo $elija_una_opcion; ?>" class="services__item--link">
                        <article class="services__item">
                            <span class="<?php the_field('icon_servicios'); ?> services__icon"></span>
                            <h3 class="services__title"><?php the_title(); ?></h3>
                        </article>
                    </a>
                </div>
                
                <?php endwhile; ?>
            </div>
        </div>      
    </main>
    <!-- End Services -->
    
    <!-- Start know-us -->
    <section class="know-us page-section" id="services">
        <div class="know-us__filter">
            <div class="know-us__img-wrapper">
                <img src="<?php echo $imagen_video['url']; ?>" alt="<?php echo $imagen_video['alt']; ?>">
            </div>
        </div>
        <div class="container know-us__content-wrapper">
            <h2 class="title title--smaller"><?php echo $titulo_video; ?></h2>
            <div class="know-us__video-wrapper">
                <iframe src="https://www.youtube.com/embed/<?php echo $video; ?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>      
    </section>
    <!-- End know-us -->
    
    <!-- Start gallery -->
    <section class="gallery page-section" id="gallery">
        <div class="container">
            <h2 class="title"><?php echo $titulo_galeria; ?></h2>
            <div class="row">
               
               
               <?php $loop =  new WP_Query(array('post_type' => 'galeria_principal', 'orderby' => 'post_id', 'order' => 'ASC'));?>
               
               <?php while ($loop -> have_posts() ) : $loop -> the_post(); ?>
               
                <div class="gallery__item col-md-6 col-lg-4 gallery-reveal">
                    <a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="image-1" data-title="My caption"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                </div>
                
                <?php endwhile; ?>
            </div>
        </div>      
    </section>
    <!-- End gallery -->
    
    <!-- Start titulacion -->
    <section class="titulacion">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 titulacion__item">
                    <h3 class="titulacion__item__title"><?php echo $titulo_titulacion ?></h3>
                    <p class="titulacion__item__parrafo"><?php echo $contenido_titulacion ?></p>
                </div>
                
                <div class="col-md-6 titulacion__item titulacion__item--red">
                    <a href="https://www.teaming.net/esterilizacionaperrosppprescatados" target="_blank"><img class="titulacion__item__img" src="<?php echo $teaming_imagen['url']; ?>" alt="<?php echo $teaming_imagen['alt']; ?>"></a>
                    <p class="titulacion__item__dona"><?php echo $contenido_teaming; ?></p>
                    <p class="titulacion__item__parrafo--azul"><?php echo $esterilizacion_teaming; ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End titulacion -->

<?php get_footer(); ?>