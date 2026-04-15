<?php 

add_filter('block_categories_all', function ($categories) {

    return array_merge(
        $categories,
        [
            [
                'slug'  => 'home-sections',
                'title' => __('Home Sections', 'astra-child'),
                'icon'  => 'admin-home',
            ],
            [
                'slug'  => 'landing-page',
                'title' => __('Landing Page', 'astra-child'),
                'icon'  => 'admin-home',
            ],
        ]
    );

});



add_action('acf/init', function () {

    $blocks = [
        'banner'      => 'Home Banner',
        'in-one-system' => 'In One System',
        'gfc-humit'  => 'GFC Humit',  
        'humait-architecture'  => 'HumAIT Architecture',
        'user-journey'  => 'User Journey',
        'book-block'  => 'Book Block',
        'home-blog'  => 'Home Blog',
        'home-membership'  => 'Home Membership',
    ];

     $LPBlocks = [
        'landing-banner'       => 'Landing Banner',
        
    ];

     foreach ($LPBlocks as $slug => $title) {

        acf_register_block_type([
            'name'            => $slug,
            'title'           => $title,
            'render_template' => get_stylesheet_directory() . "/inc/theme-blocks/landing/{$slug}.php",
            'category'        => 'landing-page',
            'icon'            => 'block-default',
            'mode'            => 'preview',
            'supports'        => [
                'align'  => true,
                'anchor'=> true,
            ],
        ]);
    }

    
    foreach ($blocks as $slug => $title) {

        acf_register_block_type([
            'name'            => $slug,
            'title'           => $title,
            'render_template' => get_stylesheet_directory() . "/inc/theme-blocks/home/{$slug}.php",
            'category'        => 'home-sections',
            'icon'            => 'block-default',
            'mode'            => 'preview',
            'supports'        => [
                'align'  => true,
                'anchor'=> true,
            ],
        ]);
    }


});
