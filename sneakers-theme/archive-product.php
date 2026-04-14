<?php
defined('ABSPATH') || exit;

get_header();
?>

<main class="container">
    <h1>Notre Boutique</h1>

    <?php if (woocommerce_product_loop()) : ?>

        <?php woocommerce_product_loop_start(); ?>

            <?php while (have_posts()) : the_post(); ?>

                <?php wc_get_template_part('content', 'product'); ?>

            <?php endwhile; ?>

        <?php woocommerce_product_loop_end(); ?>

    <?php else : ?>

        <p>Aucun produit trouvé</p>

    <?php endif; ?>

</main>

<?php get_footer(); ?>