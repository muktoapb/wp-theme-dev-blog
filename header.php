<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="header_area">
        <div class="header_border">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 m-auto">
                        <div class="logo_wrapper">
                            <div class="logo">
                                <a href="<?php bloginfo( 'url' ); ?>"><h4 class="m-0"><?php bloginfo( 'name' ); ?></h4></a>
                                <p><?php bloginfo( 'description' ); ?></p>
                            </div>
                        </div>

                        <div class="mobile_menu">
                            <i class="fa fa-bars"></i>
                        </div>
                    </div>
                    <div class="col-md-9 m-auto">
                        <div class="navigation">
                            <?php wp_nav_menu(array(
                            'theme_location' => 'header_menu',
                            'container' => 'nav',
                            'container_class' => 'nav-collapse',
                            'menu_class' => 'main-menu',
                            'menu_id' => 'menu',
                            'depth' => '3',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker()
                            
                        )); 
                        ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <!-- Header area End
=========================== -->