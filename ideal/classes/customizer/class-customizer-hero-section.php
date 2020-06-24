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

        protected $opt_mode = 'theme_mod' ;

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
            $wp_customize->add_section('home_hero_callout_section', array(
                'title'       => esc_html__('Home Hero Section', 'ideal'),
                'priority'    => 2,
                'description' => esc_html__('Here you can customize home hero section.', 'ideal'),
            ));
            /**
             * Home Hero section setting & control
             * 
             * @since 1.0.0 
             */
            $wp_customize->add_setting('ideal_hero_select_en', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_select'),
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home-hero-callout-display-control', array(
                'label'     => esc_html__( 'Disable Home Hero Section', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'ideal_hero_select_en',
                'default'           => 'No',
                'type'       => 'select',
                'priority'    => 1,
                'choices'    => array(
                    'No' =>esc_html__('No', 'ideal' ),
                    'Yes' =>esc_html__('Yes', 'ideal' ),
                ),
            )));//----------home-hero-callout-display-control------------


            $wp_customize->add_setting('hearo_text', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_text'),
            ));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home-hero-textheader', array(
                'label'     => esc_html__('Hero section heading Text', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'hearo_text',
                'type'       => 'text',
                'priority'    => 2,
            )));//-------------home-hero-text header----------------

            $wp_customize->add_setting('hero_textarea', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_text'),
            ));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home-hero-textarea', array(
                'label'     => esc_html__( 'Add subheading text', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'hero_textarea',
                'type'       => 'textarea',
                'priority'    => 3,
            )));//---------------home-hero-text area---------------------

            $wp_customize->add_setting('hero_text_color', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_hex_color'),
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'home-hero-textcolor', array(
                'label'     => esc_html__( 'Chose your Hero section font color', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'hero_text_color',
                'type'       => 'color',
                'priority'    => 4,
            )));//-------------home hero text color--------------
            $wp_customize->add_setting('hero_bacground_color', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_hex_color'),
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'home-hero-bacgroundcolor', array(
                'label'     => esc_html__( 'Chose your Hero section background color', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'hero_bacground_color',
                'type'       => 'color',
                'priority'    => 5,
            )));//-------------home-hero-bacgroundcolor-----------------
            $wp_customize->add_setting('hero_background_image', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_url'),
            ));
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home-hero-background', array(
                'label'     => esc_html__( 'Add Image Background to Hero section', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'hero_background_image',
                'priority'    => 6,
            )));//--------------home-hero-background img---------------
            
            $wp_customize->add_setting('hero_select_button_s', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_select'),
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero_select_button_s', array(
                'label'     => esc_html__( 'Remove Secondary Button', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'hero_select_button_s',
                'type'       => 'select',
                'choices'    => array(
                    'No' => esc_html__('No', 'ideal' ),
                    'Yes' => esc_html__('Yes', 'ideal' )
                ),
            )));//----------home-hero-callout-display-control------------
            $wp_customize->add_setting('secondary_button_text', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_text'),
            ));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'secondary_button_text', array(
                'label'     => esc_html__('Secondary Button Text', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'secondary_button_text',
                'type'       => 'text',
            )));//-------------Secondary Button Text----------------
            $wp_customize->add_setting('secondary_button_link', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_url'),
            ));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'secondary_button_link', array(
                'label'     => esc_html__('Secondary Button Link', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'secondary_button_link',
                'type'       => 'text',
            )));//-------------econdary_button_link----------------
            $wp_customize->add_setting('hero_select_primary_button_s', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_select'),
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero_select_primary_button_s', array(
                'label'     => esc_html__( 'Remove primary Button', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'hero_select_primary_button_s',
                'type'       => 'select',
                'choices'    => array(
                    'No' => esc_html__('No', 'ideal' ),
                    'Yes' => esc_html__('Yes', 'ideal' )
                ),
            )));//----------home-hero-callout-display-control------------
            $wp_customize->add_setting('primary_button_text', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_text'),
            ));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'primary_button_text', array(
                'label'     => esc_html__('primary Button Text', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'primary_button_text',
                'type'       => 'text',
            )));//-------------primary Button Text----------------
            $wp_customize->add_setting('primary_button_link', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_url'),
            ));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'primary_button_link', array(
                'label'     => esc_html__('primary Button Link', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'primary_button_link',
                'type'       => 'text',
            )));//-------------econdary_button_link----------------

            $wp_customize->add_setting('hero_primary_button_bg_color', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_hex_color'),
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_primary_button_bg_color', array(
                'label'     => esc_html__( 'Chose your Brimary Button Background color', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'hero_primary_button_bg_color',
                'type'       => 'color',
            )));//-------------home hero Button b color--------------
            $wp_customize->add_setting('hero_primary_button_hover_color', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_hex_color'),
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_primary_button_hover_color', array(
                'label'     => esc_html__( 'Chose your Brimary Button Background Hover color', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'hero_primary_button_hover_color',
                'type'       => 'color',
            )));//-------------home hero Button hover color--------------

            $wp_customize->add_setting('hero_primary_button_text_color', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_hex_color'),
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_primary_button_text_color', array(
                'label'     => esc_html__( 'Chose your Brimary Button Text color', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'hero_primary_button_text_color',
                'type'       => 'color',
            )));//-------------home hero text color--------------
            $wp_customize->add_setting('hero_primary_button_text_h_color', array(
                'default'           => '',
                'type'              => $opt_mode,
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => array(new Ideal_Customizer_Sanitizes(), 'sanitize_hex_color'),
            ));
            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_primary_button_text_h_color', array(
                'label'     => esc_html__( 'Chose your Brimary Button Text Hover color', 'ideal'),
                'section'    => 'home_hero_callout_section',
                'settings'   => 'hero_primary_button_text_h_color',
                'type'       => 'color',
            )));//-------------home hero text color--------------





        }


    }
}
new Ideal_Home_Hero_Section();
