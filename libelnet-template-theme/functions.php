<?php

/**
 * Libelnet Template thema functies
 *
 */


// load stylesheets



function load_css()
{
    wp_register_style('main', get_template_directory_uri() . '/assets/scss/main.scss',
    array(), false, 'all');
    wp_enqueue_style('main.scss');

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css' );

}
add_action('wp_enqueue_scripts','load_css', 1);


//load javascripts

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        'jquery', false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js',
    'jquery', false, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts','load_js');


//theme options

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');


// menus

register_nav_menus(

    array(

        'hoofdmenu' => 'Hoofdmenu',
        'top-bar' => 'Top bar',


    )
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



// sidebars registreren

function my_sidebars()
{

    register_sidebar(

        array(

            'name' => 'Footer Left',
            'id' => 'footer-left',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="footer-left">',
            'after_widget' => '</div>'
        )
    );

    register_sidebar(

        array(

            'name' => 'Footer Center',
            'id' => 'footer-center',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="footer-center">',
            'after_widget' => '</div>'
        )   
    );

    register_sidebar(

        array(

            'name' => 'Footer Right',
            'id' => 'footer-right',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="footer-right">',
            'after_widget' => '</div>'
        )   
    );

    register_sidebar(

        array(

            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="page-sidebar">',
            'after_widget' => '</div>'
        )   
    );

}
add_action('widgets_init','my_sidebars');



// ==== CUSTOM PHP GOES HERE ====

// ==============================================================
//  NAV - MEGA MENU / creates a nav containing mega menu items
// ==============================================================
function wp_get_menu_mega() {

    $current_menu = 'hoofdmenu'; // <--- IMPORTANT : This is the name of the menu from the back-office that is used to create the menu, change this to change menu's
    $menu_array = wp_get_nav_menu_items($current_menu);

    $menu = array();

    // Get child links
    function populate_children($menu_array, $menu_item)
    {
        $children = array();
        if (!empty($menu_array)){
            foreach ($menu_array as $k=>$m) {
                if ($m->menu_item_parent == $menu_item->ID) {
                    $children[$m->ID] = array();
                    $children[$m->ID]['ID'] = $m->ID;
                    $children[$m->ID]['title'] = $m->title;
                    $children[$m->ID]['url'] = $m->url;
                    unset($menu_array[$k]);
                    $children[$m->ID]['children'] = populate_children($menu_array, $m);

                    $classes = $m->classes;
                    $children[$m->ID]['classes'] = $classes;
                }
            }
        };
        return $children;
    }

    // Populate an array for each menu item with only usefull data
    foreach ($menu_array as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['classes'] = $m->classes;
            $menu[$m->ID]['children'] = populate_children($menu_array, $m);
        }
    }

    // Start the creation of the menu
    ob_start();
    ?> <ul class="navbar-nav"> <?php
    foreach( $menu as $m ):{

        if (count($m[children]) != 0):{ // if there is a dropdown
        ?> <li class="nav-item dropdown has-megamenu"> <?php
        ?> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
            href="<?php echo $m[url] ?>"><?php echo $m[title] ?></a>
        <div class="dropdown-menu megamenu">
            <div class="container row">
                <ul class="col-12 col-lg-4"> 
                    <?php
                foreach($m[children] as $child):{
                    if(in_array('mm-left', $child[classes])):{ // allign left
                        ?>
                    <li>
                        <a href="<?php echo $child[url] ?>"><?php echo $child[title] ?></a>
                    </li>
                    <?php
                    }endif;
                }
                endforeach;
               ?> </ul>
                <ul class="col-12 col-lg-4">
                    <?php
                foreach($m[children] as $child):{
                    if(in_array('mm-center', $child[classes])):{ // allign center
                        ?>
                    <li>
                        <a href="<?php echo $child[url] ?>"><?php echo $child[title] ?></a>
                    </li>
                    <?php
                    }endif;
                }
                endforeach;
               ?> </ul>
                <ul class="col-12 col-lg-4">
                    <?php
                foreach($m[children] as $child):{
                    if(in_array('mm-right', $child[classes])):{ // allign right
                        ?>
                    <li>
                        <a href="<?php echo $child[url] ?>"><?php echo $child[title] ?></a>
                    </li>
                    <?php
                    }endif;
                }
                endforeach;
               ?> </ul>
            </div>
        </div> <?php
            }
        else:{ // if no dropdown
            ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo $m[url] ?>"><?php echo $m[title] ?></a>
    </li>
    <?php
            
        }endif;

        ?> </li> <?php
    }
    endforeach;
    ?>
</ul> <?php

    return ob_get_clean(); // Return the menu
}