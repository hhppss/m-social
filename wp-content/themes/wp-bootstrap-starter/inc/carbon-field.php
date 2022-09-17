<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'test_carbon' );
function test_carbon() {

    Container::make( 'post_meta', 'Настройки новости' )
        ->where( 'post_type', '=', 'news' )
        ->add_fields( array(

            Field::make( 'text', 'title_news', 'Заголовок новости' ),
            Field::make('textarea', 'textarea_news', 'Текст новости'),
            Field::make( 'image', 'img_news', 'Фоновое изображение' ),
            Field::make('date', 'date_news', 'Дата новости'),
        ) );

    Container::make( 'post_meta', 'Настройки продукта' )
        ->where( 'post_type', '=', 'products' )
        ->add_fields( array(

            Field::make( 'text', 'title_product', 'Название продукта' ),
            Field::make('textarea', 'textarea_product', 'Описание продукта'),
            Field::make( 'complex', 'img_slider_product', 'Слайдер изоборажений' )
                ->add_fields( array(
                    Field::make('image', 'img', 'Изображение 1'),
                )),
            Field::make('text', 'comp_product', 'Комплектация продукта'),
            Field::make('select', 'select_product', 'Производитель продукта')
                ->set_options (array(
                    'apple' => 'Apple',
                    'google'=> 'Google',
                    'xiaomi'=> 'Xiaomi',
                )),
            Field::make('text', 'price_product', 'Цена продукта')
        ) );
}