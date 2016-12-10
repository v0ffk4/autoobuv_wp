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
	       'name'               => 'бла-бла',
	       'singular_name'      => 'бла-бла',
	       'menu_name'          => 'Бла-бла',
	       'name_admin_bar'     => 'Бла-бла',
	       'add_new'            => 'Добавить бла-бла',
	       'add_new_item'       => 'Добавление бла-бла',
	       'new_item'           => 'Еще бла-бла',
	       'edit_item'          => 'Редактировать бла-бла',
	       'view_item'          => 'Просмотр бла-бла',
	       'all_items'          => 'Все бла-бла',
	       'search_items'       => 'Искать среди бла-бла',
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
	       'rewrite'            => array( 'slug' => 'common' ),
	       'capability_type'    => 'post',
	       'has_archive'        => false,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('common', $args);
	//end common


	//items
	$labels = array(
	       'name'               => 'товар',
	       'singular_name'      => 'товар',
	       'menu_name'          => 'Товары',
	       'name_admin_bar'     => 'Товары',
	       'add_new'            => 'Добавить товар',
	       'add_new_item'       => 'Добавить товар',
	       'new_item'           => 'Добавить товар',
	       'edit_item'          => 'Редактировать',
	       'view_item'          => 'Просмотр товар',
	       'all_items'          => 'Все товары',
	       'search_items'       => 'Искать среди товаров',
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
	       'rewrite'            => array( 'slug' => 'items' ),
	       'capability_type'    => 'post',
	       'has_archive'        => true,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('items', $args);
	//end items


	//actions
	$labels = array(
	       'name'               => 'Акции',
	       'singular_name'      => 'Акции',
	       'menu_name'          => 'Акции',
	       'name_admin_bar'     => 'Акции',
	       'add_new'            => 'Добавить',
	       'add_new_item'       => 'Добавить акции',
	       'new_item'           => 'Новая акция',
	       'edit_item'          => 'Редактировать акции',
	       'view_item'          => 'Просмотр акции',
	       'all_items'          => 'Все акции',
	       'search_items'       => 'Искать акции',
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
	       'rewrite'            => array( 'slug' => 'actions' ),
	       'capability_type'    => 'post',
	       'has_archive'        => true,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('actions', $args);
	//end actions


	//shops
	$labels = array(
	       'name'               => 'магазины',
	       'singular_name'      => 'магазин',
	       'menu_name'          => 'Магазины',
	       'name_admin_bar'     => 'Магазины',
	       'add_new'            => 'Добавить',
	       'add_new_item'       => 'Добавить магазин',
	       'new_item'           => 'Новая акция',
	       'edit_item'          => 'Редактировать магазин',
	       'view_item'          => 'Просмотр магазин',
	       'all_items'          => 'Все магазины',
	       'search_items'       => 'Искать магазин',
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
	       'rewrite'            => array( 'slug' => 'shops' ),
	       'capability_type'    => 'post',
	       'has_archive'        => false,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('shops', $args);
	//end shops


	//career
	$labels = array(
	       'name'               => 'Вакансии',
	       'singular_name'      => 'Вакансии',
	       'menu_name'          => 'Вакансии',
	       'name_admin_bar'     => 'Вакансии',
	       'add_new'            => 'Добавить',
	       'add_new_item'       => 'Добавить вакансию',
	       'new_item'           => 'Новая вакансия',
	       'edit_item'          => 'Редактировать вакансию',
	       'view_item'          => 'Просмотр вакансий',
	       'all_items'          => 'Все вакансии',
	       'search_items'       => 'Искать вакансии',
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
	       'rewrite'            => array( 'slug' => 'career' ),
	       'capability_type'    => 'post',
	       'has_archive'        => true,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('career', $args);
	//end career

	
	//partners
	$labels = array(
	       'name'               => 'Партнеры',
	       'singular_name'      => 'Партнер',
	       'menu_name'          => 'Партнеры',
	       'name_admin_bar'     => 'Партнеры',
	       'add_new'            => 'Добавить',
	       'add_new_item'       => 'Добавить партнера',
	       'new_item'           => 'Новый партнер',
	       'edit_item'          => 'Редактировать партнера',
	       'view_item'          => 'Просмотр партнера',
	       'all_items'          => 'Все партнеры',
	       'search_items'       => 'Искать партнера',
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
	       'rewrite'            => array( 'slug' => 'partners' ),
	       'capability_type'    => 'post',
	       'has_archive'        => true,
	       'hierarchical'       => false,
	       'menu_position'      => 50,
	       'supports'           => array( 'title' )
	   );

	register_post_type('partners', $args);
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