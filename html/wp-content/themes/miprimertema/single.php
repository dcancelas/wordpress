<!DOCTYPE html>
<html lang="es">
<body>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<? get_header(); ?>

<main id="site-content">
    <div>
        <a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
        <?php edit_post_link(); ?>
    </div>
    <a href="<?php echo home_url();?>">Volver</a>
</main>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>