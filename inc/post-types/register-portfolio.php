<?php

$portfolio = new CPT(array(
    'post_type_name' => 'portfolio',
    'singular' => __('Portfolio', 'bootstrapwp'),
    'plural' => __('Portfolio', 'bootstrapwp'),
    'slug' => 'portfolio'
),
	array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-portfolio'
));

$portfolio->register_taxonomy(array(
    'taxonomy_name' => 'portfolio_tags',
    'singular' => __('Portfolio Tag', 'bootstrapwp'),
    'plural' => __('Portfolio Tags', 'bootstrapwp'),
    'slug' => 'portfolio-tag'
));