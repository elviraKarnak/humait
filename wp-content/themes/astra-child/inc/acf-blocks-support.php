<?php 

add_filter('block_categories_all', function ($categories) {

    return array_merge(
        $categories,
        [
            [
                'slug'  => 'home-sections',
                'title' => __('Home Sections', 'viabosted'),
                'icon'  => 'admin-home',
            ]
        ]
    );

});



add_action('acf/init', function () {

    $blocks = [
        'banner'      => 'Home Banner',
    ];

    
    foreach ($blocks as $slug => $title) {

        acf_register_block_type([
            'name'            => $slug,
            'title'           => $title,
            'render_template' => get_template_directory() . "/inc/theme-blocks/home/{$slug}.php",
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