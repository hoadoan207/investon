<?php
/**
 * Created by PhpStorm.
 * Developer: hoadoan.dn207@gmail.com
 * Date: 22/04/2020
 * Time: 20:35
 */

add_theme_support( 'post-thumbnails' );

function add_slug_body_class() {
    global $post;
    return $post->post_name;
}
add_filter( 'body_class', 'add_slug_body_class' );

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
