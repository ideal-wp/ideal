<?php
/*
 *
 * START SECTIONS General Settings
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}
$opt_name = 'ideal_redux';

Redux::setSection($opt_name, array(
    'title' => esc_html__('General Settings', 'ideal'),
    'id'    => 'general-settings',
    'icon'  => 'el el-dashboard ',
)
);

Redux::setSection($opt_name, array(
    'title'       => esc_html__('General Settings', 'ideal'),
    'subsection'  => true,
    'id'          => 'general-settings-new',
    'icon'        => 'el el-dashboard ',
    'customizer_width' => '450px',
    'desc'             => esc_html__('Welcome to the Ideal options panel! You can switch between option groups by using the left-hand tabs.', 'ideal'),
    'fields'          => array(
        array(
            'id' => 'body-b-color',
            'type' => 'color',
            'title' => esc_html__('General background color', 'ideal'),
            'subtitle' => esc_html__('Pick a background color for the theme (default: #fff).', 'ideal'),
            'transparent' => false,
            'default' => '#FFFFFF',
            'validate' => 'color',
        ),
        array(
            'id' => 'body-f-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('General Font Color', 'ideal'),
            'subtitle' => esc_html__('Choose the general font color for the site (default: #333).', 'ideal'),
            'desc' => esc_html__('Overall Font Color', 'ideal'),
            'default' => '#333',
            'validate' => 'color',

        ),

    ),

));

//==============================[ subsection General Color ]======================

Redux::setSection($opt_name, array(
    'title' => esc_html__('General Color', 'ideal'),
    'id' => 'general-settings-color',
    'subsection' => true,
    'icon' => 'el el-brush',
    'fields' => array(
        array(
            'id' => 'id-primary-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Primary Color', 'ideal'),
            'subtitle' => esc_html__('Choose the Primary Color for the site (default: #1e87f0).', 'ideal'),
            'desc' => esc_html__('Controls the main highlight color throughout the theme.', 'ideal'),
            'default' => '#1e87f0',
            'validate' => 'color',
        ),
        array(
            'id' => 'id-secondary-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Secondary Color', 'ideal'),
            'subtitle' => esc_html__('Choose the Secondary Color for the site (default: #222222).', 'ideal'),
            'desc' => esc_html__('Controls the main highlight color throughout the theme.', 'ideal'),
            'default' => '#222222',
            'validate' => 'color',
        ),
        array(
            'id' => 'id-sub-additional-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Sub Additional Color', 'ideal'),
            'subtitle' => esc_html__('Applicable theme items will have an option to choose this as color.', 'ideal'),
            'desc' => '',
            'default' => '#1ef0f0',
            'validate' => 'color',
        ),
        array(
            'id' => 'id-sub-plus-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Sub Additional Color #2', 'ideal'),
            'subtitle' => esc_html__('Applicable theme items will have an option to choose this as color.', 'ideal'),
            'desc' => '',
            'default' => '#f01e87',
            'validate' => 'color',
        ),
        array(
            'id' => 'id-color-gradient',
            'type' => 'color_gradient',
            'transparent' => false,
            'title' => esc_html__('Color Gradient', 'ideal'),
            'subtitle' => esc_html__('Applicable theme elements will have the option to choose this as a color (i.e. buttons, icons etc..)', 'ideal'),
            'desc' => '',
            'default' => array(
                'from' => '#1e87f0',
                'to' => '#f01e87',
            ),
        ),
        array(
            'id' => 'id-sub-color-gradient',
            'type' => 'color_gradient',
            'transparent' => false,
            'title' => esc_html__('Sub Color Gradient', 'ideal'),
            'subtitle' => esc_html__('Applicable theme elements will have the option to choose this as a color (i.e. buttons, icons etc..)', 'ideal'),
            'desc' => '',
            'default' => array(
                'from' => '#1ef0f0',
                'to' => '#1e87f0',
            ),
        ),

    ),
)
);
//==============================[ subsection More Extra Setting ]======================

Redux::setSection($opt_name, array(
    'title' => esc_html__('Extra Setting', 'ideal'),
    'subtitle' => esc_html__('More Extra Setting & Functionality.', 'ideal'),
    'id' => 'extra-settings-control',
    'subsection' => true,
    'icon' => 'el el-cog',
    'fields' => array(

        array(
            'id' => 'weqe-allow-s',
            'type' => 'switch',
            'title' => esc_html__('XXXAllow  files', 'ideal'),
            'subtitle' => esc_html__('Security is the main reason behind the limitation on file types that users can upload, Enable this to allow SVG files to be uploaded', 'ideal'),
            'default' => false,
        ),
        //------------
    ),
)
);
//==============================[ subsection Code Insert ]======================

Redux::setSection($opt_name, array(
    'title' => esc_html__('Code Insert', 'ideal'),
    'subtitle' => esc_html__('Here you Can add and insert CSS / Js code.', 'ideal'),
    'id' => 'code-insert-control',
    'subsection' => true,
    'customizer_width' => '550px',
    'icon' => 'el el-css',
    'fields' => array(

        array(
            'id' => 'html-editor-ace',
            'type' => 'ace_editor',
            'title' => esc_html__('HTML Code', 'ideal'),
            'subtitle' => esc_html__('Insert custom HTML Code inside head tag if you would like added to the site Head', 'ideal'),
            'mode' => 'html',
            'theme' => 'chrome',
            'options' => array('minLines' => 15),
        ),
        //------------End field HTML Code
        array(
            'id' => 'css_editor-css',
            'type' => 'ace_editor',
            'title' => esc_html__('CSS Code', 'ideal'),
            'subtitle' => esc_html__('Insert custom CSS you would like added to the site', 'ideal'),
            'mode' => 'css',
            'theme' => 'monokai',
            'default' => "\n/*\n#header{\nmargin: 0 auto;\n}\n*/",
            'options' => array('minLines' => 15),
        ),
        //------------End field CSS Code
        array(
            'id' => 'css_editor-js',
            'type' => 'ace_editor',
            'title' => esc_html__('Js Code', 'ideal'),
            'subtitle' => esc_html__('Insert custom Js you would like added to the site', 'ideal'),
            'mode' => 'javascript',
            'theme' => 'chrome',
            'options' => array('minLines' => 15),
        ),
        //------------End field Js Code
    ),
)
);
//==============================[ subsection Advanced setting ]======================

