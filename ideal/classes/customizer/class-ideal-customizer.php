<?php
/**
 * Ideal Customizer
 *
 * @package Ideal WordPress Theme
 * @subpackage classes
 * @version 1.0.0
 * @since 1.0.0
 */

// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Ideal Customizer Loader
 */
if (!class_exists('Ideal_Customizer')) {
    /**
     * Ideal Customizer Loader
     *
     * @since 1.0.0
     */
    class Ideal_Customizer
    {

        static $instance = null;


        public function __construct()
        {

            $this->initializeHooks();

            add_action('customize_register', array($this,'ideal_register_customize_sections'));
        }

        /**
         * Initiator
         */
        public static function get_instance()
        {

            if (!isset(self::$instance)) {

                self::$instance = new self();
            }
            return self::$instance;
        }

        

        private function initializeHooks()
        {

            add_action('ideal_customizer_mt_init', function () {
                $this->load_files([

                ]);
            });

            do_action('ideal_customizer_mt_init');
        }

        public function ideal_register_customize_sections($wp_customize)
        {
            
            
            //ideal_register_sections
            // ideal_register_setting
            //ideal_new_control 
             

        }

        /* Author Section */
        private function author_callout_section($wp_customize)
        {

           
        }

        /**
         * Loads specified PHP files from the theme directory.
         *
         * @since 1.0.0
         */

        public function load_files($file_names = array())
        {
            foreach ($file_names as $file_name) {
                $path = IDEAL_THEME_DIRECTORY . $file_name . '.php';
                if (file_exists($path)) {
                    require_once $path;
                }
            }
        }

    }
}
new Ideal_Customizer();
