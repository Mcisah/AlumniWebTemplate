<?php
/**
 * Copyright (c) 2016. McIsah Co.
 * This is a project from the McIsah Co. Company.
 * With All Rights Reserved.
 */

session_start(); ?>
<?php
/**
 * Copyright (c) 2016. McIsah Co.
 * This is a project from the McIsah Co. Company.
 * With All Rights Reserved.
 */

/**
 * Created by PhpStorm.
 * User: michaelisah
 * Date: 5/3/16
 * Time: 1:23 AM
 */
include_once ('../../others/connect.php');
include_once ('../../others/funcs.php');
if(!isset($_SESSION['user_id']) && !isset($_SESSION['username'])){
    redirect_to('index.php');
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "delete from news_letter where id = {$id} LIMIT 1";

    $result = mysql_query($query);

    if(isset($result)){
        redirect_to("../newsletter_registered.php");
    }
}else{
}


?>