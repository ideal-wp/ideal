<?php
/*
*
* START SECTIONS PAGE HEADER OPTIONS
*
*/
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Page Header', 'ideal' ),
  'id'               => 'page-header-general',
  'icon'             => 'el el-website ',
  'customizer_width' => '450px',
  'desc'             => esc_html__('Global Page Header Options', 'ideal'),
)
);

Redux::setSection( $opt_name, array(
  'subsection'       => true,
  'title'            => esc_html__( 'Page Header', 'ideal' ),
  'id'               => 'page-header-general-settings',
  'icon'             => 'el el-website ',
  'customizer_width' => '450px',
  'desc'             => esc_html__('Global Page Header Options', 'ideal'),
  'fields'           => array(
        array(
            'id'       => 'switch-page-header',
            'type'     => 'switch',
            'on'       => esc_html__( 'Enable' , 'ideal' ),
            'off'      => esc_html__( 'Disable' , 'ideal' ),
            'title'    => esc_html__( ' Enable Page Header' , 'ideal' ),
            'subtitle' => esc_html__( 'Welcome to our' , 'ideal' ),
            'desc'     => esc_html__( 'test swech' , 'ideal' ),
            'defult'   => 0,
        ),
        
        
    
  )
  
) );
//========== [ subsection single post  Header Settings ]======================
Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Single Post', 'ideal' ),
  'id'               => 'blog-header-general-settings',
  'subsection'       => true,
  'icon'             => 'el el-edit ',
  'customizer_width' => '450px',
  'desc'             => esc_html__('Global Page Header Options', 'ideal'),
  'fields'           => array(
        array(
            'id'       => 'switch-blog-header',
            'type'     => 'switch',
            'title'    => esc_html__( ' Blog Header ' , 'ideal' ),
            'subtitle' => esc_html__( 'Enable Blog Header' , 'ideal' ),
            'desc'     => '',
            'on'       => esc_html__( 'Enable' , 'ideal' ),
            'off'      => esc_html__( 'Disable' , 'ideal' ),
            'default'   => 1,
        ),//-----switch-blog-header
        array(
          'id'       => 'switch-to-background',
          'type'     => 'switch',
          'title'    => esc_html__( ' Header Background ' , 'ideal' ),
          'subtitle' => esc_html__( 'if you enable it will write overall blog post header background' , 'ideal' ),
          'desc'     =>'',
          'on'       => esc_html__( 'Enable' , 'ideal' ),
          'off'      => esc_html__( 'Disable' , 'ideal' ),
          'default'   => 0,
        ),//-------switch-to-background
      array(
        'id'           => 's-post-header-bg',
        'type'         => 'background',
        'title'        =>esc_html__( 'Chose Background' , 'ideal' ),
        'subtitle'     => esc_html__( 'Choose and adjust the settings as appropriate for you' , 'ideal' ),
        'output_variables' => true,
        'transparent'      =>false,
        'required' => array(
            array(
                'switch-to-background',
                '=',
                '1'
            )
        ),
        'preview_media' => true,
        'default'   => array(
          'background-color	'      =>'#1e87f0',
        ),


      ), //-------s-post-header-bg

      array(
          'id'       => 'post-header-hight',
          'type'     => 'spacing',
          'mode'    => 'padding',
          'right'    => false, 
          'left' => false, 
          'units'    => 'px' ,
          'title'    => esc_html__( 'Blog Header Padding' , 'ideal' ),
          'subtitle' => esc_html__( 'Choose and adjust the default Blog header padding Top & Bottom' , 'ideal' ),
          'default'  =>array(
            'top'    => '70px', 
            'bottom' => '70px', 
            ),
          ),//-------post-header-hight
          array(
            'id'       => 'post-img-background',
            'type'     => 'switch',
            'title'    => esc_html__( ' Featured images Header Background ' , 'ideal' ),
            'subtitle' => esc_html__( 'if you enable it will add post featured image as background' , 'ideal' ),
            'desc'     =>'',
            'on'       => esc_html__( 'Enable' , 'ideal' ),
            'off'      => esc_html__( 'Disable' , 'ideal' ),
            'default'   => 1,
        ),//-------switch-to-background
                array(
                  'id'        => 'blog-color-rgba-header-overlay',
                  'type'      => 'color_rgba',
                  'title'     => esc_html__( 'Blog Header overlay Color' , 'ideal' ),
                  'subtitle'  => '',
                  'desc'      => '',
              
            // See Notes below about these lines.
            //'output'    => array('background-color' => '.site-header'),
            //'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
            'default'   => array(
                'rgba'     => 'rgba(0, 0, 0, 0.5)',
                
            ),
        
            // These options display a fully functional color palette.  Omit this argument
            // for the minimal color picker, and change as desired.
            'options'       => array(
                'show_input'                => true,
                'show_initial'              => true,
                'show_alpha'                => true,
                'show_palette'              => true,
                'show_palette_only'         => false,
                'show_selection_palette'    => true,
                'max_palette_size'          => 10,
                'allow_empty'               => true,
                'clickout_fires_change'     => false,
                'choose_text'               => 'Choose',
                'cancel_text'               => 'Cancel',
                'show_buttons'              => true,
                'use_extended_classes'      => true,
                'palette'                   => null,  // show default
                'input_text'                => 'Select Color'
            ),                        
        ),
        
        
      array(
          'id'       => 'header-text-color',
          'type'     => 'color',
          'transparent'      =>false,
          'title'    => esc_html__('Blog Header general Text Color', 'ideal'), 
          'default'  => '#FFF',
          'validate' => 'color',
      ),//-------#Blog Header general Text Color
      array(
        'id'          => 'blog-header-font',
        'type'        => 'typography', 
        'title'       => esc_html__('Post title Font option', 'ideal'),
        'class'       => 'ideal-border-r',
        'font-backup' => false,
        'word-spacing' =>true,
        'google' => true,
        'letter-spacing' => true,
          'text-transform' => true,
        'units'       =>'px',
        'subtitle'    => '',
        'default'     => array(
            'color'       => '#fff', 
            'font-style'  => '700', 
            'font-family' => 'Roboto', 
            'google'      => true,
            'font-size'   => '42px', 
            'line-height' => '55'
            )
      ),//-----------------------


        
        
    
  )
  
) );

