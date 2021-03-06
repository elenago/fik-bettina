<?php
/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'roots'),
    'social-menu' => __( 'Social Menu' ),
    'language-menu' => __( 'Language Menu' ),
    'blogshop-menu' => __( 'Blog Shop Menu' ),
    'blogshop2-menu' => __( 'Blog Shop 2 Menu' ),
    'cart-menu' => __('Cart Menu'),
    'info-menu' => __('Info Menu'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size(150, 150, false);
  // add_image_size('category-thumb', 300, 9999); // 300px wide (and unlimited height)

  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
  register_sidebar(array(
      'name'          => __('Blog Sidebar', 'roots'),
      'id'            => 'sidebar-blog',
      'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
      'after_widget'  => '</div></section>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
  ));
}
add_action('after_setup_theme', 'roots_setup');
