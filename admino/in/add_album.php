<?php
/**
 * Copyright (c) 2016. McIsah Co.
 * This is a project from the McIsah Co. Company.
 * With All Rights Reserved.
 */

/**
 * Created by PhpStorm.
 * User: michaelisah
 * Date: 5/2/16
 * Time: 7:48 PM
 */

include_once ('../../others/connect.php');
include_once ('../../others/funcs.php');

// REMEMBER THAT KEY ID = 1 IS RESERVED FOR ALL ALBUMS.

if(isset($_POST['Album']) && $_POST['Album'] != ''){
    $title = mysql_prep($_POST['Album']);
    $no_pics = 0;
    $date = date('d/m/Y');

    $query = "insert into albums(name, date, no_of_pictures) values('{$title}', '{$date}', '{$no_pics}')";
    $result = mysql_query($query);

    if(isset($result)){
        redirect_to("../album.php");
    }
}else{
    $title = '';
    $no_pics = '';
    $date = '';
    redirect_to("../add_album.php");
}