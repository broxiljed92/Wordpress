<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <h1>JUST DRIP IT</h1>
    <p>Les sneakers les plus tendances</p>
    <a href="/boutique" class="button">ACHETEZ MAINTENANT</a>
</section>

<!-- CONTENU PRINCIPAL -->
<main class="container">

    <!-- SECTION PRODUITS -->
    <section>
        <h2>Produits populaires</h2>

        <?php echo do_shortcode('[products limit="6" columns="3"]'); ?>
    </section>

    <!-- SECTION CATÉGORIES -->
    <section>
        <h2>Catégories</h2>

        <?php echo do_shortcode('[product_categories number="3" columns="3"]'); ?>
    </section>

    <!-- SECTION PROMO -->
    <section style="text-align:center; margin:50px 0;">
        <h2>Promo du moment</h2>
        <p>-20% sur toutes les sneakers !</p>
        <a href="/boutique" class="button">Voir les offres</a>
    </section>

</main>

<?php get_footer(); ?>