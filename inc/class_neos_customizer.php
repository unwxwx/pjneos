<?php
/**
 * Neos Customizer
 */


/* Check if Class Exists. */
if ( ! class_exists( 'Neos_Customizer' ) ) {
    /**
     *
     */
    class Neos_Customizer
    {
        const OPT_SECTION_HEADER = 'neos_options_header';
        const OPT_SECTION_FOOTER = 'neos_options_footer';
        const OPT_HEADER_IMAGE = 'neos_header_image';
        const OPT_HEADER_TITLE = 'neos_header_title';
        const OPT_HEADER_SUBTITLE = 'neos_header_subtitle';
        const OPT_FOOTER_TITLE = 'neos_footer_title';
        const OPT_LINK_TEXT = 'neos_footer_link';
        const OPT_LINK_URL = 'neos_footer_link_url';

        const SECTIONS = array(
            array(
                'title' => 'Neos Header',
                'name' => self::OPT_SECTION_HEADER,
                'priority' => 201
            ),
            array(
                'title' => 'Neos Footer Contacts',
                'name' => self::OPT_SECTION_FOOTER,
                'priority' => 202
            ),
        );

        const TRANSPORT = 'refresh';

        public static function init() {
            add_action( 'customize_register', array( __CLASS__, 'setupCustomizer' ) );
        }

        public static function setupCustomizer(WP_Customize_Manager $wp_customize)
        {
            self::registerSections($wp_customize);

            $wp_customize->add_setting( self::OPT_HEADER_IMAGE, [
                    'default'      => '',
                    'transport'    => self::TRANSPORT
                ]
            );
            $wp_customize->add_control(
                new WP_Customize_Image_Control( $wp_customize, self::OPT_HEADER_IMAGE, [
                    'label'    => 'Изображение',
                    'settings' => self::OPT_HEADER_IMAGE,
                    'section'  => self::OPT_SECTION_HEADER
                ] )
            );

            $wp_customize->add_setting( self::OPT_HEADER_TITLE, [
                'default'            => '',
                'sanitize_callback'  => 'sanitize_text_field',
                'transport'          => self::TRANSPORT
            ] );
            $wp_customize->add_control( self::OPT_HEADER_TITLE, [
                'section'  => self::OPT_SECTION_HEADER,
                'label'    => 'Заголовок',
                'type'     => 'text'
            ] );

            $wp_customize->add_setting( self::OPT_HEADER_SUBTITLE, [
                'default'            => '',
                'sanitize_callback'  => false,
                'transport'          => self::TRANSPORT
            ] );
            $wp_customize->add_control( self::OPT_HEADER_SUBTITLE, [
                'section'  => self::OPT_SECTION_HEADER,
                'label'    => 'Подзаголовок',
                'type'     => 'text'
            ] );

            $wp_customize->add_setting( self::OPT_FOOTER_TITLE, [
                'default'            => '',
                'sanitize_callback'  => false,
                'transport'          => self::TRANSPORT
            ] );
            $wp_customize->add_control( self::OPT_FOOTER_TITLE, [
                'section'  => self::OPT_SECTION_FOOTER,
                'label'    => 'Заголовок',
                'type'     => 'text'
            ] );

            $wp_customize->add_setting( self::OPT_LINK_TEXT, [
                'default'            => '',
                'sanitize_callback'  => false,
                'transport'          => self::TRANSPORT
            ] );
            $wp_customize->add_control( self::OPT_LINK_TEXT, [
                'section'  => self::OPT_SECTION_FOOTER,
                'label'    => 'Текст ссылки',
                'type'     => 'text'
            ] );

            $wp_customize->add_setting( self::OPT_LINK_URL, [
                'default'            => '',
                'sanitize_callback'  => false,
                'transport'          => self::TRANSPORT
            ] );
            $wp_customize->add_control( self::OPT_LINK_URL, [
                'section'  => self::OPT_SECTION_FOOTER,
                'label'    => 'Ссылка',
                'type'     => 'text'
            ] );
        }

        private static function registerSections($customizeManager)
        {
            foreach (self::SECTIONS as $section){
                $customizeManager->add_section( $section['name'], [
                    'title'    => $section['title'],
                    'priority' => $section['priority'],
                ] );
            }
        }
    }

    Neos_Customizer::init();
}
