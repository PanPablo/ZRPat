<?php

function attorney_init() {
	register_post_type( 'attorney', array(
		'labels'            => array(
			'name'                => __( 'Rzecznicy', 'at' ),
			'singular_name'       => __( 'Rzecznik', 'at' ),
			'all_items'           => __( 'Wszyscy rzecznicy', 'at' ),
			'new_item'            => __( 'Nowy rzecznik', 'at' ),
			'add_new'             => __( 'Dodaj nowy', 'at' ),
			'add_new_item'        => __( 'Dodaj nowego rzecznika', 'at' ),
			'edit_item'           => __( 'Edytuj rzecznika', 'at' ),
			'view_item'           => __( 'Zobacz rzecznika', 'at' ),
			'search_items'        => __( 'Szukaj rzecznika', 'at' ),
			'not_found'           => __( 'Nie znaleziono rzecznika', 'at' ),
			'not_found_in_trash'  => __( 'No attorneys found in trash', 'at' ),
			'parent_item_colon'   => __( 'Parent attorney', 'at' ),
			'menu_name'           => __( 'Rzecznicy', 'at' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-groups',
		'show_in_rest'      => true,
		'rest_base'         => 'attorney',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'attorney_init' );

function attorney_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['attorney'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Attorney updated. <a target="_blank" href="%s">View attorney</a>', 'at'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'at'),
		3 => __('Custom field deleted.', 'at'),
		4 => __('Attorney updated.', 'at'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Attorney restored to revision from %s', 'at'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Attorney published. <a href="%s">View attorney</a>', 'at'), esc_url( $permalink ) ),
		7 => __('Attorney saved.', 'at'),
		8 => sprintf( __('Attorney submitted. <a target="_blank" href="%s">Preview attorney</a>', 'at'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Attorney scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview attorney</a>', 'at'),
		// translators: Publish box date format, see https://secure.php.net/manual/en/function.date.php
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Attorney draft updated. <a target="_blank" href="%s">Preview attorney</a>', 'at'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'attorney_updated_messages' );
