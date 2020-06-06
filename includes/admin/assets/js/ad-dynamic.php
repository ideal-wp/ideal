<?php

header("Content-type: text/javascript; charset: UTF-8");

$ideal_options           = get_ideal_theme_options();

$id_primary      =  $ideal_options['id-primary-color'];
$id_secondary    =  $ideal_options['id-secondary-color'];
$id_sub_color    =  $ideal_options['id-sub-additional-color'];
$id_sub_plus     =  $ideal_options['id-sub-plus-color'];



?>
jQuery(document).ready(function($){
"use strict";
var myOptions = {

    defaultColor: false,
    change: function(event, ui){},
    clear: function() {},
    hide: true,
    palettes: [
    '<?php echo $id_primary; ?>',
    '<?php echo $id_secondary; ?>',
    '<?php echo $id_sub_color; ?>',
    '<?php echo $id_sub_plus; ?>',
    '#ffffff',
    '#000000',
    
    ]
    };

  $('.idela-meta-color-field').wpColorPicker(myOptions);
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
    '<?php echo $id_primary; ?>',
    '<?php echo $id_secondary; ?>',
    '<?php echo $id_sub_color; ?>',
    '<?php echo $id_sub_plus; ?>',
    '#ffffff',
    '#000000',
    ]
    };

  jQuery.lib.libColorPicker.prototype.options = {
    palettes: [
    '<?php echo $id_primary; ?>',
    '<?php echo $id_secondary; ?>',
    '<?php echo $id_sub_color; ?>',
    '<?php echo $id_sub_plus; ?>',
    '#ffffff',
    '#000000',
    ]
    };

});