<!-- footer area start -->
<footer class="footer-area">
    <?php if( have_rows('footer_group') ): ?>
        <?php while( have_rows('footer_group') ): the_row();
            // Get sub field values.
            $logo = get_sub_field('logo');
            $description = get_sub_field('description');
            $socials = get_sub_field('socials');
            $title = get_sub_field('title');
            $address = get_sub_field('address');
            $email = get_sub_field('email');
            $phone = get_sub_field('phone');
            ?>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="footer-widget widget widget-about-us">
                                <a href="index.html" class="footer-logo">
                                    <img src="<?php echo $logo ?>" alt="footer logo">
                                </a>
                                <p><?php echo $description ?></p>
                                <ul class="footer-social social-area-2">
                                    <?php
                                        foreach ($socials as $social) { ?>
                                            <li><a href="<?php echo $social["link"] ?>"><i class="<?php echo $social["font_awesome"] ?>"></i></a></li>
                                        <?php }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="footer-widget widget contact-widget">
                                <h4 class="widget-title"><?php echo $title ?> <span class="dot">.</span></h4>
                                <p><?php echo $address ?></p>
                                <p><?php echo $email ?></p>
                                <p><?php echo $phone ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom remove-temp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 text-lg-left text-center">
                            <ul class="footer-menu">
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Recent</a></li>
                                <li><a href="#">Privecy</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Investment</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-5 text-center text-lg-right">
                            <p class="copyright">@ 2019, templates7theme . all right reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<!-- vendor js here -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/vendor.js"></script>
<!--signin -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/signin.js"></script>
<!--coundown timer JS-->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/countdown-timer.js"></script>
<!-- magnific popup -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.magnific-popup.min.js"></script>
<!-- counterup -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.counterup.min.js"></script>
<!-- waypoint -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.waypoints.js"></script>
<!-- main js  -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>

<script>
    /*Custom js*/

    // remove temporary
    $(document).ready(function(){
        $(".remove-temp").remove();
    });

    // menu nav scroll animate
    $('.navbar-nav').find('a').click(function(){
        var $href = $(this).attr('href');
        var $anchor = $($href).offset();
        $('html').animate({ scrollTop: $anchor.top });
        return false;
    });
</script>

</body>
</html>
