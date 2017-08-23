<?php session_start(); ?>
<?php
/**
 * Copyright (c) 2016. McIsah Co.
 * This is a project from the McIsah Co. Company.
 * With All Rights Reserved.
 */

/**
 * Created by PhpStorm.
 * User: michaelisah
 * Date: 5/1/16
 * Time: 7:58 PM
 */

include_once ('../others/funcs.php');
 if(isset($_GET['username'])){
    $_SESSION["username"] = $_GET['username'];
    $_SESSION["user_id"] = $_GET['id'];

    redirect_to("home.php");
}else{
}

?>