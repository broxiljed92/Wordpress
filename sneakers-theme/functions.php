<?php
function sneakers_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sneakers_theme_setup');

function sneakers_register_menus() {
    register_nav_menus(array(
        'main-menu' => 'Menu principal'
    ));
}
add_action('after_setup_theme', 'sneakers_register_menus');

function sneakers_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'sneakers_add_woocommerce_support');

// HOOk1 (action)
function message_avant_contenu() {
    echo "<p style='background:black;color:white;padding:10px;'>Promo Sneakers !</p>";
}
add_action('wp_body_open', 'message_avant_contenu');

// HOOK2 (filter)
function modifier_titre_produit($title) {
    if (is_product()) {
        return "" . $title;
    }
    return $title;
}
add_filter('the_title', 'modifier_titre_produit');