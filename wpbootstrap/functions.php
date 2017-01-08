<?php
    // Register Nav Walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    // Theme Support
    function wpb_theme_setup(){
        // Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme', 'wpb_theme_setup');
?>

<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home left sidebar',
        'id'            => 'home_left_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>