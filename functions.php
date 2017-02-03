<?php

if ( ! function_exists( 'astrasad_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function astrasad_setup() {
        /**
         *	Require Once
         */
        require_once( 'inc/functions/functions-slider.php' );
        require_once( 'inc/functions/functions-portfolio.php' );
        require_once( 'inc/functions/functions-works.php' );
        require_once( 'inc/functions/functions-media.uploader.php' );
        require_once( 'inc/functions/functions-breadcrumbs.php' );
        require_once( 'inc/functions/functions-site-data.php' );
        require_once( 'inc/functions/functions-nav.php' );


        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary'	=> esc_html__( 'Левое меню', 'astrasad' ),
            'secondary'	=> esc_html__( 'Правое меню', 'astrasad' ),
            'languages'	=> esc_html__( 'Языки', 'astrasad' )
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );
    }
    add_action( 'after_setup_theme', 'astrasad_setup' );
endif; // astrasad_setup

/**
 * Load styles and scripts
 **/

function astrasad_scripts()
{
    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('bxslider', get_template_directory_uri() . '/bxslider/jquery.bxslider.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style('bxstyle', get_template_directory_uri() . '/bxslider/jquery.bxslider.css');
}
add_action('wp_enqueue_scripts', 'astrasad_scripts');


/**
 * Registers a widget area.
 */
function astrasad_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar'),
        'id'            => 'sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar.'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'astrasad_widgets_init' );

/*
 *  Translate string in Polylang

function transl_polylang() {
    $company_name = get_option('footer_company_name');
    $all_rights = get_option('footer_all_rights');
    if ( function_exists( 'pll_register_string' ) ) {
        pll_register_string('copyrights', $company_name);
        pll_register_string('all-rights-reserved', $all_rights);
    }
}
add_action ( 'admin_init', 'transl_polylang' );
 */


/*
 *  Excerpt more
 */
add_filter('excerpt_more', function($more) {
    return ' ...';
});