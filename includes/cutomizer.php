<?php 


function ftcmp_cutomize_register($wp_customize){
    // showcase section
    $wp_customize->add_section('showcase', array(
        'title' => __('showcase', 'FTPcM'),
        'description' => sprintf(__('Options for showcase', 'FTPcM')),
        'priority' => 130
    ));


    $wp_customize->add_setting('showcase_image', array(
        'default' => get_blogInfo('template_directory').'/images/bg_1.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('Showcase Image', 'FTPcM'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
    )));

    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Finding The Person Called Me', 'FTPcM'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Heading', 'FTPcM'),
        'section' => 'showcase',
        'priority' => 2
    ));


    $wp_customize->add_setting('showcase_text', array(
        'default' => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ratione, laborum pariatur culpa sit enim.', 'FTPcM'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
        'label' => __('Text', 'FTPcM'),
        'section' => 'showcase',
        'priority' => 3
    ));

}



add_action('customize_register', 'ftcmp_cutomize_register');