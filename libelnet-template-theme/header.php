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
    <div class="container">
    <div class="row justify-content-space-between align-items-center">

        <!-- LOGO -->
        <div class="col-10 col-lg-2">
            <div class="logo-container">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="logo navbar-brand" alt=""> </a>
            </div>
        </div>

        <!-- DESKTOP MENU -->
        <div class="d-none d-lg-block col-lg-10">
            <nav class="navbar hoofdmenu navbar-expand-lg" role=""navigation">
            <div class="collapse navbar-collapse justify-content-between">
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

    <!-- MOBILE MENU TOGGLE -->
    <div class="d-block d-lg-none col-2">
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation" onclick="ToggleMenuIcon(this)">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
    </div>
    </div>

    <!-- MOBILE NAV -->
    <div class="collapse navbar-collapse justify-content-end" id="basicExampleNav">
        <div class="nav-logo-container">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="logo navbar-brand" alt=""> </a>
        </div>
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
</header>
