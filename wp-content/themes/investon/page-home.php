<?php get_header(); ?>

<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!-- search Popup -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="index.html" class="main-search search-form">
        <input type="text" placeholder="Search...">
        <button>Search</button>
    </form>
</div>
<!-- //. search Popup -->
<!-- Signin Popup -->
<div class="sen-user-modal">
    <!-- this is the entire modal form, including the background -->
    <div class="sen-user-modal-container">
        <!-- this is the container wrapper -->
        <ul class="sen-switcher">
            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">Sign up</a></li>
        </ul>

        <div id="sen-login">
            <!-- log in form -->
            <form class="sen-form">
                <p class="fieldset">
                    <label class="image-replace sen-email" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                    <span class="sen-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace sen-password" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" id="signin-password" type="text" placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="sen-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="remember-me" checked>
                    <label for="remember-me">Remember me</label>
                </p>

                <p class="fieldset">
                    <input class="full-width" type="submit" value="Login">
                </p>
            </form>

            <p class="sen-form-bottom-message"><a href="#0">Forgot your password?</a></p>
            <!-- <a href="#0" class="sen-close-form">Close</a> -->
        </div>
        <!-- sen-login -->

        <div id="sen-signup">
            <!-- sign up form -->
            <form class="sen-form">
                <p class="fieldset">
                    <label class="image-replace sen-username" for="signup-username">Username</label>
                    <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                    <span class="sen-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace sen-email" for="signup-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                    <span class="sen-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace sen-password" for="signup-password">Password</label>
                    <input class="full-width has-padding has-border" id="signup-password" type="text" placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="sen-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="accept-terms">
                    <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Create account">
                </p>
            </form>

            <!-- <a href="#0" class="sen-close-form">Close</a> -->
        </div>
        <!-- sen-signup -->

        <div id="sen-reset-password">
            <!-- reset password form -->
            <p class="sen-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

            <form class="sen-form">
                <p class="fieldset">
                    <label class="image-replace sen-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="sen-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="sen-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div>
        <!-- sen-reset-password -->
        <a href="#0" class="sen-close-form">Close</a>
    </div>
    <!-- sen-user-modal-container -->
</div>
<!-- sen-user-modal -->
<!-- //.End  Signin Popup -->

<!-- navbar start -->
<div class="navbar-area navbar-area-2">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-sm-left text-center">
                    <ul class="topbar-left">
                        <li class="topbar-single-info"><i class="fa fa-envelope"></i>info@gmail.com</li>
                        <li class="topbar-single-info ml-3 ml-lg-0"><i class="fa fa-phone"></i>+97657945737</li>
                    </ul>
                </div>
                <div class="col-sm-5 text-sm-right text-center">
                    <ul class="topbar-right float-md-right">
                        <li class="topbar-single-info">
                            <span class="d-none d-lg-inline-block">Invest Offer</span>
                        </li>
                        <li class="topbar-single-info topbar-social-icon"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="topbar-single-info topbar-social-icon"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="topbar-single-info topbar-social-icon"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="topbar-single-info topbar-social-icon"><a href="#"><i class="fa fa-instagram mr-0"></i></a></li>
                        <li class="topbar-single-info topbar-signin sign-nav ml-3 ml-lg-0">
                            <a href="#"><i class="fa fa-user-o"></i>Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-area navbar-expand-lg nav-transparent">
        <div class="container nav-container nav-white">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-toggle="collapse" data-target="#investon_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <a href="index.html"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-white.png" alt="logo"></a>
            </div>
            <?php
            $menu_items = wp_get_nav_menu_items("top-nav");
            ?>
            <div class="collapse navbar-collapse" id="investon_main_menu">
                <ul class="navbar-nav menu-open">
                    <?php
                        $i = 0;
                        foreach ($menu_items as $item) { ?>
                            <li class="menu-item-has-children <?php echo $i == 0  ? "current-menu-item" : "" ?>">
                                <a href="<?php echo $item->url ?>"><?php echo $item->post_title ?></a>
                            </li>
                        <?php $i++; }
                    ?>
                </ul>
            </div>
            <ul class="right-part-search pr-0">
                <li class="search" id="search">
                    <a href="#"><i class="fa fa-search"></i></a>
                </li>
                <li class="menubar d-none d-lg-block" id="navigation-button">
                    <a><i class="flaticon-menu-button"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- navbar end -->

