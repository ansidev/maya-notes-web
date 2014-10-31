<?php

require_once 'function.php';

class Site {

    var $site_address;
    var $site_name;

    var $admin_email;


    var $db_host;
    var $db_user;
    var $db_password;
    var $db_name;
    var $db_table;
    var $connection;
    var $rand_key;

    var $error_message;

    //Constructor
    function Site() {
        $this->rand_key = generateRandomString();
    }

    function InitSite($site_addr, $site_name, $email, $db_host, $db_user, $db_pass, $db_name, $db_table) {
        $this->site_address = $site_addr;
        $this->site_name = $site_name;
        $this->admin_email = $email;

        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_password = $db_pass;
        $this->db_name = $db_name;
        $this->db_table = $db_table;
    }

    function InitDB($dbhost, $user, $pwd, $dbname, $dbtable) {
        $this->db_host = $dbhost;
        $this->username = $user;
        $this->password = $pwd;
        $this->db_name = $dbname;
        $this->db_table = $dbtable;
    }

    function SetAdminEmail($email) {
        $this->admin_email = $email;
    }

    function SetWebsiteInfo($siteaddress) {
        $this->site_address = $siteaddress;
        $this->site_name = $siteaddress;
    }

    function InitRandomKey() {
        $this->rand_key = generateRandomString();
    }

    function UserSignUp() {
        if(isset($_POST['su-btn-submit'])) {
            if(isset($_POST['email']) &&
            isset($_POST['username']) &&
            isset($_POST['password']) &&
            isset($_POST['confirm-password']) &&
            isset($_POST['tos-checkbox'])) {
                //Get submitted values
                $email = validateEmail($_POST['email']) ? 1 : 0;
                $user = validateUsername($_POST['username']) ? 1 : 0;
                $password = validatePassword($_POST['password']) ? 1 : 0;
                $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $cf_pass = (password_verify($_POST['confirm-password'],$password_hash)) ? 1 : 0;
                $tos_cb = ($_POST['tos-checkbox'])  ? 1 : 0;
            }
        }
    }
}
?>