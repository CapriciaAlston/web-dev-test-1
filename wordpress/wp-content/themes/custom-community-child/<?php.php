<?php

function people_init() {
	// create a new taxonomy
	register_taxonomy(
		'portfolios',
		'post',
		array(
			'label' => __( 'Portfolios' ),
			'rewrite' => array( 'slug' => 'portfolio' ),
			'capabilities' => array(
				'assign_terms' => 'edit_guides',
				'edit_terms' => 'publish_guides'
			)
		)
	);
}
add_action( 'init', 'people_init' );