<!-- banner area start -->
<?php include "template/intro-area.php" ?>
<!-- banner area end -->

<!-- work area start -->
<?php include "template/service-area.php" ?>
<!-- work area end -->

<!-- featured area start -->
<?php include "template/feature-area.php" ?>
<!-- featured area end -->

<div class="shape-4" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/shape/4.png);">
    <!-- fact-count area start -->
    <?php include "template/total-area.php" ?>
    <!-- fact-count area end -->

    <!-- video-area start -->
    <?php include "template/about-area.php" ?>
    <!-- video-area end -->
</div>

<!-- transaction-area start -->
<div class="transaction-area left-bottom-line-bg common-pd-bottom-3 remove-temp" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/shape/pen.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h5 class="subtitle">Transaction Process</h5>
                    <h3 class="title">Latest Transaction</h3>
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <p class="mb-0">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lore</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="transaction-tab-area">
                    <ul class="transaction-tab nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item btn">
                            <a class="nav-link bottom-right-radius-0 active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Deposit</a>
                        </li>
                        <li class="nav-item btn m-0">
                            <a class="nav-link bottom-left-radius-0" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Withdraw</a>
                        </li>
                    </ul>
                    <div class="transaction-table tab-content" id="myTabContent">
                        <div class="tab-pane deposit-tab fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th colspan="2" scope="col">Person</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Currency</th>
                                        <th scope="col">Deposit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="table-margin">
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="<?php echo get_template_directory_uri() ?>/assets/img/transection/01.png" alt="client"></th>
                                        <td class="name">Emmett Steinkellner</td>
                                        <td>Oct 24,2018</td>
                                        <td>$9,00,000.00</td>
                                        <td>Dollar</td>
                                        <td>001 Days Ago</td>
                                    </tr>
                                    <tr class="table-margin">
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="<?php echo get_template_directory_uri() ?>/assets/img/transection/02.png" alt="client"></th>
                                        <td class="name">Emmett Steinkellner</td>
                                        <td>Oct 24,2018</td>
                                        <td>$9,00,000.00</td>
                                        <td>Dollar</td>
                                        <td>001 Days Ago</td>
                                    </tr>
                                    <tr class="table-margin">
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="<?php echo get_template_directory_uri() ?>/assets/img/transection/03.png" alt="client"></th>
                                        <td class="name">Emmett Steinkellner</td>
                                        <td>Oct 24,2018</td>
                                        <td>$9,00,000.00</td>
                                        <td>Dollar</td>
                                        <td>001 Days Ago</td>
                                    </tr>
                                    <tr class="table-margin">
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="<?php echo get_template_directory_uri() ?>/assets/img/transection/04.png" alt="client"></th>
                                        <td class="name">Emmett Steinkellner</td>
                                        <td>Oct 24,2018</td>
                                        <td>$9,00,000.00</td>
                                        <td>Dollar</td>
                                        <td>001 Days Ago</td>
                                    </tr>
                                    <tr class="table-margin">
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="<?php echo get_template_directory_uri() ?>/assets/img/transection/01.png" alt="client"></th>
                                        <td class="name">Emmett Steinkellner</td>
                                        <td>Oct 24,2018</td>
                                        <td>$9,00,000.00</td>
                                        <td>Dollar</td>
                                        <td>001 Days Ago</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane withdraw-tab fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th colspan="2" scope="col">Person</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Currency</th>
                                        <th scope="col">Deposit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="table-margin">
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="<?php echo get_template_directory_uri() ?>/assets/img/transection/01.png" alt="client"></th>
                                        <td class="name">Emmett Steinkellner</td>
                                        <td>Oct 24,2018</td>
                                        <td>$9,00,000.00</td>
                                        <td>Dollar</td>
                                        <td>001 Days Ago</td>
                                    </tr>
                                    <tr class="table-margin">
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="<?php echo get_template_directory_uri() ?>/assets/img/transection/02.png" alt="client"></th>
                                        <td class="name">Emmett Steinkellner</td>
                                        <td>Oct 24,2018</td>
                                        <td>$9,00,000.00</td>
                                        <td>Dollar</td>
                                        <td>001 Days Ago</td>
                                    </tr>
                                    <tr class="table-margin">
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="<?php echo get_template_directory_uri() ?>/assets/img/transection/03.png" alt="client"></th>
                                        <td class="name">Emmett Steinkellner</td>
                                        <td>Oct 24,2018</td>
                                        <td>$9,00,000.00</td>
                                        <td>Dollar</td>
                                        <td>001 Days Ago</td>
                                    </tr>
                                    <tr class="table-margin">
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="<?php echo get_template_directory_uri() ?>/assets/img/transection/04.png" alt="client"></th>
                                        <td class="name">Emmett Steinkellner</td>
                                        <td>Oct 24,2018</td>
                                        <td>$9,00,000.00</td>
                                        <td>Dollar</td>
                                        <td>001 Days Ago</td>
                                    </tr>
                                    <tr class="table-margin">
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><img src="<?php echo get_template_directory_uri() ?>/assets/img/transection/01.png" alt="client"></th>
                                        <td class="name">Emmett Steinkellner</td>
                                        <td>Oct 24,2018</td>
                                        <td>$9,00,000.00</td>
                                        <td>Dollar</td>
                                        <td>001 Days Ago</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- transaction-area end -->

