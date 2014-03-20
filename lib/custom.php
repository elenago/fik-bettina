<?php
/**
 * Custom functions
 */

function selectTemplate($template_name) {

    return get_template_part('templates/' . $template_name);
}
add_action('get_header', 'selectTemplate', 10, 1);
add_action('get_footer', 'selectTemplate', 10, 1);


class custom_post_type_page_template {
    function custom_post_type_page_template() {
        add_filter( 'template_include', array(&$this, 'custom_post_type_page_template_template_include') );
    }
    function custom_post_type_page_template_template_include($template) {
        global $wp_query, $post;

        if ( is_singular() && !is_page() ) :
            $id = get_queried_object_id();
            $new_template = 'template-' . get_post_type() . $product_template_name . '.php';
            if ( $new_template && file_exists(get_query_template( 'page', $new_template )) ) :
                $wp_query->is_page = 1;
                $templates[] = $new_template;
                return get_query_template( 'page', $templates );
            endif;
        endif;
        return $template;
    }
}
global $custom_post_type_page_template;
$custom_post_type_page_template = new custom_post_type_page_template();


remove_action('wp_footer', 'fik_legal_terms_link', 100);


add_theme_support( 'post-thumbnails' );

function bettina_thumb() {
    add_image_size('460-thumbnail', 460, 9999, true); //square thumbnail
    add_image_size('150-thumbnail', 150, 9999, true); //square thumbnail
}

add_action('after_setup_theme','bettina_thumb');