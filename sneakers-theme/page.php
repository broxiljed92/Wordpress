<?php get_header(); ?>
<header>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <h1>Page : <?php the_title(); ?></h1>
</header>
<main class="container">
    <h1><?php the_title(); ?></h1>
    <div class="content">
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>