<div class="shape-2 remove-temp" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/shape/2.png);">
    <!-- why-choose-us-area start -->
    <div class="why-choose-us-area pd-bottom-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="thumb item-bounce d-none d-lg-block">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/why-choose-us/01.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="single-facility media">
                        <span class="number">1</span>
                        <div class="thumb align-self-center">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/tree.png" alt="icon">
                        </div>
                        <div class="facility-details media-body">
                            <h5>Stable & Profitable</h5>
                            <p>Lorem ipsuelit, sed do eiusmod tempor ofincidid labore et dolore magna</p>
                        </div>
                    </div>
                    <div class="single-facility media">
                        <span class="number">2</span>
                        <div class="thumb align-self-center">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/tree.png" alt="icon">
                        </div>
                        <div class="facility-details media-body">
                            <h5>Instant Withdraw</h5>
                            <p>Lorem ipsuelit, sed do eiusmod tempor ofincidid labore et dolore magna</p>
                        </div>
                    </div>
                    <div class="single-facility media">
                        <span class="number">3</span>
                        <div class="thumb align-self-center">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/tree.png" alt="icon">
                        </div>
                        <div class="facility-details media-body">
                            <h5>Referral Provides</h5>
                            <p>Lorem ipsuelit, sed do eiusmod tempor ofincidid labore et dolore magna</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why-choose-us-area end -->

    <!-- pricing-area start -->
    <div class="pricing-area pd-bottom-85">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-12">
                    <div class="section-title text-lg-left text-center">
                        <h5 class="subtitle"><span></span>Investon Price</h5>
                        <h3 class="title">Grab Our Mega Package</h3>
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="mb-0">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="pricing-tab">
                        <nav>
                            <div class="nav nav-tabs text-center" id="nav-tab">
                                <a class="btn ml-0 nav-item nav-link active" id="nav-monthly-tab" data-toggle="tab" href="#nav-monthly">Monthly</a>
                                <a class="btn nav-item nav-link" id="nav-yearly-tab" data-toggle="tab" href="#nav-yearly">Yearly</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-monthly">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing-wrap text-center">
                                            <span class="animate-dots"></span>
                                            <div class="price">5.50%</div>
                                            <div class="thumb">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pricing/01.png" alt="icon">
                                            </div>
                                            <h5>Investon Advanced</h5>
                                            <ul>
                                                <li><a href="#">Miximum Deposit $10,00</a></li>
                                                <li><a href="#">Minimum Deposit $10</a></li>
                                                <li><a href="#">Up to 50 Users available</a></li>
                                            </ul>
                                            <a class="btn btn-plus" href="#"><i class="fa fa-plus"></i></a>
                                            <a class="btn btn-white" href="#">Buy Now</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing-wrap text-center">
                                            <span class="animate-dots"></span>
                                            <div class="price">5.50%</div>
                                            <div class="thumb">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pricing/01.png" alt="icon">
                                            </div>
                                            <h5>Investon Advanced</h5>
                                            <ul>
                                                <li><a href="#">Miximum Deposit $10,00</a></li>
                                                <li><a href="#">Minimum Deposit $10</a></li>
                                                <li><a href="#">Up to 50 Users available</a></li>
                                            </ul>
                                            <a class="btn btn-plus" href="#"><i class="fa fa-plus"></i></a>
                                            <a class="btn btn-white" href="#">Buy Now</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing-wrap text-center">
                                            <span class="animate-dots"></span>
                                            <div class="price">5.50%</div>
                                            <div class="thumb">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pricing/01.png" alt="icon">
                                            </div>
                                            <h5>Investon Advanced</h5>
                                            <ul>
                                                <li><a href="#">Miximum Deposit $10,00</a></li>
                                                <li><a href="#">Minimum Deposit $10</a></li>
                                                <li><a href="#">Up to 50 Users available</a></li>
                                            </ul>
                                            <a class="btn btn-plus" href="#"><i class="fa fa-plus"></i></a>
                                            <a class="btn btn-white" href="#">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-yearly">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing-wrap text-center">
                                            <span class="animate-dots"></span>
                                            <div class="price">5.50%</div>
                                            <div class="thumb">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pricing/01.png" alt="icon">
                                            </div>
                                            <h5>Investon Advanced</h5>
                                            <ul>
                                                <li><a href="#">Miximum Deposit $10,00</a></li>
                                                <li><a href="#">Minimum Deposit $10</a></li>
                                                <li><a href="#">Up to 50 Users available</a></li>
                                            </ul>
                                            <a class="btn btn-plus" href="#"><i class="fa fa-plus"></i></a>
                                            <a class="btn btn-white" href="#">Buy Now</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing-wrap text-center">
                                            <span class="animate-dots"></span>
                                            <div class="price">5.50%</div>
                                            <div class="thumb">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pricing/01.png" alt="icon">
                                            </div>
                                            <h5>Investon Advanced</h5>
                                            <ul>
                                                <li><a href="#">Miximum Deposit $10,00</a></li>
                                                <li><a href="#">Minimum Deposit $10</a></li>
                                                <li><a href="#">Up to 50 Users available</a></li>
                                            </ul>
                                            <a class="btn btn-plus" href="#"><i class="fa fa-plus"></i></a>
                                            <a class="btn btn-white" href="#">Buy Now</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing-wrap text-center">
                                            <span class="animate-dots"></span>
                                            <div class="price">5.50%</div>
                                            <div class="thumb">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pricing/01.png" alt="icon">
                                            </div>
                                            <h5>Investon Advanced</h5>
                                            <ul>
                                                <li><a href="#">Miximum Deposit $10,00</a></li>
                                                <li><a href="#">Minimum Deposit $10</a></li>
                                                <li><a href="#">Up to 50 Users available</a></li>
                                            </ul>
                                            <a class="btn btn-plus" href="#"><i class="fa fa-plus"></i></a>
                                            <a class="btn btn-white" href="#">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing-area end -->
