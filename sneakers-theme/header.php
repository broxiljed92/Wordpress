<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <h1 class="logo">Sneakers Shop</h1>
        <p style="text-align:center; font-size:12px; color:gray;">
            Livraison gratuite dès 50€
        </p>
        <nav class="menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu'
            ));
            ?>
        </nav>
        <button id="theme-toggle" style="position:absolute;right:20px;top:20px;">
            🌙
        </button>
    </div>
</header>