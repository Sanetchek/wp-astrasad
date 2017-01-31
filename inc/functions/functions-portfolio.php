<?php
/**
 * Portfolio
 */

function astrasad_portfolio() {
    register_post_type('portfolio', array(
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 7,
        'menu_icon'   => 'dashicons-portfolio',

        'labels' => array(
            'name' => 'Работы',
            'all_items' => 'Все работы',
            'add_new' => 'Добавить новую',
            'add_new_item' => 'Добавить работу',
            'singular_name'      => 'Работа',
            'edit_item'          => 'Редактировать работу',
            'new_item'           => 'Новая рабта',
            'view_item'          => 'Посмотреть работу',
            'search_items'       => 'Найти работу',
            'not_found'          => 'Работу не найдено',
            'not_found_in_trash' => 'В корзине работ не найдено',
            'parent_item_colon'  => ''
        )
    ));
}

add_action('init', 'astrasad_portfolio');