Redux::setSection($opt_name, array(
    'title' => esc_html__('Advanced', 'ideal'),
    'subtitle' => esc_html__('Advanced setting and control with security.', 'ideal'),
    'id' => 'advanced-settings-control',
    'subsection' => true,
    'icon' => 'el el-warning-sign',
    'fields' => array(
        array(
            'id' => 'style-dynamic-load',
            'type' => 'button_set',
            'title' => esc_html__('Dynamic Style', 'ideal'),
            'subtitle' => esc_html__('choose how the theme will load the dynamic style Ideal theme offers 3 way for loading dynamic style,
            Inline: output directly inline within the HTML head. This option is useful for preventing caching of the styles.
            WP ajax: theme will load the dynamic style by wp ajax. Write file: Writes the dynamic CSS into a file using WP-filesystem.', 'ideal'),
            'desc' => '',
            //Must provide key => value pairs for options
            'options' => array(
                '1' => 'Inline ',
                '2' => 'WP ajax',
                '3' => 'Write file',
            ),
            'default' => '1',
        ), //------
        array(
            'id' => 'info_warning-shutdown-write',
            'type' => 'info',
            'required' => array(
                array('style-dynamic-load', 'equals', '3'),
                array('shutdown-dynamic-file', 'equals', '0'),
            ),
            'style' => 'warning',
            'icon' => 'el el-warning-sign',
            'notice' => false,
            'title' => esc_html__('Stop writing the file! if you finished design', 'ideal'),
            'desc' => esc_html__('you have to stop writing the file after you finished your design and refresh the page, More Info in the documentation', 'ideal'),
        ), //---------
        array(
            'id' => 'info_success-shutdown-write',
            'type' => 'info',
            'required' => array(
                array('style-dynamic-load', 'equals', '3'),
                array('shutdown-dynamic-file', 'equals', '1'),
            ),
            'style' => 'success',
            'icon' => 'el el-info-circle',
            'notice' => false,
            'title' => esc_html__('file is stop writing ', 'ideal'),
            'desc' => esc_html__('if you want to rewrite it swiych to on', 'ideal'),
        ), //---------
        array(
            'id' => 'shutdown-dynamic-file',
            'type' => 'switch',
            'required' => array(
                array('style-dynamic-load', 'equals', '3'),
            ),
            'title' => esc_html__('Stop Write the file', 'ideal'),
            'subtitle' => esc_html__('this will chutdown writing the file any more swich it to on if you finsh design the theme', 'ideal'),
            'default' => false,
        ),
        //=================
        array(
            'id' => 'minify-dynamic-allow',
            'type' => 'switch',
            'title' => esc_html__('Allow To Minify Dynamic Style ', 'ideal'),
            'subtitle' => esc_html__('switch quick dynamic css minify', 'ideal'),
            'default' => true,
        ), //=====================
        array(
            'id' => 'force-dynamic-cache',
            'type' => 'switch',
            'title' => esc_html__('Force cache', 'ideal'),
            'subtitle' => esc_html__('switch allow to cache the dynamic style
              his option is useful for preventing caching of the styles if youre still developing and using minification/ caching plugins.
              f it is on the system will cache the file and if is off will no cache for dynamic style, default is off,
              ', 'ideal'),
            'default' => false,
        ),
        array(
            'id' => 'svag-allow-s',
            'type' => 'switch',
            'title' => esc_html__('Allow SVG files', 'ideal'),
            'subtitle' => esc_html__('Security is the main reason behind the limitation on file types that users can upload, Enable this to allow SVG files to be uploaded', 'ideal'),
            'default' => false,
        ),
        //------------End Allow SVG files
        array(
            'id' => 'switch-admin-bar',
            'type' => 'switch',
            'on' => esc_html__('Show', 'ideal'),
            'off' => esc_html__('Hide', 'ideal'),
            'default' => 0,
            'title' => esc_html__('Hides Admin Bar', 'ideal'),
            'subtitle' => esc_html__('Disable WordPress Admin Bar for All Users', 'ideal'),
            'desc' => esc_html__('If you want to Enable it for all users, then simply switch to Show ', 'ideal'),
        ),
        //------------Disable Emojis in WordPress for Better Speed
        array(
            'id' => 'switch-emojis-wp',
            'type' => 'switch',
            'on' => esc_html__('Disable', 'ideal'),
            'off' => esc_html__('Enable', 'ideal'),
            'default' => 0,
            'title' => esc_html__('Disable Emojis', 'ideal'),
            'subtitle' => esc_html__('Disable Emojis in WordPress for Better Speed', 'ideal'),
            'desc' => '',
        ),
    ),
)
);
