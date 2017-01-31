<?php
/**
 * Slider
 */

function astrasad_slider() {
    register_post_type('slider', array(
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_position' => 2,
        'menu_icon'   => 'dashicons-images-alt',

        'labels' => array(
            'name' => 'Слайдер',
            'all_items' => 'Все слайды',
            'add_new' => 'Добавить новый',
            'add_new_item' => 'Добавить слайд',
            'featured_image' => 'Загрузить слайд',
            'singular_name'      => 'Слайд',
            'edit_item'          => 'Редактировать слайд',
            'new_item'           => 'Новаый слайд',
            'view_item'          => 'Просмотреть слайд',
            'search_items'       => 'Найти слайд',
            'not_found'          => 'Слайд не найден',
            'not_found_in_trash' => 'В корзине слайда не найдено',
            'parent_item_colon'  => ''
        )
    ));
}

add_action('init', 'astrasad_slider');