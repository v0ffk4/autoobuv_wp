<?php 
/**
* Plugin Name: KindaSorta
* Description: Sorts shit out
* Version: 0.0.1
* Author: v0ffk4
* License: GPL2
*/
/*
KindaSorta is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
KindaSorta is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with KindaSorta. If not, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html for details.
*/

/* to be used wih advanced custom fields only! */

/* so, we have following post_types:

common
items
actions
shops
career
partners
*/


/* and some tahonomies

item_category

*/

//custom posts type
function custom_post_types(){

	//common
	$labels = array(
	       'name'               => 'Главная',
	       'singular_name'      => 'главная',
	       'menu_name'          => 'главная',
	       'name_admin_bar'     => 'главная',
	       'add_new'            => 'Добавить',
	       'add_new_item'       => 'Добавить',
	       'new_item'           => 'Добавить',
	       'edit_item'          => 'Редактировать',
	       'view_item'          => 'Просмотр',
	       'all_items'          => 'Все главная',
	       'search_items'       => 'Искать',
	       'parent_item_colon'  => 'Parent new-items:',
	       'not_found'          => 'Ничего не нашел :(',
	       'not_found_in_trash' => 'В мусорке пусто.',
	   );
	   
	   $args = array(
	       'labels'             => $labels,
	       'public'             => true,
	       'publicly_queryable' => true,
	       'show_ui'            => true,
	       'show_in_menu'       => true,
	       'menu_icon'          => 'dashicons-format-quote',
	       'query_var'          => true,
	       'rewrite'            => array( 'slug' => 'mainpage' ),
	       'capability_type'    => 'post',
	       'has_archive'        => false,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('mainpage', $args);
	//end common


	//items
	$labels = array(
	       'name'               => 'О нас',
	       'singular_name'      => 'О нас',
	       'menu_name'          => 'О нас',
	       'name_admin_bar'     => 'О нас',
	       'add_new'            => 'Добавить',
	       'add_new_item'       => 'Добавить',
	       'new_item'           => 'Добавить',
	       'edit_item'          => 'Редактировать',
	       'view_item'          => 'Просмотр',
	       'all_items'          => 'Просмотр',
	       'search_items'       => 'Искать',
	       'parent_item_colon'  => 'Parent new-items:',
	       'not_found'          => 'Не нашел :(',
	       'not_found_in_trash' => 'В мусорке пусто.',
	   );
	   
	   $args = array(
	       'labels'             => $labels,
	       'public'             => true,
	       'publicly_queryable' => true,
	       'show_ui'            => true,
	       'show_in_menu'       => true,
	       'menu_icon'          => 'dashicons-format-gallery',
	       'query_var'          => true,
	       'rewrite'            => array( 'slug' => 'about' ),
	       'capability_type'    => 'post',
	       'has_archive'        => true,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('about', $args);
	//end items


	//actions
	$labels = array(
	       'name'               => 'Товары',
	       'singular_name'      => 'Товары',
	       'menu_name'          => 'Товары',
	       'name_admin_bar'     => 'Товары',
	       'add_new'            => 'Добавить',
	       'add_new_item'       => 'Добавить',
	       'new_item'           => 'Добавить',
	       'edit_item'          => 'Редактировать',
	       'view_item'          => 'Просмотр',
	       'all_items'          => 'Просмотр',
	       'search_items'       => 'Поиск',
	       'parent_item_colon'  => 'Parent actions:',
	       'not_found'          => 'Не нашел :(',
	       'not_found_in_trash' => 'В мусорке пусто.',
	   );
	   
	   $args = array(
	       'labels'             => $labels,
	       'public'             => true,
	       'publicly_queryable' => true,
	       'show_ui'            => true,
	       'show_in_menu'       => true,
	       'menu_icon'          => 'dashicons-star-filled',
	       'query_var'          => true,
	       'rewrite'            => array( 'slug' => 'catalogue' ),
	       'capability_type'    => 'post',
	       'has_archive'        => true,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('catalogue', $args);
	//end actions


	//shops
	$labels = array(
	       'name'               => 'Услуги',
	       'singular_name'      => 'Услуги',
	       'menu_name'          => 'Услуги',
	       'name_admin_bar'     => 'Услуги',
	       'add_new'            => 'Добавить',
	       'add_new_item'       => 'Добавить',
	       'new_item'           => 'Добавить',
	       'edit_item'          => 'Редактировать',
	       'view_item'          => 'Просмотр',
	       'all_items'          => 'Просмотр',
	       'search_items'       => 'Поиск',
	       'parent_item_colon'  => 'Parent shop:',
	       'not_found'          => 'Не нашел :(',
	       'not_found_in_trash' => 'В мусорке пусто.',
	   );
	   
	   $args = array(
	       'labels'             => $labels,
	       'public'             => true,
	       'publicly_queryable' => true,
	       'show_ui'            => true,
	       'show_in_menu'       => true,
	       'menu_icon'          => 'dashicons-admin-multisite',
	       'query_var'          => true,
	       'rewrite'            => array( 'slug' => 'attendance' ),
	       'capability_type'    => 'post',
	       'has_archive'        => false,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('attendance', $args);
	//end shops


	//career
	$labels = array(
	       'name'               => 'Сервис',
	       'singular_name'      => 'Сервис',
	       'menu_name'          => 'Сервис',
	       'name_admin_bar'     => 'Сервис',
	       'add_new'            => 'Добавить',
	       'add_new_item'       => 'Добавить',
	       'new_item'           => 'Добавить',
	       'edit_item'          => 'Редактировать',
	       'view_item'          => 'Просмотр',
	       'all_items'          => 'Просмотр',
	       'search_items'       => 'Поиск',
	       'parent_item_colon'  => 'Parent vacancies:',
	       'not_found'          => 'Не нашел :(',
	       'not_found_in_trash' => 'В мусорке пусто.',
	   );
	   
	   $args = array(
	       'labels'             => $labels,
	       'public'             => true,
	       'publicly_queryable' => true,
	       'show_ui'            => true,
	       'show_in_menu'       => true,
	       'menu_icon'          => 'dashicons-carrot',
	       'query_var'          => true,
	       'rewrite'            => array( 'slug' => 'service' ),
	       'capability_type'    => 'post',
	       'has_archive'        => true,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('service', $args);
	//end career

	
	//partners
	$labels = array(
	       'name'               => 'Контакты',
	       'singular_name'      => 'Контакты',
	       'menu_name'          => 'Контакты',
	       'name_admin_bar'     => 'Контакты',
	       'add_new'            => 'Добавить',
	       'add_new_item'       => 'Добавить',
	       'new_item'           => 'Добавить',
	       'edit_item'          => 'Редактировать',
	       'view_item'          => 'Просмотр',
	       'all_items'          => 'Просмотр',
	       'search_items'       => 'Поиск',
	       'parent_item_colon'  => 'Parent partners:',
	       'not_found'          => 'Не нашел :(',
	       'not_found_in_trash' => 'В мусорке пусто.',
	   );
	   
	   $args = array(
	       'labels'             => $labels,
	       'public'             => true,
	       'publicly_queryable' => true,
	       'show_ui'            => true,
	       'show_in_menu'       => true,
	       'menu_icon'          => 'dashicons-image-filter',
	       'query_var'          => true,
	       'rewrite'            => array( 'slug' => 'contacts' ),
	       'capability_type'    => 'post',
	       'has_archive'        => true,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('contacts', $args);
	//end end partners


}


//rewrite flush
function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    custom_post_types();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

//init custom_post_types
add_action ('init','custom_post_types');


//add taxonomy
function item_category() {
// Type of item category taxonomy
	$labels = array(
		'name'              => 'Тип товара',
		'singular_name'     => 'Тип товара',
		'search_items'      => 'Искать',
		'all_items'         => 'Все типы',
		'parent_item'       => 'Родитель',
		'parent_item_colon' => 'Родитель',
		'edit_item'         => 'Редактировать',
		'update_item'       => 'Обновить',
		'add_new_item'      => 'Добавить',
		'new_item_name'     => 'Новый',
		'menu_name'         => 'Типы товаров',
		);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'item-category' ),
		);

	register_taxonomy( 'item_category', array( 'items' ), $args );
	}

add_action ('init','item_category');

 ?>