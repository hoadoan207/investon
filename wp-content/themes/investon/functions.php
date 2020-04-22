<?php
/**
 * Created by PhpStorm.
 * User: Hoa Doan
 * Date: 26/03/2019
 * Time: 13:00
 */

add_theme_support( 'post-thumbnails' );

function add_slug_body_class() {
    global $post;
    return $post->post_name;
}
add_filter( 'body_class', 'add_slug_body_class' );