</div>

<!-- history-area start -->
<div class="history-area pd-bottom-85 remove-temp">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title text-lg-left text-center">
                    <h5 class="subtitle"><span></span>Investon History</h5>
                    <h3 class="title">Know More Us</h3>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-history-wrap text-center text-lg-left">
                            <h1 class="counter">234</h1>
                            <p>Every week Investor logins </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-history-wrap text-center text-lg-left">
                            <h1 class="counter">542</h1>
                            <p>Every week Investor logins </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-history-wrap text-center text-lg-left">
                            <h1 class="counter">132</h1>
                            <p>Every week Investor logins </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-lg-block d-none align-self-center">
                <div class="thumb item-bounce">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/history/01.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- history-area end -->

<!-- team area start -->
<div class="team-area-2 common-pd-bottom remove-temp">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title text-lg-left text-center">
                    <h5 class="subtitle"><span></span>Top Investors</h5>
                    <h3 class="title">Fast Smart think</h3>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-wrap text-center">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/team/01.png" alt="img">
                    </div>
                    <div class="team-details">
                        <h6>Bradon Crithia</h6>
                        <h6>Founder</h6>
                        <ul class="social-area">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-wrap text-center">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/team/02.png" alt="img">
                    </div>
                    <div class="team-details">
                        <h6>Bradon Crithia</h6>
                        <h6>Founder</h6>
                        <ul class="social-area">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-wrap text-center">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/team/03.png" alt="img">
                    </div>
                    <div class="team-details">
                        <h6>Bradon Crithia</h6>
                        <h6>Founder</h6>
                        <ul class="social-area">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-wrap text-center">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/team/04.png" alt="img">
                    </div>
                    <div class="team-details">
                        <h6>Bradon Crithia</h6>
                        <h6>Founder</h6>
                        <ul class="social-area">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team area end -->

