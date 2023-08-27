<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
            <p><?php bloginfo('description')?></p>
            <?php wp_nav_menu(array(
                'theme_location' => 'primary'
            ));
            ?>
        </div>
    </header>