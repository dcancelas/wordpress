<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="header">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/gintoki.jpeg">
            <h1 id="name"><?php bloginfo( 'name' ); ?></h1>
            <h2><?php bloginfo( 'description' ); ?></h2>
        </div>
    </body>
</html>