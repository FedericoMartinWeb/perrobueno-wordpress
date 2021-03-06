<?php
/*
* Template Name: Guarderia Page
*/
$foto_principal = get_field('foto_principal_guarderia');
$titulo_principal_galeria = get_field('titulo_principal_guarderia');
$contenido_guarderia = get_field('contenido_guarderia');

get_header();
?>
    
    <!-- Start Hero -->
    <div class="large-hero">
        <div class="large-hero__img-wrapper large-hero__img-wrapper--internal">
            <img src="<?php echo $foto_principal['url']; ?>" alt="<?php echo $foto_principal['alt']; ?>" class="large-hero__image large-hero__image--internal">
        </div>
        <div class="large-hero__text-content">
            <div class="container">
                <h1 class="large-hero__title large-hero__title--guarderia"><?php echo $titulo_principal_galeria; ?></h1>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    
    <!-- Start guarderia -->
    <section class="guarderia page-section page-section--no-padding-bottom">
        <div class="container">
            <?php echo $contenido_guarderia; ?>
        </div>      
    </section>
    <!-- End guarderia -->
    
    <!-- Start gallery -->
    <section class="gallery page-section page-section--no-padding-top" id="gallery">
        <div class="container">
            <div class="row">
                <?php $loop =  new WP_Query(array('post_type' => 'galeria_guarderia', 'orderby' => 'post_id', 'order' => 'ASC'));?>
               
               <?php while ($loop -> have_posts() ) : $loop -> the_post(); ?>
               
                <div class="gallery__item col-md-6 col-lg-4 gallery-reveal">
                    <a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="image-1" data-title="My caption"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                </div>
                
                <?php endwhile; ?>
            </div>
        </div>      
    </section>
    <!-- End gallery -->

	
<?php get_footer(); ?>