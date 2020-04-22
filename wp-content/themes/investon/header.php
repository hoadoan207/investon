<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if (is_home()) {
            echo "YOU KNOW ME WELL";
        } else {
            echo wp_title('');
        } ?> </title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/extend/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/extend/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/extend/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/extend/swiper/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/build/style.css">

    <script>
        var site_uri = '<?php echo get_template_directory_uri()?>';
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
</head>
<?php wp_head() ?>
<body class="<?php echo add_slug_body_class() ?>">
<div class="wrapper" id="top">
    <header>
        <a href="<?php echo home_url(); ?>" class="logo-black">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/logo-black.svg" alt="">
            </div>
        </a>
        <a href="<?php echo home_url(); ?>" class="logo-white">
            <div class="logo" >
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/logo.svg" alt="">
            </div>
        </a>
        <div class="toggle-menu"><h1>Menu</h1></div>
        <div class="ig-logo">
            <a href="https://www.instagram.com/youknowmewell/" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </header>
    <div class="menu">
        <div class="circle toggle-menu"></div>
            <div class="ig-logo">
                <a href="https://www.instagram.com/youknowmewell/" target="_blank">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        <ul class="list-view">
            <li class="mn-text">
                <a href="<?php echo site_url('works'); ?>">Works</a>
            </li>
            <li class="mn-text">
                <a href="#">Exhibitions</a>
            </li>
            <li class="mn-text">
                <a href="#">Vita</a>
            </li>
            <li class="mn-text">
                <a href="#">Shop</a>
            </li>
            <li class="mn-text">
                <a href="#">Contact</a>
            </li>
            </ul>
        </div>
