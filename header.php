<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
<!--        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div class="container">

            <!-- site-header -->
            <header class="site-header">
                <h1><a href="<?php echo home_url(); ?>"> <?php bloginfo('name') ?></a></h1>
                <h5><?php bloginfo('description'); ?></h5>
            </header>
