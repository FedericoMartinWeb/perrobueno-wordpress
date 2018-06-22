<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package PerroBueno
 */

get_header();
?>

	<!-- Start Hero -->
    <div class="large-hero">
        <div class="large-hero__img-wrapper large-hero__img-wrapper--internal">
            <img src="<?php echo $foto_principal_adiestramiento['url']; ?>" alt="<?php $foto_principal_adiestramiento['alt']; ?>" class="large-hero__image large-hero__image--internal">
        </div>
        <div class="large-hero__text-content">
            <div class="container">
                <h1 class="large-hero__title large-hero__title--adiestra">Error 404 Not Found</h1>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    
    <!-- Start Adiestramiento -->
    <section class="adiestramiento page-section" id="adiestramiento">
        <div class="container">
            <h3 class="red">Woops! No pudimos encontrar la pagina que estas buscando!</h3>
        </div>     
    </section>
    <!-- End Adiestramiento -->
    
     <!-- Start gallery -->
    <section class="gallery page-section page-section--no-padding-top" id="gallery">
        <div class="container">
            <div class="row">
                <?php $loop =  new WP_Query(array('post_type' => 'galeria_adiestra', 'orderby' => 'post_id', 'order' => 'ASC'));?>
               
               <?php while ($loop -> have_posts() ) : $loop -> the_post(); ?>
               
                <div class="gallery__item col-md-6 col-lg-4 gallery-reveal">
                    <a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="image-1" data-title="My caption"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                </div>
                
                <?php endwhile; ?>
            </div>
        </div>      
    </section>
    <!-- End gallery -->

<?php
get_footer();
