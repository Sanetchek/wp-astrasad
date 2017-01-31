<?php
/**
 * Works
 */

function astrasad_uslugi() {
    register_post_type('uslugi', array(
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 6,
        'menu_icon'   => 'dashicons-hammer',

        'labels' => array(
            'name' => 'Услуги',
            'all_items' => 'Все услуги',
            'add_new' => 'Добавить новую',
            'add_new_item' => 'Добавить услугу',
            'singular_name'      => 'Услуга',
            'edit_item'          => 'Редактировать услугу',
            'new_item'           => 'Новая услуга',
            'view_item'          => 'Посмотреть услугу',
            'search_items'       => 'Найти услугу',
            'not_found'          => 'Услугу не найден',
            'not_found_in_trash' => 'В корзине услуг не найдено',
            'parent_item_colon'  => ''
        )
    ));
}

add_action('init', 'astrasad_uslugi');