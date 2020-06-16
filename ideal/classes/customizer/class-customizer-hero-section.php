<?php
/**
 * Ideal Customizer Register 
 * Home Hero section setting & control
 *
 * @package Ideal WordPress Theme
 * @subpackage classes / Customizer
 * @version 1.0.0
 * @since 1.0.0
 */

// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

if (class_exists('Ideal_Customizer')) {

    class Ideal_Home_Hero_Section extends Ideal_Customizer
    {

        public function ideal_register_customize_sections($wp_customize)
        {
            /**
             * parent class Ideal_Customizer
             * Register sections control
             * @since 1.0.0 
             */
            $this->ideal_new_control($wp_customize);

        }

        private function ideal_new_control($wp_customize)
        {
            /**
             * Register sections
             * add customizer home hero section
             * @since 1.0.0 
             */
            $wp_customize->add_section('home-hero-callout-section', array(
                'title'       => esc_html__('Home Hero Section', 'ideal'),
                'priority'    => 2,
                'description' => esc_html__('Here you can customize home hero section.', 'ideal'),
            ));
            /**
             * Home Hero section setting & control
             * 
             * @since 1.0.0 
             */
            $wp_customize->add_setting('hero_select', array(
                'default'           => 'No',
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_select'),
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home-hero-callout-display-control', array(
                'label'     => esc_html__( 'Enable home hero section', 'ideal'),
                'section'    => 'home-hero-callout-section',
                'settings'   => 'hero_select',
                'type'       => 'select',
                'choices'    => array('No' => 'No', 'Yes' => 'Yes'),
            )));//----------home-hero-callout-display-control------------


            $wp_customize->add_setting('hearo_text', array(
                'default'           => '',
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_text'),
            ));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home-hero-textheader', array(
                'label'     => esc_html__('Hero section heading Text', 'ideal'),
                'section'    => 'home-hero-callout-section',
                'settings'   => 'hearo_text',
                'type'       => 'text',
            )));//-------------home-hero-text header----------------

            $wp_customize->add_setting('hero_textarea', array(
                'default'           => '',
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_text'),
            ));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home-hero-textarea', array(
                'label'     => esc_html__( 'Add subheading text', 'ideal'),
                'section'    => 'home-hero-callout-section',
                'settings'   => 'hero_textarea',
                'type'       => 'textarea',
            )));//---------------home-hero-text area---------------------

            $wp_customize->add_setting('hero_text_color', array(
                'default'           => '',
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_hex_color'),
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'home-hero-textcolor', array(
                'label'     => esc_html__( 'Chose your Hero section font color', 'ideal'),
                'section'    => 'home-hero-callout-section',
                'settings'   => 'hero_text_color',
                'type'       => 'color',
            )));//-------------home hero text color--------------
            $wp_customize->add_setting('hero_bacground_color', array(
                'default'           => '',
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_hex_color'),
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'home-hero-bacgroundcolor', array(
                'label'     => esc_html__( 'Chose your Hero section background color', 'ideal'),
                'section'    => 'home-hero-callout-section',
                'settings'   => 'hero_bacground_color',
                'type'       => 'color',
            )));//-------------home-hero-bacgroundcolor-----------------
            $wp_customize->add_setting('hero_background-image', array(
                'default'           => '',
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_url'),
            ));
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home-hero-background', array(
                'label'     => esc_html__( 'Add Image Background to Hero section', 'ideal'),
                'section'    => 'home-hero-callout-section',
                'settings'   => 'hero_background-image',
            )));//--------------home-hero-background img---------------

            $wp_customize->add_setting('hero_overlay_color', array(
                'default'           => '',
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_hex_color'),
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'home-hero-overlay', array(
                'label'     => esc_html__( 'Chose your Hero section overlay color', 'ideal'),

                'section'    => 'home-hero-callout-section',
                'settings'   => 'hero_overlay_color',
                'type'       => 'color',
            )));

           
        }

    }
}
new Ideal_Home_Hero_Section();
