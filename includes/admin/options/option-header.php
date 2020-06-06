<?php
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/*
* START SECTIONS
*/
Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Menu Header', 'ideal' ),
  'id'               => 'menu-header-general',
  'icon'             => 'el el-lines ',
  'customizer_width' => '450px',
  'desc'             => esc_html__('Header Content & Layout - Controls the position of the Header Content.', 'ideal'),
));

Redux::setSection( $opt_name, array(
  'subsection'       => true,
  'title'            => esc_html__( 'Menu Layout Controls', 'ideal' ),
  'id'               => 'header-general-settings',
  'icon'             => 'el el-lines ',
  'customizer_width' => '450px',
  'desc'             => esc_html__('Header Content & Layout - Controls the position of the Header Content.', 'ideal'),
  'fields'           => array(
          array(
            'id'       => 'full-width-h',
            'type'     => 'switch', 
            'title'    => esc_html__('Full Width Header', 'ideal'),
            'on'       => esc_html__( 'Enable' , 'ideal' ),
            'off'      => esc_html__( 'Disable' , 'ideal' ),
            'subtitle' => '',
            'default'  => false,
            ),
            //------------End field Full Width Header
          array(
          'id'       => 'header-layout',
          'type'     => 'image_select',
          'title'    => esc_html__('Layout Controls', 'ideal'), 
          'subtitle' => esc_html__('Controls the general layout of the header.', 'ideal'),
          'options'  => array(
                  '1'      => array(
          'alt'   => 'menu item left', 
          'img'   => IDEAL_THEME_DIR_URI.'/includes/admin/assets/img/menu/1.jpg' 
          ),
                  '2'      => array(
          'alt'   => 'menu item center', 
          'img'   => IDEAL_THEME_DIR_URI.'/includes/admin/assets/img/menu/2.jpg' 
          ),
                  '3'      => array(
          'alt'    => 'Logo center', 
          'img'    =>IDEAL_THEME_DIR_URI.'/includes/admin/assets/img/menu/3.jpg' 
          ),
                  '4'      => array(
          'alt'   => 'menu item right', 
          'img'   => IDEAL_THEME_DIR_URI.'/includes/admin/assets/img/menu/4.jpg' 
          ),
                  '5'      => array(
          'alt'   => 'menu offcanvs', 
          'img'   => IDEAL_THEME_DIR_URI.'/includes/admin/assets/img/menu/5.jpg' 
          ),
                  '6'      => array(
          'alt'  => 'No Heder', 
          'img'  => ReduxFramework::$_url.'assets/img/3cr.png'
          )
        ),
        'default' => '2'

        ),
  //------------End field Layout Controls
    
    
    )
  ) 
); 
//==============================[ subsection Logo ]==========================

Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Logo', 'ideal' ),
  'id'               => 'header-settings-logo',
  'subsection'       => true,
  'icon'             =>  'el el-picture',
  'fields'           => array(
    
    array(
      'id' => 'logo-img-menu',
      'type' => 'switch',
      'on'       => esc_html__( 'Enable' , 'ideal' ),
      'off'      => esc_html__( 'Disable' , 'ideal' ),
      'title' => esc_html__('Use Image for Logo', 'ideal'), 
      'subtitle' => esc_html__('Enable it if you want tou use image logo if it Disable theme will use your site name from site  site name', 'ideal'),
      'desc' => '',
      'default' => '0' 
    ),

    array(
      'id' => 'logo-font-no-img',
      'type' => 'typography',
      'required' => array(
        array(
            'logo-img-menu',
            'equals',
            '0'
        )
      ),
      'title' => esc_html__( 'Logo Text Font' , 'ideal' ),
      'subtitle' => esc_html__( 'Select the Logo Text Font' , 'ideal' ),
      'font-style' => true,
      'font-weight' => true,
      'font-size' => true,
      'font-family' => true,
      'line-height' => true,
      'letter-spacing' => true,
      'text-transform' => true,
      'all_styles' => true,
      'default'     => array(
                  'color'       => '#333', 
                  'font-style'  => '700', 
                  'font-family' => 'Abel', 
                  'google'      => true,
                  'font-size'   => '14px', 
                  'line-height' => '18'
                  )
      
      ),
    
    //------------End field Use Image for Logo
      array(
        'id' => 'header-s-logo',
        'type' => 'media',
        'url'      => true, 
        'title' => esc_html__('Upload a site logo', 'ideal'), 
        'subtitle' => esc_html__('You can upload a logo image to appear in place of your site title', 'ideal'),
        'desc' => '' ,
        'required' => array( 'logo-img-menu', '=', '1' ),
        'default'  => array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png')
        
      ),

      array(
          'id' => 'logo-ss-height',
          'type' => 'dimensions',
          'required' => array(
            array(
                'logo-img-menu',
                'equals',
                '1'
            )
          ),
          'mode'     => array(
            'width'    => false,
            'height' => true,
              ),
            'width'    => false,
            'height' => true,
          'title' => esc_html__( 'Logo Height' , 'ideal' ),
          'units' => 'px',
          'units_extended'	=>false,
          'default'  =>array(
            'height'  => '35',
            ),
      ),
    //------------End field Upload a site logo
    array(
      'id' => 'mobile-s-logo',
      'type' => 'media',
      'title' => esc_html__('Mobile Logo Upload', 'ideal'), 
      'subtitle' => esc_html__('chose mobile devices logo', 'ideal'),
      'desc' =>  '' ,
      'required' => array( 'logo-img-menu', '=', '1' ),
    ),
    //------------End field Mobile Logo Upload
    )
  )
);
//==============================[ subsection Styling ]==========================
Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Menu Styling', 'ideal' ),
  'id'               => 'menu-settings-styling',
  'subsection'       => true,
  'icon'             =>  'el el-star-empty',
  'fields'           => array(
    
      array(
        'id' => 'nav-ideal-height',
        'type' => 'dimensions',
        'mode'     => array(
          'width'    => false,
          'height' => true,
            ),
          'width'    => false,
          'height' => true,
        'title' => esc_html__( 'Header Height' , 'ideal' ),
        'units' => 'px',
        'units_extended'	=>false,
        'default'  =>array(
          'height'  => '80',
          ),
    ),

    array(
                
          'id'       => 'header-m-b-color',
          'type'     => 'background',
          'background-repeat' => false,
          'background-attachment' => false,
          'background-position' => false,
          'background-image' => false,
          'background-size' => false,
          'preview_height' => '40px',
          'title'       => esc_html__('Choose a background color for menu', 'ideal'), 
          'subtitle'    => esc_html__('Pick a background color for the header menu .', 'ideal'),
          'default' => array(
          'background-color' => '#fff',
          ),
          'transparent'=> false,
          
        ),
        //------------End field background color for menu


      array(
          'id'       => 'header-shadow-b',
          'type'     => 'select',
          'title'    => esc_html__('Select Header Box Shadow', 'ideal'), 
          'subtitle' => esc_html__('Please select your header box shadow here.', 'ideal'),
          // Must provide key => value pairs for select options
          'options'  => array(
              'smal'      => 'Smal',
              'larg'      => 'Larg',
              'NO' => 'NO Shadow'
          ),
          'default'  => 'Smal',
        ), 

      array(
          'id' => 'header-font-f',
          'type' => 'typography',
          'title' => esc_html__( 'Navigation & Header Font' , 'ideal' ),
          'subtitle' => esc_html__( 'Select the properties of the navigation & Header Font' , 'ideal' ),
          'font-style' => true,
          'font-weight' => true,
          'font-size' => true,
          'font-family' => true,
          'line-height' => true,
          'letter-spacing' => true,
          'text-transform' => true,
          'all_styles' => true,
          'default'     => array(
                      'color'       => '#333', 
                      'font-style'  => '700', 
                      'font-family' => 'Abel', 
                      'google'      => true,
                      'font-size'   => '14px', 
                      'line-height' => '18'
                      )
      ),
      //------------End field Navigation & Header Font
      array(
          'id'       => 'under-line-menu',
          'type'     => 'switch',
          'on'       => esc_html__( 'Enable' , 'ideal' ),
          'off'      => esc_html__( 'Disable' , 'ideal' ), 
          'title'    => esc_html__('Underline animation on hover', 'ideal'),
          'subtitle' => '',
          'default'  => false,
      ),
      //------------End field Navigation Underline animation
      array(
        'id' => 'menu-header-link-hover',
        'type' => 'link_color',
        'transparent'   => false,
        'title' => esc_html__( 'Header Link Hover color' , 'ideal' ),
        'default'  => array(
          'regular'  => false,
            'hover'    => '#1e87f0', 
            'active'   => '#1e87f0',  
            'visited'  => '#1e87f0',  
        )
      ) ,
      //------------End field Header Link Hover color
  
  )
) 
);
//==============================[ subsection Mobile Menu ]==========================
Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Mobile Menu', 'ideal' ),
  'desc'             => esc_html__('Controls the Off Canvas Menu & Mobile Menu.', 'ideal'),
  'id'               => 'mobile-settings-canvas',
  'subsection'       => true,
  'icon'             =>  'dashicons dashicons-menu',
  'fields'           => array(
        array(
            'id'       => 'mobile-select-menu',
            'type'     => 'select',
            'title'    => esc_html__('Mobile Menu Style', 'ideal'), 
            'subtitle' => esc_html__('Select Menu Style', 'ideal'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'off-canvas' =>  esc_html__('Off-canvas', 'ideal'),
                'modal'      => esc_html__('Modal', 'ideal'),
            
            ),
            'default'  => 'off-canvas',
          ),//-------------------
          array(
            'id'       => 'mobile-o-c-flip',
            'required' => array(
              array(
                  'mobile-select-menu',
                  '=',
                  'off-canvas'
              )
            ),
            'type'     => 'select',
            'title'    => esc_html__('Open side', 'ideal'), 
            'subtitle' => esc_html__('Flip off-canvas to the ...? side.', 'ideal'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'right'     => esc_html__('Right', 'ideal'),
                'left'      => esc_html__('Left', 'ideal'),
            
            ),
            'default'  => 'right',
          ),//-------------------
          array(
            'id'       => 'mobile-o-c-modes',
            'type'     => 'select',
            'required' => array(
              array(
                'mobile-select-menu','=','off-canvas'
              )
            ),
            'title'    => esc_html__('Off-canvas Animation modes', 'ideal'), 
            'subtitle' => esc_html__('Select Off-canvas Animation Style', 'ideal'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'slide'     => esc_html__('Slide', 'ideal'),
                'push'      => esc_html__('Push', 'ideal'),
                'reveal'    => esc_html__('reveal', 'ideal'),
                'none'      => esc_html__('none', 'ideal'),
            
            ),
            'default'  => 'none',
          ),//-------------------

          array(
              'id'       => 'off-canvas-b-color',
              'type'     => 'color',
              'required' => array(
                array(
                  'mobile-select-menu','=','off-canvas'
                )
              ),
              'title'    => esc_html__('Off-canvas Background Color', 'ideal'), 
              'default'  => '#FFFFFF',
              'validate' => 'color',
              'transparent'=> false,       
          ),
          array(
            'id'       => 'off-canvas-overlay-color',
            'type'     => 'color_rgba',
            'required' => array(
              array(
                'mobile-select-menu','=','off-canvas'
              )
            ),
            'max_palette_size'=>10,
            'show_input'=>true,
            'palette' => array(
              array("#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"),
              ),  
            'title'    => esc_html__('Off-canvas Overlay Background Color', 'ideal'), 
            'default'  => 'rgba(255, 255, 255, 0.68)',
            ),//=============================
          array(
            'type' => 'typography',
            'id'       => 'font-offcanvas',
            'title' => __( 'Off-canvas font' , 'ideal' ),
            'required' => array(
              array(
                'mobile-select-menu','=','off-canvas'
              )
            ),
            'font-backup' => true,
            'google'      => true,
            'font-style' => true,
            'font-weight' => true,
            'font-size' => true,
            'font-family' => true,
            'line-height' => true,
            'word-spacing' => false,
            'letter-spacing' => true,
            'text-align' => true,
            'text-transform' => true,
            'font_family_clear' => true,
            'default'     => array(
              'color'       => '#333', 
              'font-style'  => '700', 
              'font-family' => 'Abel', 
              'google'      => true,
              'font-size'   => '14px', 
              'line-height' => '18'
              
              )

          ), 
        //-----------------------
    )
  ) 
);
//==============================[ subsection Header Effect ]==========================
Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Effects & Animation', 'ideal' ),
  'desc'             => esc_html__('Header Effects & Animation Menu Styling - Controls the position of the Header Content.', 'ideal'),
  'id'               => 'effects-settings-styling',
  'subsection'       => true,
  'icon'             =>  'el el-magic',
  'fields'           => array(
    array(
      'id'       => 'reveal-header',
      'type'     => 'switch',
      'on'       => esc_html__( 'Enable' , 'ideal' ),
      'off'      => esc_html__( 'Disable' , 'ideal' ),
      'title'    => esc_html__('Reveal Header on Scroll', 'ideal'), 
      'subtitle' => esc_html__('hide header & show header when start to scroll back up', 'ideal'),
      'desc' => '',
      'default' => '0' 
    ),
      //------------End field 
    array(
      'id'         => 'sticky-header',
      'type'       => 'switch',
      'on'       => esc_html__( 'Enable' , 'ideal' ),
      'off'      => esc_html__( 'Disable' , 'ideal' ),
      'required'   => array('reveal-header','equals','0'),
      'title'      => esc_html__('Sticky Navbar', 'ideal'), 
      'subtitle'   => esc_html__(' always remain Navbar to be at the top of the screen even when scrolling down the page.', 'ideal'),
      'desc'       => '',
      'default'    => '0' 
    ),
    //------------End field Transparent Sticky Navbar 
    array(
      'id'         => 'transparent-header',
      'type'       => 'switch',
      'on'       => esc_html__( 'Enable' , 'ideal' ),
      'off'      => esc_html__( 'Disable' , 'ideal' ),
      'title'      => esc_html__(' Transparent Header', 'ideal'), 
      'subtitle'   => esc_html__(' When using an image or colored background for the hero section of your website, you might want to turn the navbar transparent. Just swich it to Transparent Navbar and also you can control it from page or force it.', 'ideal'),
      'desc'       => '',
      'default'    => '0' 
    ),//--------
    array(
      'id'       => 'select-header-mod',
      'type'     => 'select',
      'title'    => esc_html__('Color mode options for Transparent Header ', 'redux-framework-demo'), 
      'subtitle' => esc_html__('Select Option the light option to improve the visibility of objects on dark backgrounds in a light style. When using a dark style, Select the . option dark to elements on a light background.', 'ideal'),
      'desc'     => '',
      'options'  => array(
                    "uk-light" => esc_html__('Light','ideal'),
                    "uk-dark"  => esc_html__('Dark','ideal'),
                    ),
      'default'  => 'uk-dark',
    ),//---------
    array(
      'id'       => 'navbar-light-color-moode',
      'type'     => 'color',
      'title'    => esc_html__('Choose a Font color for light mood', 'ideal'), 
      'subtitle' => '',
      'default'  => '#fff',
      'validate' => 'color',
      'transparent'=> false,
  
    ),
    array(
      'id'       => 'navbar-dark-color-moode',
      'type'     => 'color',
      'title'    => esc_html__('Choose a Font color for dark mood', 'ideal'), 
      'subtitle' => '',
      'default'  => '#333',
      'validate' => 'color',
      'transparent'=> false,
  
    ),
    array(
      'id' => 'header-t-logo-light-kmod',
      'type' => 'media',
      'url'      => true, 
      'title' => esc_html__('Upload a site logo for Transparent Header in light mode', 'ideal'), 
      'desc' => '' ,
      'required' => array( 'logo-img-menu', '=', '1' ),
      'default'  => array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png')
      
    ),//----
    array(
      'id' => 'header-t-logo-dark-kmod',
      'type' => 'media',
      'url'      => true, 
      'title' => esc_html__('Upload a site logo for Transparent Header in dark mode', 'ideal'), 
      'desc' => '' ,
      'required' => array( 'logo-img-menu', '=', '1' ),
      'default'  => array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png')
      
    ),
    
    //-----
    
              

  )
  ) 
);
//=================[ subsection Navbar / userbar ]===================================

Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Top Navbar / user navbar', 'ideal' ),
  'id'               => 'user-nav-option',
  'subsection'       => true,
  'icon'             =>  'el el-minus',
  'fields'           => array(
      array(
        'id'       => 'user-nav',
        'type'     => 'switch',
        'default'  => '0',
        'on'       => esc_html__( 'Enable' , 'ideal' ),
        'off'      => esc_html__( 'Disable' , 'ideal' ),
        'title'    => esc_html__('Enable user top Navbar', 'ideal'), 
        'subtitle' => esc_html__('show / hide user navbar. ', 'ideal'),
        'desc'     => '',
        
      ),
      //------------End field Header Enaple user top Navbar
      array(
        
        'id'       => 'navbar-b-color',
        'type'     => 'background',
        'required' => array('user-nav','=','1'),
        'background-repeat' => false,
        'background-attachment' => false,
        'background-position' => false,
        'background-image' => false,
        'background-size' => false,
        'preview_height' => '40px',
        'output'      => array('.user-nav'),
        'title'       => esc_html__('Choose a background color for top nav', 'ideal'), 
        'subtitle'    => esc_html__('Pick a background color for the user navbar (default: #333).', 'ideal'),
        'default' => array(
          'background-color' => '#333',
        ),
        'transparent'=> false,
        
      ),
      //------------End field
      array(
        'id'       => 'navbar-f-color',
        'type'     => 'color',
        'required' => array('user-nav','=','1'),
        'output'      => array('.user-nav .uk-navbar-item'),
        'title'    => esc_html__('Choose a Font color for top nav', 'ideal'), 
        'subtitle' => esc_html__('Pick a Font color for the user navbar (default: #fff).','ideal'),
        'default'  => '#fff',
        'validate' => 'color',
        'transparent'=> false,
    
      ),
      //------------End field
      array(
        'id'            => 'link-b-color',
        'type'          => 'link_color',
        'required' => array('user-nav','=','1'),
        'transparent'   => false,
        'output'      => array('.user-nav .uk-icon-link'),
        'title'         => esc_html__( 'Link Color' , 'ideal' ),
        'subtitle'      => esc_html__( 'Controls the color of text links in top navbar.','ideal' ),
        'desc'          => '',
        'default'  => array(
          'regular'  => false, // blue
          'hover'    => '#dd3333', // red
          'active'   => '#8224e3',  // purple
          'visited'  => '#8224e3',  // purple
                    )
      ),
              //------------End field


  )
  ) 
);
//===========================[ subsection Header Search and Icon]===============
Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Search & Icon', 'ideal' ),
  'desc'             => esc_html__('Controls the Header Search and Icon.', 'ideal'),
  'id'               => 'header-search-icon',
  'subsection'       => true,
  'icon'             =>  'el el-search',
  'fields'           => array(

    array(
      'id'       => 'search-icon-nav',
      'type'     => 'switch',
      'default'  => '1',
      'on'       => esc_html__( 'Enable' , 'ideal' ),
      'off'      => esc_html__( 'Disable' , 'ideal' ),
      'title'    => esc_html__('Enable Search icon in Navbar', 'ideal'), 
      'desc'     => '',
      
    ),
    array(
      'id'       => 'shearch-nav-mod',
      'type'     => 'select',
      'required' => array(
        array(
            'search-icon-nav',
            '=',
            '1'
        )),
      'title'    => esc_html__('Select Search Header Stayle', 'ideal'), 
      'subtitle' => esc_html__('Please select Search Header Stayle here.', 'ideal'),
      // Must provide key => value pairs for select options
      'options'  => array(
          'overlay'     => 'Overlay ',
          'dropdown'    => 'Dropdown',
          'modal'       => 'Modal'
      ),
      'default'  => 'overlay',
    ), 

    //--------------
    )
  ) 
);
//==========================[ /subsection Header Search and Icon ]====================