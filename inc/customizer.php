<?php
add_action( 'customize_register', 'neos_customizer_init' );
function neos_customizer_init( WP_Customize_Manager $wp_customize ){
    $transport = 'refresh';

    $section = 'neos_options_header';
    $wp_customize->add_section( $section, [
        'title'    => 'Neos Header',
        'priority' => 201,
    ] );

    $headerImage = 'neos_header_image';
    $wp_customize->add_setting( $headerImage, [
            'default'      => '',
            'transport'    => $transport
        ]
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control( $wp_customize, $headerImage, [
            'label'    => 'Изображение',
            'settings' => $headerImage,
            'section'  => $section
        ] )
    );

    $headerTitle = 'neos_header_title';
    $wp_customize->add_setting( $headerTitle, [
        'default'            => '',
        'sanitize_callback'  => 'sanitize_text_field',
        'transport'          => $transport
    ] );
    $wp_customize->add_control( $headerTitle, [
        'section'  => $section,
        'label'    => 'Заголовок',
        'type'     => 'text'
    ] );

    $headerSub = 'neos_header_subtitle';
    $wp_customize->add_setting( $headerSub, [
        'default'            => '',
        'sanitize_callback'  => false,
        'transport'          => $transport
    ] );
    $wp_customize->add_control( $headerSub, [
        'section'  => $section,
        'label'    => 'Подзаголовок',
        'type'     => 'text'
    ] );

    $sectionFooter = 'neos_options_footer';
    $wp_customize->add_section( $sectionFooter, [
        'title'    => 'Neos Footer Contacts',
        'priority' => 202,
    ] );

    $footerTitle = 'neos_footer_title';
    $wp_customize->add_setting( $footerTitle, [
        'default'            => '',
        'sanitize_callback'  => false,
        'transport'          => $transport
    ] );
    $wp_customize->add_control( $footerTitle, [
        'section'  => $sectionFooter,
        'label'    => 'Заголовок',
        'type'     => 'text'
    ] );

    $footerLink = 'neos_footer_link';
    $wp_customize->add_setting( $footerLink, [
        'default'            => '',
        'sanitize_callback'  => false,
        'transport'          => $transport
    ] );
    $wp_customize->add_control( $footerLink, [
        'section'  => $sectionFooter,
        'label'    => 'Текст ссылки',
        'type'     => 'text'
    ] );

    $footerLinkText = 'neos_footer_link_url';
    $wp_customize->add_setting( $footerLinkText, [
        'default'            => '',
        'sanitize_callback'  => false,
        'transport'          => $transport
    ] );
    $wp_customize->add_control( $footerLinkText, [
        'section'  => $sectionFooter,
        'label'    => 'Ссылка',
        'type'     => 'text'
    ] );
}