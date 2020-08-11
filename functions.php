<?php

add_action('init', function () {
    remove_post_type_support('page', 'editor');
}, 99);


function cptui_register_my_cpts()
{

    /**
     * Post Type: Stories.
     */

    $labels = [
        "name" => __("Stories", "custom-post-type-ui"),
        "singular_name" => __("Story", "custom-post-type-ui"),
    ];

    $args = [
        "label" => __("Stories", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "stories", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor"],
    ];

    register_post_type("stories", $args);

    /**
     * Post Type: Jobs.
     */

    $labels = [
        "name" => __("Jobs", "custom-post-type-ui"),
        "singular_name" => __("Job", "custom-post-type-ui"),
    ];

    $args = [
        "label" => __("Jobs", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "job", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "custom-fields"],
    ];

    register_post_type("job", $args);
}

add_action('init', 'cptui_register_my_cpts');  ?>