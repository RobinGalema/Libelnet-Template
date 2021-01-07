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

<header id="default-header">
    <div class="container">
        <div class="row align-items-center h-100">
            <div class="col-8 col-lg-4 col-xl-2 h-100">
                <div class="branding-container h-100">
                    <a href="<?php echo home_url();?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="Company Logo">
                    </a>
                </div>
            </div>
            <div class="col-3 col-lg-7 col-xl-9 main-menu">
            <nav class="navbar hoofdmenu navbar-expand-lg" role="" navigation">
                    <button onclick="toggleNavIcon(this)" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                        <!-- Collapse button -->
                        <div class="collapse navbar-collapse justify-content-end" id="basicExampleNav">

                            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'hoofdmenu',
                    'depth'             => '2',
                    'container'         => 'ul',
                    'menu_class'        => 'navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
                            <!-- Collapsible content -->
                        </div>
                    </nav>
            </div>
            <div class="col-1">
                <div class="icon-container">
                    <a href="#"><i class="fas fa-info-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
