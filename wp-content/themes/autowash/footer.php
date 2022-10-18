<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autowash
 */

?>

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2><?php the_field('footer_text') ?></h2>
                            <p><i class="fa fa-map-marker-alt"></i><?php the_field('footer_address') ?></p>
                            <p><i class="fa fa-phone-alt"></i><?php the_field('footer_tel') ?></p>
                            <p><i class="fa fa-envelope"></i><?php the_field('footer_email') ?></p>
                            <div class="footer-social">
                                <a class="btn" href="<?php the_field('footer_href_1') ?>"><i class="fab fa-twitter"></i></a>
                                <a class="btn" href="<?php the_field('footer_href_2') ?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href="<?php the_field('footer_href_3') ?>"><i class="fab fa-youtube"></i></a>
                                <a class="btn" href="<?php the_field('footer_href_4') ?>"><i class="fab fa-instagram"></i></a>
                                <a class="btn" href="<?php the_field('footer_href_5') ?>"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Our Service</a>
                            <a href="">Service Points</a>
                            <a href="">Pricing Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Full Name">
                                <input class="form-control" placeholder="Email">
                                <button class="btn btn-custom">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved. Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/lib/easing/easing.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/lib/waypoints/waypoints.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="<?php echo get_template_directory_uri() ?>/mail/jqBootstrapValidation.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
    </body>
</html>
