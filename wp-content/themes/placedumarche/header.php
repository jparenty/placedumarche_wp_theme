<!DOCTYPE html>
<html>
    
    <head>
        
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/test/wp-content/themes/placedumarche/style.css">

    </head>
    
<body <?php body_class(); ?> >
    
   
    
    
    <header class="top-navigation">
        
         <div class="container above-nav">
            <div class="site-branding">
                <div class="site-logo">
                    <a href="<?php echo get_home_url() ?>" class="top-logo" rel="home">
                        <img class="logo" src="<?php echo get_template_directory_uri(). '/media/logos/pdm-logo.png' ?>">
                    </a>
                </div>
                <h1 class="site-title">
                    <a href="<?php echo get_home_url() ?>" rel="home">
                        Place du Marché
                    </a>
                </h1>
                <p class="site-description">
                    Connecting Communities to Improve Food Security
                </p>
            </div>
        </div>
        
        <div class="container" id="myTopnav">
            
            <div class="site-branding-mobile">
                <a href="<?php echo get_home_url() ?>" class="top-logo" rel="home">
                    <img class="logo" src="<?php echo get_template_directory_uri(). '/media/logos/pdm-logo-removebg.png' ?>">
                </a>
                <div class="site-branding-column">
                    <h1 class="site-title">
                        <a href="<?php echo get_home_url() ?>" rel="home">
                            Place du Marché
                        </a>
                    </h1>
                    <p class="site-description">
                        Connecting Communities to Improve Food Security
                    </p>
                </div>
            </div>
        
            <?php wp_nav_menu (
        
                array(
                    'theme_location' => 'navigation-menu',
                    'menu_class' => 'navigation',
                )
            
            ); ?> 
            <div class="menu-btn">
                <div class="btn-box">
                    <div class="btn-line"></div>
                    <div class="btn-line"></div>
                    <div class="btn-line"></div>
                </div>
            </div>
            
        </div>

    </header>
    
    
