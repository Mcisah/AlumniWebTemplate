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


if(isset($_POST['Title']) && isset($_POST['Summary']) && isset($_POST['Venue']) && $_POST['Title'] != '' && $_POST['Summary'] != '' && $_POST['Venue'] != ''){
    $title = mysql_prep($_POST['Title']);
    $summary = mysql_prep($_POST['Summary']);
    $location = mysql_prep($_POST['Venue']);
    $day = mysql_prep($_POST['Day']);
    $month = mysql_prep($_POST['Month']);
    $year = mysql_prep($_POST['Year']);
    $hour = mysql_prep($_POST['Hour']);
    $minute = mysql_prep($_POST['Minute']);
    $meridian = mysql_prep($_POST['Meridian']);
    $date = date('d/m/Y');
    $time = $hour . ":" . $minute . $meridian;
    $id = $_GET['id'];

    $query = "update events set date = '{$date}', title = '{$title}', summary = '{$summary}', location = '{$location}', day = '{$day}', month = '{$month}', year = '{$year}', time = '{$time}' where id = '{$id}'";
    $result = mysql_query($query);

    if(isset($result)){
        redirect_to("../events.php");
    }
}else{
    $title = '';
    $summary = '';
    $location = '';
    $day = '';
    $month = '';
    $year = '';
    $hour = '';
    $minute = '';
    $meridian = '';
    $date = '';
    $time = '';
    $id = $_GET['id'];
    redirect_to("../edit_event.php?id={$id}");
}