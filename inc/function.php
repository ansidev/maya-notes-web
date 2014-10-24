<?php
/**
* @file: function.php
* @author: ansidev
* @email: ansidev@gmail.com
* @description: Functions for application.
*/
function init_general_input($id, $label, $type, $name="", $place_holder, $tab_index, $tooltip="") {
    if($name="") {
      $name=$id;
    }
    echo "\n\t\t\t<div class=\"form-group\">";
    echo "\n\t\t\t\t<label class=\"control-label\" for=\"$id\">$label</label>";
    echo "\n\t\t\t\t<input type=\"$type\" required class=\"form-control\" id=\"$id\" name=\"$name\" placeholder=\"$place_holder\" tabindex=\"$tab_index\">";
    echo "\n\t\t\t\t<span style=\"display: none;\"></span>"; //validate icon
    echo "\n\t\t\t\t<span id=\"$type-tooltip\" style=\"display: none;\" >$tooltip</span>"; //validate tooltip
    echo "\n\t\t\t</div>";
}
?>
