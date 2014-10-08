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
	echo "<div class=\"form-group\">";
	echo "<label class=\"control-label\" for=\"$id\">$label</label>";
	echo "<input type=\"$type\" required class=\"form-control\" id=\"$id\" name=\"$name\" placeholder=\"$place_holder\" tabindex=\"$tab_index\">";
	echo "<span style=\"display: none;\"></span>"; //validate icon
	echo "<span id=\"$type-tooltip\" style=\"display: none;\" >$tooltip</span>"; //validate tooltip
	echo "</div>";
}
?>
