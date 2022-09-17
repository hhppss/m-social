<?php 

add_action( 'init', 'register_post_types' );

function register_post_types(){
    register_post_type( 'news', [
        'label'  => null,
        'labels' => [
            'name'               => 'Новости',
            'singular_name'      => 'Новость',
            'add_new'            => 'Добавить новость',
            'add_new_item'       => 'Добавление новости',
            'edit_item'          => 'Редактирование новости',
            'new_item'           => 'Новая новость',
            'view_item'          => 'Смотреть новости',
            'search_items'       => 'Искать новость',
            'not_found'          => 'Не найдено', //
            'not_found_in_trash' => 'Не найдено в корзине',
            'parent_item_colon'  => '',
            'menu_name'          => 'Новости',
        ],
        'description'         => '',
        'public'              => true,
        'hierarchical'        => false,
        'supports'            => [],
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
    register_post_type( 'products', [
        'label'  => null,
        'labels' => [
            'name'               => 'Продукты',
            'singular_name'      => 'Продукт',
            'add_new'            => 'Добавить продукт',
            'add_new_item'       => 'Добавление продукта',
            'edit_item'          => 'Редактирование продукта',
            'new_item'           => 'Новый продукт',
            'view_item'          => 'Смотреть продукты',
            'search_items'       => 'Искать продукты',
            'not_found'          => 'Не найдено', //
            'not_found_in_trash' => 'Не найдено в корзине',
            'parent_item_colon'  => '',
            'menu_name'          => 'Продукты',
        ],
        'description'         => '',
        'public'              => true,
        'hierarchical'        => false,
        'supports'            => [],
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}