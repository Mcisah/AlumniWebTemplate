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


if(isset($_POST['Title']) && isset($_POST['Summary']) && isset($_POST['Body']) && $_POST['Title'] != '' && $_POST['Summary'] != '' && $_POST['Body'] != ''){
    $title = mysql_prep($_POST['Title']);
    $summary = mysql_prep($_POST['Summary']);
    $cover = addslashes(file_get_contents($_FILES['Cover']['tmp_name']));
    $cover_name = $_FILES['Cover']['name'];
    $body = mysql_prep($_POST['Body']);
    $date = date('d/m/Y');
    $time = date('H:i');

    $query = "insert into news(title, body, cover_image, date, summary, time, cover_name) values('{$title}', '{$body}', '{$cover}', '{$date}', '{$summary}', '{$time}', '{$cover_name}')";
    $result = mysql_query($query);

    if(isset($result)){
        redirect_to("../news.php");
    }
}else{
    $title = '';
    $summary = '';
    $cover = '';
    $body = '';
    $date = '';
    $time = '';
    $cover_name = '';
    redirect_to("../add_news.php");
}