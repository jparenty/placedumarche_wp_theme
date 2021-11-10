<?php wp_footer(); ?>

<div class="footer">
    <div class="container">
        <div class="site-logo">
            <a href="<?php echo get_home_url() ?>" class="top-logo" rel="home">
                <img class="logo" src="<?php echo get_template_directory_uri(). '/media/logos/pdm-logo-removebg.png' ?>">
            </a>
        </div>
        <?php wp_nav_menu (
            array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'navigation-footer',
            )
        ); ?>
        <div class="bottom footer">
            <span class="copyright">© 2021 Place du Marché</span>
            <span class="contact-tel">514-398-4000</span>
        </div>
     </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!--<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->

</body>
</html>
