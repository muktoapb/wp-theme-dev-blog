<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body <?php body_class('diag'); ?>>
    
<!-- LOADER -->
<div class="loader-wrapper">
    <div class="loader"></div>
</div>
    
    <nav>
        <div class="row">
            <div class="container">
                <div class="logo">
                    <a href="<?php bloginfo( 'url' ); ?>"> 
                        <?php if ( get_field('logo','option') ) : $image = get_field('logo','option'); ?>
                        
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        
                        <?php endif; ?>
                        
                        <!-- <img src="images/logo.png" alt=""> -->
                    </a>
                </div>
                <div class="responsive"><i data-icon="m" class="icon"></i></div>
                <ul class="nav-menu">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About</a></li>
                    <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
                    <li><a href="#blog" class="smoothScroll">Blog</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <?php 
    // wp_nav_menu(array(
    //                         'theme_location' => 'header_menu',
    //                         'container' => 'nav',
    //                         'container_class' => 'nav-collapse',
    //                         'menu_class' => 'main-menu',
    //                         'menu_id' => 'menu',
    //                         'depth' => '3',
    //                         'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    //                         'walker' => new WP_Bootstrap_Navwalker()
                            
    //                     )); 
                        ?>



    <!-- Header area End
=========================== -->