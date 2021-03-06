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
    add_image_size('960-thumbnail', 960);
    add_image_size('460-thumbnail', 460, 9999, false); //square thumbnail
    add_image_size('250-thumbnail', 250, 9999, false); //square thumbnail
}

add_action('after_setup_theme','bettina_thumb');

function filter_search($query) {
    if(!$query->is_admin) {
        if ($query->is_search) {
                $query->set('post_type', array('post'));
                    };
            return $query;
    }
};
add_filter('pre_get_posts', 'filter_search');

function cart_select_variation_error_message($message)
{
    return str_replace('al carrito', 'a la cesta', $message); 
}
add_filter('cart_select_variation_error_message', 'cart_select_variation_error_message');

function cart_remove_item_message($message)
{
    return str_replace('carrito', 'cesta', $message); 
}
add_filter('cart_remove_item_message', 'cart_remove_item_message');

function cart_update_item_message($message)
{
    return str_replace('al carrito', 'a la cesta', $message); 
}
//add_filter('cart_update_item_message', 'cart_update_item_message');

function cart_add_item_message($message)
{
    return str_replace('carrito', 'cesta', $message); 
}
add_filter('cart_add_item_message', 'cart_add_item_message');

function cart_empty_message($message)
{
    return '<h3>Tu cesta de la compra está vacía</h3>'; 
}
add_filter('cart_empty_message', 'cart_empty_message');

function cart_remove_by_not_exists_error_message($message)
{
    return str_replace('tu carrito', 'tu cesta', str_replace('el carrito', 'la cesta', $message)); 
}
add_filter('cart_remove_by_not_exists_error_message', 'cart_remove_by_not_exists_error_message');

function cart_not_more_stock_message($message)
{
    return str_replace('carrito', 'cesta', $message); 
}
//add_filter('cart_remove_by_not_exist_error_message', 'cart_remove_by_not_exist_error_message');
