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
         * Sanitize Inputs text
         *
         * @since 1.0.0
         *
         */

        public static function sanitize_text($input)
        {
            return filter_var($input, FILTER_SANITIZE_STRING);
        }
        /**
         * Sanitize Inputs Url
         *
         * @since 1.0.0
         *
         */
        public static function sanitize_url($input)
        {
            return filter_var($input, FILTER_SANITIZE_URL);
        }
        /**
         * Sanitize Inputs email
         *
         * @since 1.0.0
         *
         */
        public static function sanitize_email($input)
        {
            return filter_var($input, FILTER_SANITIZE_EMAIL);
        }
        /**
         * Sanitize Inputs Hex Color and Alfa
         * 
         *  @since 1.0.0
         * 
         */
        public static function sanitize_hex_color($color)
        {
            $pattern = '/^(\#[\da-f]{3}|\#[\da-f]{6}|\#[\da-f]{8}|rgba\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)(,\s*(0\.\d+|1))\)|hsla\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)(,\s*(0\.\d+|1))\)|rgb\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)|hsl\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)\))$/';
            \preg_match($pattern, $color, $matches);
            
            if (isset($matches[0])) {
                if (is_string($matches[0])) {
                    return $matches[0];
                }
                if (is_array($matches[0]) && isset($matches[0][0])) {
                    return $matches[0][0];
                }
            }
           
            return '';
        }
        /**
         * Sanitize Inputs float
         *
         * @since 1.0.0
         *
         */
        public static function sanitize_float($input)
        {
            return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        }
        /**
         * Sanitize number options.
         *
         * @static
         * @access public
         * @since 1.0.0
         *
         */
        public static function number($value)
        {
            return (is_numeric($value)) ? $value : intval($value);
        }

        /**
         * Sanitize Inputs select
         *
         * @since 1.0.0
         *
         */
        public static function sanitize_select($input)
        {
            return ($input === "No") ? "No" : "Yes";
        }

    }

}