<!-- news-slider-area start-->
<div class="container remove-temp">
    <div class="row">
        <div class="col-lg-12">
            <div class="news-slider-area">
                <h6>Latest Top Investments News</h6>
                <div class="news-slider owl-carousel owl-theme">
                    <div class="item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/news-slider/01.png" alt="img"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/news-slider/02.png" alt="img"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/news-slider/03.png" alt="img"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/news-slider/04.png" alt="img"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/news-slider/01.png" alt="img"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/news-slider/02.png" alt="img"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/news-slider/03.png" alt="img"></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/news-slider/04.png" alt="img"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- news-slider-area end -->

<!-- blog-area start -->
<div class="blog-area common-pd-bottom remove-temp">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-wrap">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/01.png" alt="img">
                    </div>
                    <div class="blog-details">
                        <h5>Grab Our Mega Package</h5>
                        <span><i class="fa fa-user"></i>Author</span>
                        <span><i class="fa fa-clock-o"></i>25 May 2019</span>
                        <p>Sed et ultricies metus.luctuslectus ut purus va facilisis. Nulla ut enimlutpat non eros pretium sed do eiusmod tem</p>
                        <div class="blog-btn text-center">
                            <a class="btn btn-white bottom-right-radius-0" href="blog-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-wrap">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/02.png" alt="img">
                    </div>
                    <div class="blog-details">
                        <h5>How Do Digital Services</h5>
                        <span><i class="fa fa-user"></i>Author</span>
                        <span><i class="fa fa-clock-o"></i>25 May 2019</span>
                        <p>Sed et ultricies metus.luctuslectus ut purus va facilisis. Nulla ut enimlutpat non eros pretium sed do eiusmod tem</p>
                        <div class="blog-btn text-center">
                            <a class="btn btn-white bottom-right-radius-0" href="blog-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-wrap">
                    <div class="thumb">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/03.png" alt="img">
                    </div>
                    <div class="blog-details">
                        <h5>How Do Digital Services</h5>
                        <span><i class="fa fa-user"></i>Author</span>
                        <span><i class="fa fa-clock-o"></i>25 May 2019</span>
                        <p>Sed et ultricies metus.luctuslectus ut purus va facilisis. Nulla ut enimlutpat non eros pretium sed do eiusmod tem</p>
                        <div class="blog-btn text-center">
                            <a class="btn btn-white bottom-right-radius-0" href="blog-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-area end -->

<?php include "template/client-area.php" ?>

<div class="shape-5 remove-temp" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/shape/5.png);">
    <!-- client area start -->
    <div class="partner-area common-pd-bottom-4 right-bottom-line-bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/shape/pen-3.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="partner-slider owl-carousel owl-theme">
                        <div class="item">
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/partner/03.png" alt="client"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/partner/02.png" alt="client"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/partner/03.png" alt="client"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/partner/04.png" alt="client"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/partner/03.png" alt="client"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client area end -->
</div>

<!-- check-profit-area start -->
<?php include "template/profit-area.php" ?>
<!-- check-profit-area end -->

<!-- subscribe area start -->
<div class="subscribe-area bg-gray common-pd-subscribe text-center text-sm-left remove-temp">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <h3 class="title"><i class="fa fa-paper-plane-o"></i>Contact For Us</h3>
            </div>
            <div class="col-lg-6 offset-lg-1 align-self-center">
<!--                <form class="subscribe-form">-->
<!--                    <input type="text" placeholder="YOUR MAIL">-->
<!--                    <button>SUBSCRIBE</button>-->
<!--                </form>-->

                <div class="check-profit-area">
                    <div class="container">
                        <form>
                            <div class="title text-center">
                                <h5>Contact For Us</h5>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Skype</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="form-control">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- subscribe area end -->

<?php get_footer(); ?>
