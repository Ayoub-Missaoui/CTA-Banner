<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=0">
        <title><?php bloginfo( 'name' );?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback' ); ?>"/>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="menu">
            <div class="menubar py-2"> <!-- Main container for the menu bar -->
                <div class="container"> <!-- Container for content -->
                    <div class="d-flex justify-content-between"> <!-- Row to hold columns -->
                        <div class="rate"> <!-- First column (left side) -->
                            <!-- Hide the current span on small screens and show alternative content -->
                            <span class="d-sm-none">4.5/5</span>
                            <!-- Show the current span on small screens and hide it on larger screens -->
                            <span class="d-none d-sm-block">Op basis van 72 reviews</span>
                        </div>
                        <div class="phone"> <!-- Second column (right side) -->
                            <!-- Hide the current span on small screens and show alternative content -->
                            <span class="d-sm-none">Bel (030) 44 30 210</span>
                            <!-- Show the current span on small screens and hide it on larger screens -->
                            <span class="d-none d-sm-block">Op basis van 72 reviews</span>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo get_template_directory_uri() . '/images/leapforce.svg' ?>" alt="leapforce" width="100" >
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon custom_menu_icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <?php theme_header_menu(); ?>
                        <button class="btn py-1 px-3 prime-button">Maak een afspraak</button>
                    </div>
                </div>
            </nav>
        </div>
