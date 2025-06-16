<?php
function register_cpt_realizacje()
{
    $labels = array(
        'name'               => 'Realizacje',
        'singular_name'      => 'Specjalizacja',
        'menu_name'          => 'Realizacje',
        'name_admin_bar'     => 'Realizacje',
        'add_new'            => 'Dodaj nową',
        'add_new_item'       => 'Dodaj nową realizację',
        'new_item'           => 'Nowa realizacja',
        'edit_item'          => 'Edytuj realizację',
        'view_item'          => 'Zobacz realizację',
        'all_items'          => 'Wszystkie realizację',
        'search_items'       => 'Szukaj realizacji',
        'not_found'          => 'Nie znaleziono',
        'not_found_in_trash' => 'Nie znaleziono w koszu'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'realizacje'),
        'capability_type'    => 'page',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes', 'post-formats')
    );

    register_post_type('realizacje', $args);
}
add_action('init', 'register_cpt_realizacje');


// Breadcrumbs Rank Math

add_filter('rank_math/frontend/breadcrumb/items', function ($crumbs, $class) {
    if (is_singular('realizacje')) {
        $test_breadcrumb = [
            'Realizacje',
            site_url('/realizacje/'), // URL do podstrony Test

        ];

        array_splice($crumbs, -1, 0, [$test_breadcrumb]);
    }
    return $crumbs;
}, 10, 2);
