<?php
require_once("sql_connect.php");
if (function_exists('sqlite_open')) {
    echo 'Sqlite PHP extension loaded';
}
echo "Hello, world!";
?>
