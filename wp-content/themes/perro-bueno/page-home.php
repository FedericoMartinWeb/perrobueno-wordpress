<?php
/*
    Template Name: Home Page
 */

get_header(); ?>

<!-- Start Hero -->
    <div class="large-hero">
    <!-- <picture>
        <source srcset="assets/images/hero--medium.jpg 1380w" media="(min-width: 990px)">
        <source srcset="assets/images/hero--small.jpg 990w" media="(min-width: 640px)"> 
        <img srcset="assets/images/hero--smaller.jpg 640w" alt="main" class="large-hero__image">
    </picture> -->
        <div class="large-hero__img-wrapper">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_56_2.png" alt="" class="large-hero__image">
        </div>
        <div class="large-hero__text-content">
            <div class="container">
                <div class="large-hero__fix">   
                    <h1 class="large-hero__title">Bienvenido a PERROBUENO Madrid</h1>
                    <p class="large-hero__description">Tu perro al cole!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    
    <!-- Start Services -->
    <main class="services page-section" id="services">
        <div class="container">
            <h2 class="title">Servicios</h2>
            <p>PerroBueno fue creado por amantes de los animales para darles un servicio personalizado. En nuestras instalaciones no verás a tu perro encerrado, es un lugar especial para que disfruten mientras tú realizas tus obligaciones o te vas a tus vacaciones deseadas y no puedes llevarle contigo. Contamos con un lugar apropiado para poder  tener a los perros como en casa, con  espacio suficiente e instalaciones preparadas para todo tipo de perros (piscina incluida en verano). </p>
            <p class="services__parrafo">Sólo contamos con un grupo muy limitado de perros en nuestra Guardería de Día, esto hace que el trato con  cada uno de los ellos sea 100% personalizado. La Guardería de Día es una alternativa al paseador convencional, ya que los paseos son  más largos evitando las horas que tu mejor amigo se encuentra solo en casa, así  mejora  su estado físico por falta de ejercicio y calma la ansiedad  por aburrimiento. No dudes en llamarnos con cualquier duda o inquietud que tengas. <br><br> <span class="blue fz-2">Nuestra Guardería de Día es novedosa en  Madrid  y nuestros huéspedes están más que encantados!</span></p>
            
            <div class="row">
                <div class="services__item--content col-md-6 col-lg-4">
                    <a href="guarderia.php" class="services__item--link">
                        <article class="services__item">
                            <span class="icon-home services__icon"></span>
                            <h3 class="services__title">Guarderia de día</h3>
                        </article>
                    </a>
                </div>
                
                <div class="services__item--content col-md-6 col-lg-4">
                    <a href="adiestramiento.php" class="services__item--link">
                        <article class="services__item">
                            <span class="icon-graduation-cap services__icon"></span>
                            <h3 class="services__title">Adiestramiento profesional</h3>    
                        </article>
                    </a>
                </div>
                
                <div class="services__item--content col-md-6 col-lg-4">
                    <a href="tarifas.php" class="services__item--link">
                        <article class="services__item">
                            <span class="icon-eur services__icon"></span>
                            <h3 class="services__title">Tarifas</h3>
                        </article>
                    </a>
                </div>
                
                <div class="services__item--content col-md-6 col-lg-4">
                    <a href="http://www.bigvete.es/" class="services__item--link" target="_blank">
                        <article class="services__item">
                            <span class="icon-hospital-o services__icon"></span>
                            <h3 class="services__title">Veterinario a domicilio <span class="red">bigvete.es</span> </h3>
                        </article>
                    </a>
                </div>
                
                <div class="services__item--content col-md-6 col-lg-4">
                    <article class="services__item">
                        <span class="icon-sun-o services__icon"></span>
                        <h3 class="services__title">Campamento de&nbsp;verano</h3>    
                    </article>
                </div>
                
                <div class="services__item--content col-md-6 col-lg-4">
                    <article class="services__item">
                        <span class="icon-life-ring services__icon"></span>
                        <h3 class="services__title">Piscina</h3>
                    </article>
                </div>
            </div>
        </div>      
    </main>
    <!-- End Services -->
    
    <!-- Start know-us -->
    <section class="know-us page-section" id="services">
        <div class="know-us__filter">
            <div class="know-us__img-wrapper">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_prueba.jpg" alt="">
            </div>
        </div>
        <div class="container know-us__content-wrapper">
            <h2 class="title title--smaller">Conocenos un poco mas...</h2>
            <div class="know-us__video-wrapper">
                <iframe src="https://www.youtube.com/embed/yPsPWXjjxhk?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>      
    </section>
    <!-- End know-us -->
    
    <!-- Start gallery -->
    <section class="gallery page-section" id="gallery">
        <div class="container">
            <h2 class="title">Nuestros Amigos!</h2>
            <div class="row">
               
                <div class="gallery__item col-md-6 col-lg-4 gallery-reveal">
                    <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_7.jpg" data-lightbox="image-1" data-title="My caption"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_7.jpg" alt=""></a>
                </div>
                <div class="gallery__item col-md-6 col-lg-4 gallery-reveal">
                    <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_8.jpg" data-lightbox="image-1" data-title="My caption"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_8.jpg" alt=""></a>
                </div>
                <div class="gallery__item col-md-6 col-lg-4 gallery-reveal">
                    <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_3.jpg" data-lightbox="image-1" data-title="My caption"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_3.jpg" alt=""></a>
                </div>
                <div class="gallery__item col-md-6 col-lg-4 gallery-reveal">
                    <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_4.jpg" data-lightbox="image-1" data-title="My caption"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_4.jpg" alt=""></a>
                </div>
                <div class="gallery__item col-md-6 col-lg-4 gallery-reveal">
                    <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_5.jpg" data-lightbox="image-1" data-title="My caption"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_5.jpg" alt=""></a>
                </div>
                <div class="gallery__item col-md-6 col-lg-4 gallery-reveal">
                    <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_6.jpg" data-lightbox="image-1" data-title="My caption"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/perro_6.jpg" alt=""></a>
                </div>
            </div>
        </div>      
    </section>
    <!-- End gallery -->
    
    <!-- Start titulacion -->
    <section class="titulacion">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 titulacion__item">
                    <h3 class="titulacion__item__title">Servicios brindados por profesionales con titulación oficial de la Federación Cinológica de&nbsp;España</h3>
                    <p class="titulacion__item__parrafo">Veterinario de confianza a precios razonables donde puedes hacer tus consultas: <a href="http://www.bigvete.es/" target="_blank">www.bigvete.es</a></p>
                </div>
                
                <div class="col-md-6 titulacion__item titulacion__item--red">
                    <a href="https://www.teaming.net/esterilizacionaperrosppprescatados" target="_blank"><img class="titulacion__item__img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/teaming.png" alt=""></a>
                    <p class="titulacion__item__dona">Dona 1€ al mes a mi Grupo Teaming</p>
                    <p class="titulacion__item__parrafo--azul"><a href="https://www.teaming.net/esterilizacionaperrosppprescatados" target="_blank">Esterilizacion a perros PPP</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End titulacion -->

<?php get_footer(); ?>