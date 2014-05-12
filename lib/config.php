<?php
/**
 * Enable theme features
 */

// Headers
// header, header-top-navbar, header-top-navbar-right
$header_template_name = 'header-bettina';

// Footers
// footer, footer-bootstrap-sticky
$footer_template_name = 'footer';

// Products
// right
$product_template_name = '';

// Posts
$post_template_name = '';

// Home
$home_template_name = '';

// Others
add_theme_support('root-relative-urls');    // Enable relative URLs
add_theme_support('bootstrap-gallery');     // Enable Bootstrap's thumbnails component on [gallery]
add_theme_support('bootstrap-3');           // Enable Bootstrap's version 3
add_theme_support('nice-search');           // Enable /?s= to /search/ redirect
add_theme_support('jquery-cdn');            // Enable to load jQuery from the Google CDN
add_theme_support('sidebar-left');          // Enable left sidebar
add_theme_support('sidebar2');              // Enable left sidebar

/**
 * Configuration values
 */
define('GOOGLE_ANALYTICS_ID', ''); // UA-XXXXX-Y (Note: Universal Analytics only, not Classic Analytics)
define('POST_EXCERPT_LENGTH', 40); // Length in words for excerpt_length filter (http://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length)

/**
 * .main classes
 */
function roots_main_class() {
    if (roots_display_sidebar()) {
        // Classes on pages with the sidebar
        return 'col-sm-10';
    }

    if (roots_display_sidebar2()){
        return 'col-sm-9';
    }

    // Classes on full width pages
    return 'col-sm-12';
}

/**
 * .sidebar classes
 */
function roots_sidebar_class() {
    if(roots_display_sidebar()) {

        return 'col-sm-2';
    }

    return 'col-sm-3';
}

/**
 * Define which pages shouldn't have the sidebar
 *
 * See lib/sidebar.php for more details
 */
function roots_display_sidebar() {
  $sidebar_config = new Roots_Sidebar(
    /**
     * Conditional tag checks (http://codex.wordpress.org/Conditional_Tags)
     * Any of these conditional tags that return true won't show the sidebar
     *
     * To use a function that accepts arguments, use the following format:
     *
     * array('function_name', array('arg1', 'arg2'))
     *
     * The second element must be an array even if there's only 1 argument.
     */
    array(
      'is_404',
      'is_date',
      'is_author',
      'is_tag',
      array('is_singular', array('post')),
      'is_home',
    ),
    /**
     * Page template checks (via is_page_template())
     * Any of these page templates that return true won't show the sidebar
     */
    array(
      'template-custom.php'
    )
  );

  return apply_filters('roots_display_sidebar', $sidebar_config->display);
}

function roots_display_sidebar2() {
  $sidebar_config1 = new Roots_Sidebar(
    /**
     * Conditional tag checks (http://codex.wordpress.org/Conditional_Tags)
     * Any of these conditional tags that return true won't show the sidebar
     *
     * To use a function that accepts arguments, use the following format:
     *
     * array('function_name', array('arg1', 'arg2'))
     *
     * The second element must be an array even if there's only 1 argument.
     */
    array(
      'is_404',
      'is_page',
      'is_front_page',
      'is_front_page',
      array('is_tax', array('store-section')),
      array('is_singular', array('fik_product')),
      array('is_page', array('cart')),
      array('is_post_type_archive', array('fik_product')),
    ),
    /**
     * Page template checks (via is_page_template())
     * Any of these page templates that return true won't show the sidebar
     */
    array(
      'template-custom.php'
    )
  );

  return apply_filters('roots_display_sidebar', $sidebar_config1->display);
}

/**
 * $content_width is a global variable used by WordPress for max image upload sizes
 * and media embeds (in pixels).
 *
 * Example: If the content area is 640px wide, set $content_width = 620; so images and videos will not overflow.
 * Default: 1140px is the default Bootstrap container width.
 */
if (!isset($content_width)) { $content_width = 1140; }

function custom_excerpt_length( $length ) {
      return 100;
      }add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
