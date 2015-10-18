<?php
/**
*
* Plugin Name: Child Pages Menu
* Plugin URI: http://github.com/filmoteca/web-site
* Description: It adds a menu with the child pages of a page given.
* Version: 0.1.0
* Author: Victor Aguilar
* Author URI: http://github.com/filmoteca/web-site
*
* @package ChildPageManu
* @author Victor Aguilar <victor.aguilar@ciencias.unam.mx>
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function wpb_list_child_pages() {

    global $post;

    $child_pages = is_page() && $post->post_parent?
        wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' ):
        wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

    if ($child_pages) {
        return '<ul>' . $child_pages . '</ul>';
    }

    return '';
}
