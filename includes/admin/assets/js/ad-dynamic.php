<?php

header("Content-type: text/javascript; charset: UTF-8");

 if(!class_exists('Kriki')){
   return;
 }
$ideal_options           = get_ideal_theme_options();

$id_primary      =  $ideal_options['id_primary_color'];
$id_secondary    =  $ideal_options['id_secondary_color'];
$id_sub_color    =  $ideal_options['id_sub_additional_color'];
$id_sub_plus     =  $ideal_options['id_sub_plus_color'];




 echo ' jQuery(document).ready(function($){
"use strict";
var myOptions = {

    defaultColor: false,
    change: function(event, ui){},
    clear: function() {},
    hide: true,
    palettes: [
    "'.  $id_primary .'",
    "'. $id_secondary.'",
    "'. $id_sub_color.'",
    "'.  $id_sub_plus.'",
   " #ffffff",
    "#000000",
    
    ]
    };

  $(".idela-meta-color-field").wpColorPicker(myOptions);
});
jQuery(document).ready(function(){

  "use strict";
  jQuery.wp.wpColorPicker.prototype.options = {
    defaultColor: false,
    clear: function() {},
    change: function(event, ui){},
    hide: true,
    width: 250,
    border: true,
    palettes: [
    "'.$id_primary .'",
    "'.$id_secondary.'",
    "'. $id_sub_color.'",
    "'. $id_sub_plus .'",
   " #ffffff",
    "#000000",
    ]
    };

  jQuery.lib.libColorPicker.prototype.options = {
    palettes: [
    "'. $id_primary .'",
    "'. $id_secondary .'",
   " '. $id_sub_color .'",
    "'. $id_sub_plus .'",
   " #ffffff",
   " #000000",
    ]
    };

});
';
