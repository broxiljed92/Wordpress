<?php get_header(); ?>
<header>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <h1>Page : <?php the_title(); ?></h1>
</header>
<main class="container">

    <?php
    if (is_product()) {

        echo "<h1 style='color:red;'>Page produit custom</h1>";

        while (have_posts()) : the_post();
            wc_get_template_part('content', 'single-product');
        endwhile;

    } else {

        echo "<h1>Notre Boutique</h1>";
        woocommerce_content();

    }
    ?>

</main>

<?php get_footer(); ?>