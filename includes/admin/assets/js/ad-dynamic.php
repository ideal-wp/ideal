<?php
header("Content-type: text/javascript; charset: UTF-8");

 $ideal_primary   = '#3c40c6';
 $ideal_secondary = '#f53b57';
 $ideal_sub_color = '#0fbcf9';
 $ideal_sub_plus  = '#05c46b';


$ideal_core_theme_options           = get_option('ideal_options_control');

if(! empty($ideal_core_theme_options['id_primary_color'])){
$ideal_primary      =  $ideal_core_theme_options['id_primary_color'];
}if(! empty($ideal_core_theme_options['id_secondary_color'])){
$ideal_secondary    =  $ideal_core_theme_options['id_secondary_color'];
}if(! empty($ideal_core_theme_options['id_sub_additional_color'])){
$ideal_sub_color    =  $ideal_core_theme_options['id_sub_additional_color'];
}if(! empty($ideal_core_theme_options['id_sub_plus_color'])){
$ideal_sub_plus     =  $ideal_core_theme_options['id_sub_plus_color'];
}



 echo ' jQuery(document).ready(function($){
      $.wp.wpColorPicker.prototype.options = {
        defaultColor: false,
        hide: true,
        width: 250,
        border: true,
        palettes: [
        "'.$ideal_primary .'",
        "'.$ideal_secondary.'",
        "'. $ideal_sub_color.'",
        "'. $ideal_sub_plus .'",
        "#ffffff",
        "#000000",
        ]
        }
   });

';



if(class_exists('Ideal_Core')){

      echo ' jQuery(document).ready(function($){

        var idealColorOptions = {
          defaultColor: false,
          change: function(event, ui){},
          clear: function() {},
          hide: true,
          palettes: [
          "'.  $ideal_primary .'",
          "'. $ideal_secondary.'",
          "'. $ideal_sub_color.'",
          "'.  $ideal_sub_plus.'",
          " #ffffff",
          "#000000",
            ]
        };

    $(".idela-meta-color-field").wpColorPicker(idealColorOptions);

    var idealColorAlfaOptions = {

    defaultColor: false,
    change: function(event, ui){},
    clear: function() {},
    hide: true,
    palettes: [
    "'.  $ideal_primary .'",
    "'. $ideal_secondary.'",
    "'. $ideal_sub_color.'",
    "'.  $ideal_sub_plus.'",
    " #ffffff",
    "#000000",
    
    ]
    };

    $(".idela-meta-color-alfa-field").wpColorPicker(idealColorAlfaOptions);
    
});

    ';
}