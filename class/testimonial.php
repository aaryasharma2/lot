<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class SP_TFREE_Testimonial {

    /**
     * @var
     * @since 2.0
     */
    private static $_instance;

    /**
     * @return SP_TFREE_Testimonial
     * @since 2.0
     */
    public static function getInstance() {
        if ( ! self::$_instance ) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * SP_TFREE_Testimonial constructor.
     * @since 1.0
     */
    public function __construct() {
        add_filter( 'init', array( $this, 'register_post_type' ) );
    }

    /**
     * Register post type
     * @since 1.0
     */
    function register_post_type() {
        register_post_type( 'spt_testimonial', array(
            'label'             => __( 'Testimonial', 'testimonial-free' ),
            'description'       => __( 'Testimonial custom post type.', 'testimonial-free' ),
            'taxonomies'        => array(),
            'public'            => false,
            'has_archive'       => false,
            'publicaly_queryable' => false,
            'query_var'         => false,
            'show_ui'           => true,
            'show_in_menu'      => true,
            'menu_icon'         => SP_TFREE_URL . '/admin/assets/images/icon-32.png',
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'hierarchical'      => false,
            'menu_position'     => 20,
            'supports'          => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'capability_type'   => 'post',
            'labels'            => array(
                'name'               => __( 'Testimonials', 'testimonial-free' ),
                'singular_name'      => __( 'Testimonial', 'testimonial-free' ),
                'menu_name'          => __( 'Testimonial', 'testimonial-free' ),
                'all_items'          => __( 'Testimonials', 'testimonial-free' ),
                'add_new'            => __( 'Add Testimonial', 'testimonial-free' ),
                'add_new_item'       => __( 'Add Testimonial', 'testimonial-free' ),
                'edit'               => __( 'Edit', 'testimonial-free' ),
                'edit_item'          => __( 'Edit Testimonial', 'testimonial-free' ),
                'new_item'           => __( 'New Testimonial', 'testimonial-free' ),
                'search_items'       => __( 'Search Testimonials', 'testimonial-free' ),
                'not_found'          => __( 'No Testimonials found', 'testimonial-free' ),
                'not_found_in_trash' => __( 'No Testimonials found in Trash', 'testimonial-free' ),
                'parent'             => __( 'Parent Testimonials', 'testimonial-free' ),
                'featured_image'        => __( 'Featured Image for Testimonial', 'testimonial-free' ),
                'set_featured_image'    => __( 'Set Testimonial Thumbnail', 'testimonial-free' ),
                'remove_featured_image' => __( 'Remove image', 'testimonial-free' ),
                'use_featured_image'    => __( 'Use as image', 'testimonial-free' ),
            )
        ) );
    }

}