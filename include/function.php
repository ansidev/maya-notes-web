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

//generate a random string with input length
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

//validate email address
function validateEmail($email) {
    return preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", filter_var($email, FILTER_VALIDATE_EMAIL));
}

function validateUsername($username) {
    if($username == 'root' || $username == 'admin' || $username == 'administrator') {
        return false;
    }
    else {
        return preg_match('/^[0-9a-z_]{6,}$/',$username);
    }
}

function validatePassword($password) {

}
?>
