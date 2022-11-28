
<?php

//include get_template_directory() . '/mabuc-panel/main.php';
//include get_template_directory() . '/mabuc-panel/main.php';
// include get_template_directory() . '/includes/mabuc-panel/options.php';

register_nav_menus(
       array('primary-menu'=>'Header Menu')
);


add_theme_support('post-thumbnails');
add_theme_support('custom-header');


register_sidebar(
        array(
                'name'=>"Sidebar Location",
                'id'=>'sidebar'

        )
        );

        add_theme_support('custom-background' );

        // include get_template_directory() . 'includes/mabuc-panel/main.php';

        // include get_template_directory() . 'includes/template-parts/player/player.php';

        // function register_acf_block_types() {
        //         //register a player block.

        //         acf_register_block_type(array(
        //                 'name' => 'player',
        //                 'title' => _('Player'),
        //                 'description' => _('A custom player block. '),
        //                 'render_template' => 'template-parts/blocks/player/player.php',
        //                 'category' => 'formatting',
        //                 'icon' => 'admin-users',
        //                 'keywords' => array('player'),
        //         ))



        // //Check if function exists and hhook into setup
        // if(function_exists('acf_register_block_type')){
        //         add_action('acf/init', 'register_acf_block_types');
        // }



        ?>

