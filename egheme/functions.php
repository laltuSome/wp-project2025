<?php
ob_start();

/**
 * Enable Yoast Breadcrumb Support
 */
add_theme_support('yoast-seo-breadcrumbs');

/**
 * favicon and Apple Touch Icon
 */
function custom_theme_favicons() {
    global $theme_options;

    if ( isset($theme_options['fav-icon']['url']) && !empty($theme_options['fav-icon']['url']) ) {
        echo '<link rel="icon" type="image/png" sizes="16x16" href="' . esc_url($theme_options['fav-icon']['url']) . '">' . "\n";
    }

    if ( isset($theme_options['app-icon']['url']) && !empty($theme_options['app-icon']['url']) ) {
        echo '<link rel="apple-touch-icon" sizes="180x180" href="' . esc_url($theme_options['app-icon']['url']) . '">' . "\n";
    }
}
add_action('wp_head', 'custom_theme_favicons');


/**
 * Include Custom Admin Featured Meta Box
 */
include 'admin/custom-admin/featured-meta-box.php';

/**
 * Redux Framework & Admin CSS
 */
require_once dirname(__FILE__) . '/admin/redux/config.php';
function redux_custom_css() {
	wp_enqueue_style('admin_styles', get_template_directory_uri() . '/admin/redux/redux-custom.css');
}
add_action('admin_head', 'redux_custom_css');





/**
 * Load CSS & JS Assets
 */
function add_styles_scripts() {
	// CSS
	wp_enqueue_style('bootstrap-min_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), null);
	wp_enqueue_style('bootstrap-select-min_css', 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css', array(), null);
	wp_enqueue_style('font-awesome-min', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), time());
	wp_enqueue_style('animate-min', get_template_directory_uri() . '/assets/css/animate.min.css', array(), time());
	wp_enqueue_style('swiper-bundle_css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.0/swiper-bundle.css', array(), null);
	wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_enqueue_style('fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');
	wp_enqueue_style('ConthraxSb-fonts', get_template_directory_uri() . '/assets/fonts/ConthraxSb-Regular.woff2');
	wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), time());
	wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), time());
	wp_enqueue_style('style', get_stylesheet_uri(), array(), time());

	// JS
	wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array('jquery'));
	wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('bootstrap-select', 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js', array('jquery'));
	wp_enqueue_script('swiper-bundle', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.0/swiper-bundle.min.js', array('jquery'));
	wp_enqueue_script('aos_js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array('jquery'));
	wp_enqueue_script('fancybox-umd_js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array('jquery'));
	wp_enqueue_script('isotope_js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), time());
	wp_enqueue_script('custom_js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), time());

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'add_styles_scripts');


/**
 * Widget Areas
 */
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'id' => 'main-sidebar',
		'description' => 'This is the main sidebar for this website.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Footer One',
		'id' => 'footer-one',
		'description' => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
	));
}


/**
 * Helper: Get Attachment Info (Used in Redux Gallery)
 */
function wp_get_attachment($attachment_id) {
    $attachment = get_post($attachment_id);
    return array(
        'description' => $attachment->post_content,
        'href' => get_permalink($attachment->ID),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}


/**
 * Register Testimonial Custom Post Type
 */
function register_testimonial_cpt() {
    $labels = array(
        'name'               => __('Testimonials'),
        'singular_name'      => __('Testimonial'),
        'menu_name'          => __('Testimonials'),
        'add_new'            => __('Add New'),
        'add_new_item'       => __('Add New Testimonial'),
        'edit_item'          => __('Edit Testimonial'),
        'view_item'          => __('View Testimonial'),
        'all_items'          => __('All Testimonials'),
        'search_items'       => __('Search Testimonials'),
        'not_found'          => __('No testimonials found.'),
        'not_found_in_trash' => __('No testimonials found in Trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'testimonials'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'show_in_rest'       => true,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'register_testimonial_cpt');


/**
 * Duplicate Post or Page as Draft
 */
function rd_duplicate_post_as_draft() {
    global $wpdb;

    if (!isset($_GET['post']) || !isset($_GET['action']) || $_GET['action'] !== 'rd_duplicate_post_as_draft') {
        return;
    }

    $post_id = absint($_GET['post']);
    $post = get_post($post_id);

    if ($post) {
        $new_post = array(
            'post_title'     => $post->post_title . ' (Copy)',
            'post_content'   => $post->post_content,
            'post_excerpt'   => $post->post_excerpt,
            'post_status'    => 'draft',
            'post_type'      => $post->post_type,
            'post_author'    => get_current_user_id(),
            'post_category'  => wp_get_post_categories($post_id),
        );

        $new_post_id = wp_insert_post($new_post);

        // Copy post meta
        $post_meta = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id = $post_id");
        if ($post_meta) {
            foreach ($post_meta as $meta) {
                update_post_meta($new_post_id, $meta->meta_key, maybe_unserialize($meta->meta_value));
            }
        }

        wp_redirect(admin_url('post.php?action=edit&post=' . $new_post_id));
        exit;
    }
}
add_action('admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft');

function rd_duplicate_link($actions, $post) {
    if (current_user_can('edit_posts')) {
        $actions['duplicate'] = '<a href="' . wp_nonce_url(
            'admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID,
            basename(__FILE__),
            'duplicate_nonce'
        ) . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
    }
    return $actions;
}
add_filter('post_row_actions', 'rd_duplicate_link', 10, 2);
add_filter('page_row_actions', 'rd_duplicate_link', 10, 2);
