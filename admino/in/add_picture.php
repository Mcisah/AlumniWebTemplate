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

    $album_query_1 = "select * from albums where id = '{$album}' limit 1";
    $album_query_1_result = mysql_query($album_query_1);
    $album_no = mysql_fetch_array($album_query_1_result);
    $needed_id = $album_no['no_of_pictures'] + 1;
    $album_query_2 = mysql_query("update albums set no_of_pictures = '{$needed_id}' where id = {$album}");


    $query = "insert into pictures(name, date, album_id, picture, picture_name) values('{$title}', '{$date}', '{$album}', '{$picture}', '{$picture_name}')";
    $result = mysql_query($query);

    if(isset($result)){
        redirect_to("../pictures.php");
    }
}else{
    $album = '';
    $title = '';
    $picture = '';
    $date = '';
    redirect_to("../add_picture.php");
}