<?php
/**
 * Ideal Customizer Sanitize Inputs
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
    /**
     * class Ideal Customizer Sanitizes
     * Sanitize Inputs
     * 
     * @since 1.0.0
     */

    class Ideal_Customizer_Sanitizes
    {
        /**
         * Sanitize Inputs select
         *
         * @since 1.0.0
         *
         */
        public function sanitize_select($input)
        {
            return ($input === "No") ? "No" : "Yes";
        }
        /**
         * Sanitize Inputs text
         *
         * @since 1.0.0
         *
         */

        public function sanitize_text($input)
        {
            return filter_var($input, FILTER_SANITIZE_STRING);
        }
        /**
         * Sanitize Inputs Url
         *
         * @since 1.0.0
         *
         */
        public function sanitize_url($input)
        {
            return filter_var($input, FILTER_SANITIZE_URL);
        }
        /**
         * Sanitize Inputs email
         *
         * @since 1.0.0
         *
         */
        public function sanitize_email($input)
        {
            return filter_var($input, FILTER_SANITIZE_EMAIL);
        }
        /**
         * Sanitize Inputs Hex Color
         *
         * @since 1.0.0
         *
         */
        public function sanitize_hex_color($color)
        {
            if ('' === $color) {
                return '';
            }
            // 3 or 6 hex digits, or the empty string.
            if (preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color)) {
                return $color;
            }
        }
        /**
         * Sanitize Inputs float
         *
         * @since 1.0.0
         *
         */
        public function sanitize_float( $input ) {
            return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        }
    }

}
