<?php
/*
* Template Name: Contacto Page
*/
$foto_principal_contacto = get_field('imagen_principal_contacto');
$titulo_principal_contacto = get_field('titulo_principal_contacto');
$titulo_seccion_contacto = get_field('titulo_seccion_contacto');
$info_contacto = get_field('info_contacto');

get_header();
?>
    
    <!-- Start Hero -->
    <div class="large-hero">
    <!-- <picture>
        <source srcset="assets/images/hero--medium.jpg 1380w" media="(min-width: 990px)">
        <source srcset="assets/images/hero--small.jpg 990w" media="(min-width: 640px)"> 
        <img srcset="assets/images/hero--smaller.jpg 640w" alt="main" class="large-hero__image">
    </picture> -->
        <div class="large-hero__img-wrapper large-hero__img-wrapper--internal">
            <img src="<?php echo $foto_principal_contacto['url']; ?>" alt="<?php echo $foto_principal_contacto['alt']; ?>" class="large-hero__image large-hero__image--internal">
        </div>
        <div class="large-hero__text-content">
            <div class="container">
                <h1 class="large-hero__title"><?php echo $titulo_principal_contacto; ?></h1>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    
    <!-- Start contacto -->
    <section class="contacto page-section">
        <div class="container">
           <h3 class="title"><?php echo $titulo_seccion_contacto; ?></h3>
            <div class="row">
                    
                <div class="contacto__form--wrapper col-sm-6">
                    <form class="contacto__form" action="<?php echo get_stylesheet_directory_uri(); ?>/formulario.php" method="post" name="form1" id="formulario_contacto">
                        <div class="form-group">
                            <input type="text" class="form-control contacto__form__input" aria-describedby="emailHelp" placeholder="Nombre" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control contacto__form__input" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control contacto__form__input" id="exampleTextarea" rows="6" placeholder="Mensaje" name="mensaje" required></textarea>
                        </div>
                        <input type="submit" value="Enviar" class="contacto__form__button" name="submit" />
                    </form>
                    
                    <span id="success_message" class="mensajes"></span>
                        <script>
                            if(window.location.href == "http://localhost:8888/pbwordpress/contacto/#formulario_contacto"){
                                document.getElementById("success_message").style.display = "block";
                                document.getElementById("success_message").innerHTML = "Mensaje enviado con Exito!";
                            }
                        </script>
                </div>

                <div class="contacto__aside col-sm-6">
                    <?php echo $info_contacto; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End contacto -->
	
<?php get_footer(); ?>