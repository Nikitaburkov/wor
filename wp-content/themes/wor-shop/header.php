<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/css/style.css" type="text/css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="navigation-my">
    <div class="container  flex-cart">
        <?php wp_nav_menu( array('theme_location'=> 'Main Nav','menu' => 'Main', 'container' => 'nav' )); ?>
            <?php
            global $woocommerce; ?>
            <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="basket-btn basket-btn_fixed-xs">
                <span class="basket-btn__label">Корзина</span>
                <span class="basket-btn__counter">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
            </a>
        <!--</nav>-->
    </div>
</header>