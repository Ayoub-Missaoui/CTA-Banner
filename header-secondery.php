<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo( 'name' );?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback' ); ?>"/>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="header-secondery">
            <nav class="navbar navbar-expand-lg navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo get_template_directory_uri() . '/images/leapforce.svg' ?>" alt="leapforce" width="100">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <?php theme_header_menu(); ?>
                        <button class="btn py-1 px-3 secondery-button">Maak een afspraak</button>
                    </div>
                </div>
            </nav>
        </div>
