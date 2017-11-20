<?php

function client_init() {
	register_post_type( 'client', array(
		'labels'            => array(
			'name'                => __( 'Klienci', 'cl' ),
			'singular_name'       => __( 'Klient', 'cl' ),
			'all_items'           => __( 'Wszyscy klienci', 'cl' ),
			'new_item'            => __( 'Nowy klijent', 'cl' ),
			'add_new'             => __( 'Dodaj nowy', 'cl' ),
			'add_new_item'        => __( 'Dodaj nowego klienta', 'cl' ),
			'edit_item'           => __( 'Edit client', 'cl' ),
			'view_item'           => __( 'View client', 'cl' ),
			'search_items'        => __( 'Search clients', 'cl' ),
			'not_found'           => __( 'No clients found', 'cl' ),
			'not_found_in_trash'  => __( 'No clients found in trash', 'cl' ),
			'parent_item_colon'   => __( 'Parent client', 'cl' ),
			'menu_name'           => __( 'Klienci', 'cl' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-awards',
		'show_in_rest'      => true,
		'rest_base'         => 'client',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'client_init' );

function client_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['client'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Client updated. <a target="_blank" href="%s">View client</a>', 'cl'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'cl'),
		3 => __('Custom field deleted.', 'cl'),
		4 => __('Client updated.', 'cl'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Client restored to revision from %s', 'cl'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Client published. <a href="%s">View client</a>', 'cl'), esc_url( $permalink ) ),
		7 => __('Client saved.', 'cl'),
		8 => sprintf( __('Client submitted. <a target="_blank" href="%s">Preview client</a>', 'cl'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Client scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview client</a>', 'cl'),
		// translators: Publish box date format, see https://secure.php.net/manual/en/function.date.php
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Client draft updated. <a target="_blank" href="%s">Preview client</a>', 'cl'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'client_updated_messages' );
