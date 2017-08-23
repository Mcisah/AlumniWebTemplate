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


if(isset($_POST['Album']) && $_POST['Album'] != ''){
    $title = mysql_prep($_POST['Album']);
    $no_pics = "0";
    $date = date('d/m/Y');
    $id = $_GET['id'];

    $query = "update albums set name = '{$title}' where id = '{$id}'";
    $result = mysql_query($query);

    if(isset($result)){
        redirect_to("../album.php");
    }
}else{
    $title = '';
    $no_pics = '';
    $date = '';
    $id = $_GET['id'];
    redirect_to("../edit_album.php?id={$id}");
}