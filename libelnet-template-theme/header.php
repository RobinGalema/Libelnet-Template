<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title></title>

	<?php wp_head();?>

</head>
<body <?php body_class(); ?>>

<header id="header-primary">

    <div class="row">

        <!-- LOGO -->
        <div class="col logo-container">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo navbar-brand" alt=""> </a>
        </div>

        <!-- DESKTOP MENU -->
        <div class="d-none d-lg-block col">
            <nav class="navbar hoofdmenu navbar-expand-lg" role=""navigation">
            <div class="collapse navbar-collapse justify-content-center" id="basicExampleNav">
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'hoofdmenu',
                    'depth'             => '2',
                    'container'         => 'ul',
                    //'container_id'    => 'basicExampleNav',
                    //'container_class' => 'collapse navbar-collapse',
                    'menu_class'        => 'navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>
            </nav>
        </div>
    </div>

    <!-- MOBILE MENU TOGGLE -->
    <div class="d-block d-lg-none col">
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

</header>
