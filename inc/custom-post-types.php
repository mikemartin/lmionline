<?php 
/**
 * Custom Post Types
 */

// Create Custom Post Type
function add_custom_post_types() { 
  
    $documents = array(
      'public'        => true,
      'label'         => 'Documents',
      'menu_icon'     => 'dashicons-media-document',
      'menu_position' => 4,
      'supports'      => array( 'title', 'editor' ),
      'has_archive'   => true,
      'publicly_queryable' => true
    );

    register_post_type( 'documents', $documents );

    register_taxonomy(
        'project',
        'documents',
        array( 'hierarchical' => true,
               'has_archive'   => true,
               'label' => __('Projects'),
               'singular_name'  =>  __('Project'),
               'rewrite' => array( 'slug' => 'projects' ),
               'query_var' => 'projects'
        )
     );

    register_taxonomy(
        'region',
        'documents',
        array( 'hierarchical' => true,
               'has_archive'   => true,
               'label' => __('Regions'),
               'singular_name'	=>	__('Region'),
               'rewrite' => array( 'slug' => 'regions' ),
               'query_var' => 'regions'
        )
     );
  
    register_taxonomy(
        'industry',
        'documents',
        array( 'hierarchical' => true,
               'has_archive'   => true,
               'label' => __('Industries'),
               'singular_name'	=>	__('Industry'),
               'rewrite' => array( 'slug' => 'industries' ),
               'query_var' => 'industries'
        )
     );

    register_taxonomy(
        'sectors',
        'documents',
        array( 'hierarchical' => true,
               'has_archive'   => true,
               'label' => __('Sectors'),
               'singular_name'  =>  __('Sector'),
               'rewrite' => array( 'slug' => 'sectors' ),
               'query_var' => 'sectors'
        )
     );

    register_taxonomy(
        'occupation',
        'documents',
        array( 'hierarchical' => true,
               'label' => __('Occupations'),
               'singular_name'  =>  __('Occupation'),
               'rewrite' => array( 'slug' => 'occupations' ),
               'query_var' => 'occupations'
        )
     );

} 

// adding the function to the Wordpress init
add_action( 'init', 'add_custom_post_types');
