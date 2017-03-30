<?php
function tolka_enqueue_styles() {

    $parent_style = 'twentyseventen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    wp_enqueue_style( 'minimum-google-fonts', '//fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans', array(), CHILD_THEME_VERSION );

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'my-child-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'tolka_enqueue_styles' );

function footer_customize_register( $wp_customize ) 
{
    $wp_customize->add_section( 'footer_new_section_name' , array(
        'title'    => __( 'Contact Details', 'starter' ),
        'priority' => 30
    ) );   
 
 // Email Address
 $wp_customize->add_setting('email_address', array(
 'default' => '',
 'type' => 'option',
 'capability' => 'edit_theme_options',
 ));

 $wp_customize->add_control('email_address', array(
 'label' => __('Email', footer_links_title),
 'section' => 'footer_new_section_name',
 'type' => 'option',
 'priority' => 5,
 'settings' => 'email_address'
 ));
 // Phone Number
 $wp_customize->add_setting('phone_number', array(
 'default' => '',
 'type' => 'option',
 'capability' => 'edit_theme_options',
 ));

 $wp_customize->add_control('phone_number', array(
 'label' => __('Phone Number', footer_links_title),
 'section' => 'footer_new_section_name',
 'type' => 'option',
 'priority' => 5,
 'settings' => 'phone_number'
 ));
  
}
add_action( 'customize_register', 'footer_customize_register');

add_filter( 'get_custom_logo', 'change_logo_class' );



function change_logo_class( $html ) {
    if(is_front_page()){

    $html = str_replace( 'custom-logo', 'your-custom-class', $html );
    $html = str_replace( 'custom-logo-link', 'your-custom-class', $html );
  
    return $html;
    }
    else { 
        $html = str_replace( 'custom-logo', 'my-custom-class', $html );
        $html = str_replace( 'custom-logo-link', 'my-custom-class', $html );
  
            return $html;
    }
    
}

?>