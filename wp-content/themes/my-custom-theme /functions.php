<?php
    function my_custom_theme_enqueue() {
        wp_enqueue_style( 'my-custom-theme', get_stylesheet_directory_uri().'/style.css');
        wp_enqueue_style('theme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css");
        
    }
    add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue' );

?>

<?php

if ( ! function_exists('my_custom_theme_setup')){
    function my_custom_theme_setup(){
        /*
	    * Make theme available for translation.
	    * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	    * If you're building a theme based on Twenty Seventeen, use a find and replace
	    * to change 'twentyseventeen' to the name of your theme in all the template files.
	    */

	    load_theme_textdomain( 'my-custom-theme ' );

	    add_theme_support( 'automatic-feed-links' );

        /*
	     * Let WordPress manage the document title.
	    * By adding theme support, we declare that this theme does not use a
	    * hard-coded <title> tag in the document head, and expect WordPress to
	    * provide it for us.
	    */
	    add_theme_support( 'title-tag' );

        /*
	    * Enables custom line height for blocks
	    */
	    add_theme_support( 'custom-line-height' );

        /*
	    * Enable support for Post Thumbnails on posts and pages.
	    *
	    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	    */
	    add_theme_support( 'post-thumbnails' );

        register_nav_menus(
            array(
                'primary'   =>  esc_html__( 'primary', 'my-custom-theme ' ),
                'footer' => esc_html__( 'footer', 'my-custom-theme ' ),
            )
        );

        /*
	    * Switch default core markup for search form, comment form, and comments
	    * to output valid HTML5.
	    */
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
                'navigation-widgets',
            )
        );

        /*
	    * Enable support for Post Formats.
	    *
	       * See: https://wordpress.org/support/article/post-formats/
	    */
	    add_theme_support(
		    'post-formats',
		    array(
			    'aside',
			    'image',
			    'video',
			    'quote',
			    'link',
			    'gallery',
			    'audio',
		    )
	    );
    }
}
add_action('after_setup_theme', 'my_custom_theme_setup');












