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
    $album = $_GET['album_id_too'];

    $album_query_1 = "select * from albums where id = '{$album}' limit 1";
    $album_query_1_result = mysql_query($album_query_1);
    $album_no = mysql_fetch_array($album_query_1_result);
    $needed_id = $album_no['no_of_pictures'] - 1;
    $album_query_2 = mysql_query("update albums set no_of_pictures = '{$needed_id}' where id = {$album}");

    $query = "delete from pictures where id = {$id} LIMIT 1";

    $result = mysql_query($query);

    if(isset($result)){
        redirect_to("../pictures.php");
    }
}else{
}


?>