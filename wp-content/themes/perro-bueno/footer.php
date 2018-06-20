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
                    <a href="#" onclick="return false;">#tuperroalcole</a>
                    <a href="#" onclick="return false;">#mientrastutrabajas</a>
                    <a href="#" onclick="return false;">#perrobueno.es</a>
                </div>
                <div class="footer__phone col-12 col-md-4">
                    <span class="icon-phone">627 74 19 47</span>
                </div>
                <div class="footer__secondary-nav col-md-4">                    
                    <?php
                    
                        wp_nav_menu(array(
                            'theme_location' => 'menu-2',
                            'container' => 'div',
                            'container_class' => 'footer__secondary-nav__wrapper',
                            'items_wrap' => '%3$s'
                        ));
                    ?>
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
