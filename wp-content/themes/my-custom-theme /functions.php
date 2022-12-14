<?php
    function my_custom_theme_enqueue() {
        wp_enqueue_style( 'my-custom-theme', get_stylesheet_directory_uri().'/style.css');
        wp_enqueue_style('theme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css");

		wp_enqueue_script('my-custom-theme-script', get_stylesheet_directory_uri().'/main.js');
		wp_enqueue_media();
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
	    * to change 'my-custom-theme' to the name of your theme in all the template files.
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
		add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
}
add_action('after_setup_theme', 'my_custom_theme_setup');


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function my_custom_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'my-custom-theme ' ),
			'id'            => 'default-sidebar',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'my-custom-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'my-custom-theme	' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'my-custom-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'my-custom-theme' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'my-custom-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'my_custom_theme_widgets_init' );
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function my_custom_theme_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf(
		'<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Post title. Only visible to screen readers. */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'my-custom-theme' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'my_custom_theme_excerpt_more' );

function my_custom_theme_colors_css_wrap() {
	if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
	$hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );

	$customize_preview_data_hue = '';
	if ( is_customize_preview() ) {
		$customize_preview_data_hue = 'data-hue="' . $hue . '"';
	}
	?>
	<style type="text/css" id="custom-theme-colors" <?php echo $customize_preview_data_hue; ?>>
		<?php echo twentyseventeen_custom_colors_css(); ?>
	</style>
	<?php
}
//------------------------------- img-uplode ------------------------------//


// add_action( 'wp_enqueue_scripts', 'enqueue_scripts_trigger' );
// function enqueue_scripts_trigger() {
//     wp_enqueue_media();
// 	wp_enqueue_script( 'my_custom_js', get_stylesheet_directory_uri() . '/assets/js/IMG-upload-script.js', array('jquery'), null, false );
// }

if (isset($_POST['tittle'])) {

	$tittle = $_POST['tittle'];
	$content = $_POST['content'];
	$cat = $_POST['category'];
	// Gather post data.
	$cat_ID = get_cat_ID( $cat );
	$my_post = array(
		'post_title'    => $tittle,
		'post_content'  => $content,
		'post_status'   => 'publish',
		'post_author'   => 1,
		'post_category' => array($cat_ID)
	);

	// Insert the post into the database.
	$post_id = wp_insert_post( $my_post );

	if (!function_exists('wp_generate_attachment_metadata')) {
		require_once(ABSPATH . 'wp-admin/includes/image.php');
		require_once(ABSPATH . 'wp-admin/includes/file.php');
		require_once(ABSPATH . 'wp-admin/includes/media.php');
	}

	if ($_FILES) {
		foreach ($_FILES as $file => $array) {
			if ($_FILES[$file] ['error']) {
				return "upload error :" . $_FILES[$file] ['error'];
			}
			$attach_id = media_handle_upload( $file, $post_id);
		}
		
	}
	if( $attach_id > 0 ) {
		update_post_meta($post_id, '_thumbnail_id', $attach_id);
		
	}

}




//------------------------------- end-img-uplode ------------------------------//
