<?php
/*
* Template Name: Tarifas Page
*/
$foto_principal_tarifas = get_field('foto_principal_tarifas');
$titulo_principal_tarifas = get_field('titulo_principal_tarifas');



get_header();
?>
    
    <!-- Start Hero -->
    <div class="large-hero">
        <div class="large-hero__img-wrapper large-hero__img-wrapper--internal">
            <img src="<?php echo $foto_principal_tarifas['url']; ?>" alt="<?php echo $foto_principal_tarifas['alt']; ?>" class="large-hero__image large-hero__image--internal">
        </div>
        <div class="large-hero__text-content">
            <div class="container">
                <h1 class="large-hero__title"><?php echo $titulo_principal_tarifas; ?></h1>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    
    <!-- Start Adiestramiento -->
    <section class="adiestramiento page-section" id="adiestramiento">
        <div class="container">
            <div class="row">
               
               <?php $loop =  new WP_Query(array('post_type' => 'seccion_tarifas', 'orderby' => 'post_id', 'order' => 'ASC'));?>
               
               <?php while ($loop -> have_posts() ) : $loop -> the_post(); ?>
               <?php 
                $descripcion_tarifas = get_field('descripcion_tarifas'); 
                $precio_tarifas = get_field('precio_tarifas');
                $texto_tarifas = get_field('texto_tarifas');
                ?>
               
               <div class="adiestramiento__item--content col-md-6 col-lg-4">
                    <article class="adiestramiento__item">
                        <div class="adiestramiento__img--wrapper">
                            <h2 class="adiestramiento__title--box"><?php the_title(); ?></h2>
                            <h3 class="adiestramiento__title"><?php echo $descripcion_tarifas; ?></h3>
                        </div>
                        <div class="adiestramiento__copy-wrapper">
                            <div class="adiestramiento__adapt">
                                <?php if( !empty($precio_tarifas)) : ?>
                                <h3 class="adiestramiento__precio">€<?php echo $precio_tarifas; ?></h3>
                                <?php else: ?>
                                <h3 class="adiestramiento__precio--consultar text-center" style="font-size:3.4rem;"><?php echo $texto_tarifas; ?></h3>
                                <?php endif; ?>
                            </div>
                        </div>
                    </article>
                </div>
               
               <?php endwhile; ?>
            </div>
        </div>     
    </section>
    <!-- End Adiestramiento -->
	
<?php get_footer(); ?>