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


if(isset($_POST['Album']) && isset($_POST['Title']) && $_POST['Album'] != '' && $_POST['Title'] != ''){
    $album = mysql_prep($_POST['Album']);
    $title = mysql_prep($_POST['Title']);
    $picture = addslashes(file_get_contents($_FILES['Picture']['tmp_name']));
    $picture_name = $_FILES['Picture']['name'];
    $date = date('d/m/Y');
    $id = $_GET['id'];
    

    if($_FILES['Picture']['tmp_name'] != NULL){
        $query = "update pictures set name = '{$title}', date = '{$date}', album_id= '{$album}', picture = '{$picture}', picture_name = '{$picture_name}' where id = '{$id}'";
    }else {
        $query = "update pictures set name = '{$title}', date = '{$date}', album_id= '{$album}' where id = '{$id}'";
    }

    $result = mysql_query($query);

    if(isset($result)){
        redirect_to("../pictures.php");
    }
}else{
    $album = '';
    $title = '';
    $picture = '';
    $date = '';
    $id = $_GET['id'];

    redirect_to("../edit_picture.php?id={$id}");
}