//========== [ subsection Archives Page Header Settings ]======================

Redux::setSection( $opt_name, array(
  'subsection'       => true,
  'title'            => esc_html__( 'Archives Header', 'ideal' ),
  'id'               => 'archives-header-general-settings',
  'icon'             => 'el el-website ',
  'customizer_width' => '450px',
  'desc'             => esc_html__('Global Page Header Options', 'ideal'),
  'fields'           => array(
        array(
            'id'       => 'id-archives-switch-header',
            'type'     => 'switch',
            
            'on'       => esc_html__( 'Enable' , 'ideal' ),
            'off'      => esc_html__( 'Disable' , 'ideal' ),
            'title'    => esc_html__( ' Enable Archives Header ' , 'ideal' ),
            'subtitle' => '',
            'desc'     => '',
            'default'   => 1,
        ),//----------------------
        array(
          'id'           => 'archives-header-bg',
          'type'         => 'background',
          'title'        =>esc_html__( 'Chose Background' , 'ideal' ),
          'subtitle'     => esc_html__( 'Choose and adjust the settings as appropriate for you' , 'ideal' ),
          'output_variables' => true,
          'transparent'      =>false,
          'preview_media' => true,
          'default'   => array(
            'background-color	'      =>'#1e87f0',
          ),
  
        ),//----------------

        //-----------------------
        array(
          'id'        => 'archives-color-rgba-header-overlay',
          'type'      => 'color_rgba',
          'title'     => esc_html__( 'Archives Header overlay Color' , 'ideal' ),
          'subtitle'  => '',
          'desc'      => '',
      
    // See Notes below about these lines.
    //'output'    => array('background-color' => '.site-header'),
    //'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
        'default'   => array(
            'rgba'     => 'rgba(0, 0, 0, 0.5)',
            
        ),
    
        // These options display a fully functional color palette.  Omit this argument
        // for the minimal color picker, and change as desired.
        'options'       => array(
            'show_input'                => true,
            'show_initial'              => true,
            'show_alpha'                => true,
            'show_palette'              => true,
            'show_palette_only'         => false,
            'show_selection_palette'    => true,
            'max_palette_size'          => 10,
            'allow_empty'               => true,
            'clickout_fires_change'     => false,
            'choose_text'               => 'Choose',
            'cancel_text'               => 'Cancel',
            'show_buttons'              => true,
            'use_extended_classes'      => true,
            'palette'                   => null,  // show default
            'input_text'                => 'Select Color'
          ),                        
    ),//------------------
    
        array(
          'id'          => 'archives-header-font',
          'type'        => 'typography', 
          'title'       => esc_html__('Archives title Font option', 'ideal'),
          'class'       => 'ideal-border-r',
          'font-backup' => false,
          'word-spacing' =>true,
          'google' => true,
          'letter-spacing' => true,
            'text-transform' => true,
          'units'       =>'px',
          'subtitle'    => '',
          'default'     => array(
              'color'       => '#000', 
              'font-style'  => '700', 
              'font-family' => 'Roboto', 
              'google'      => true,
              'font-size'   => '42px', 
              'line-height' => '55'
              )
        ),


        array(
          'id'       => 'archives-header-hight',
          'type'     => 'spacing',
          'mode'    => 'padding',
          'right'    => false, 
          'left' => false, 
          'units'    => 'px' ,
          'title'    => esc_html__( 'Archives Header Padding' , 'ideal' ),
          'subtitle' => esc_html__( 'Choose and adjust the default Archives header padding Top & Bottom' , 'ideal' ),
          'default'  =>array(
            'top'    => '70px', 
            'bottom' => '70px', 
            ),
          ),//-------archives-header-hight
          array(
            'id'       => 'ar-header-text-color',
            'type'     => 'color',
            'transparent'      =>false,
            'title'    => esc_html__('Archives Header general Text Color', 'ideal'), 
            'default'  => '#000',
            'validate' => 'color',
        ),//-------#archives Header general Text Color
        
        
        
    
  )
  
) );