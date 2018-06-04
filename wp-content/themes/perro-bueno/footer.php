<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PerroBueno
 */

?>

<?php wp_footer(); ?>

    <!-- Start footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer__hash col-12 col-md-4">
                    <a href="#">#tuperroalcole</a>
                    <a href="#">#mientrastutrabajas</a>
                    <a href="#">#perrobueno.es</a>
                </div>
                <div class="footer__phone col-12 col-md-4">
                    <span class="icon-phone">627 74 19 47</span>
                </div>
                <div class="footer__secondary-nav col-md-4">
                    <div class="footer__secondary-nav__wrapper">
                        <li><a href="index.php" class="primary-nav__active">Home</a></li>
                        <li><a href="guarderia.php">Guarderia</a></li>
                        <li><a href="adiestramiento.php">Adiestramiento</a></li>
                        <li><a href="tarifas.php">Tarifas</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </div>
                </div>
            </div>
        </div>
            <div class="footer__date">
                <span class="section-footer__text">Copyright &copy; <?php echo date('Y'); ?> All rights reserved.</span>
            </div>
    </footer>
    <!-- End footer -->

<!-- build:js /assets/scripts/App.js -->
<script src="<?php bloginfo('template_directory'); ?>/assets/scripts/App.js"></script>
<!-- endbuild -->
<script src="<?php bloginfo('template_directory'); ?>/assets/scripts/lightbox.js"></script>

</body>
</html>
