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
                <div class="adiestramiento__item--content col-md-6 col-lg-4">
                    <article class="adiestramiento__item">
                        <div class="adiestramiento__img--wrapper">
                            <h2 class="adiestramiento__title--box">Tarifas planas mensuales</h2>
                            <h3 class="adiestramiento__title">Lunes a viernes</h3>
                        </div>
                        <div class="adiestramiento__copy-wrapper">
                            <div class="adiestramiento__adapt">
                                <h3 class="adiestramiento__precio">€300</h3>
                            </div>
                        </div>
                    </article>
                </div>
                
                <div class="adiestramiento__item--content col-md-6 col-lg-4">
                    <article class="adiestramiento__item">
                        <div class="adiestramiento__img--wrapper">
                           <h2 class="adiestramiento__title--box">Tarifas planas mensuales</h2>
                            <h3 class="adiestramiento__title">Lunes a jueves</h3>
                        </div>
                        <div class="adiestramiento__copy-wrapper">
                            <div class="adiestramiento__adapt">
                                <h3 class="adiestramiento__precio">€260</h3>
                            </div>
                        </div>
                    </article>
                </div>
                
                <div class="adiestramiento__item--content col-md-6 col-lg-4">
                    <article class="adiestramiento__item">
                        <div class="adiestramiento__img--wrapper">
                            <h2 class="adiestramiento__title--box">Eventuales día suelto</h2>
                            <h3 class="adiestramiento__title">Recogida y entrega en el día siempre que el domicilio se encuentre dentro del radio de&nbsp;la&nbsp;ruta</h3>
                        </div>
                        <div class="adiestramiento__copy-wrapper">
                            <div class="adiestramiento__adapt">
                                <h3 class="adiestramiento__precio">€25</h3>
                            </div>
                        </div>
                    </article>
                </div>
                
                <div class="adiestramiento__item--content col-md-6 col-lg-4">
                    <article class="adiestramiento__item">
                        <div class="adiestramiento__img--wrapper">
                            <h2 class="adiestramiento__title--box">Estancias de verano/festivos</h2>
                            <h3 class="adiestramiento__title">Tarifa diaria</h3>
                        </div>
                        <div class="adiestramiento__copy-wrapper">
                            <div class="adiestramiento__adapt">
                                <h3 class="adiestramiento__precio">€15</h3>
                            </div>
                        </div>
                    </article>
                </div>
                
                <div class="adiestramiento__item--content col-md-6 col-lg-4">
                    <article class="adiestramiento__item">
                        <div class="adiestramiento__img--wrapper">
                            <h2 class="adiestramiento__title--box">Estancias de verano/festivos</h2>
                            <h3 class="adiestramiento__title">Larga estancia mas de 20&nbsp;dias</h3>
                        </div>
                        <div class="adiestramiento__copy-wrapper">
                            <div class="adiestramiento__adapt">
                                <h3 class="adiestramiento__precio--consultar">Consultar</h3>
                            </div>
                        </div>
                    </article>
                </div>
                
                <div class="adiestramiento__item--content col-md-6 col-lg-4">
                    <article class="adiestramiento__item">
                        <div class="adiestramiento__img--wrapper">
                            <h2 class="adiestramiento__title--box">Traslados</h2>
                            <h3 class="adiestramiento__title">Ida y vuelta siempre que este dentro del radio de&nbsp;la&nbsp;ruta</h3>
                        </div>
                        <div class="adiestramiento__copy-wrapper">
                            <div class="adiestramiento__adapt">
                                <h3 class="adiestramiento__precio">€10</h3>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>     
    </section>
    <!-- End Adiestramiento -->
	
<?php get_footer(); ?>