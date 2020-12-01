<!DOCTYPE html>
<html lang="es">
<body>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<? get_header(); ?>

<main id="site-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div id="post">
            <div id="thumbnail"><?php the_post_thumbnail('medium');?></div>
            <a class="white-link" href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php edit_post_link(); ?>
        </div>

    <?php endwhile; ?>

        <?php
        if ( get_next_posts_link() ) {
            next_posts_link();
        }
        ?>
        <?php
        if ( get_previous_posts_link() ) {
            previous_posts_link();
        }
        ?>

    <?php else: ?>

        <p>No posts found. :(</p>

    <?php endif; ?>
</main>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>