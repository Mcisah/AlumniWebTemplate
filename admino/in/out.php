<?php
/**
 * Copyright (c) 2016. McIsah Co.
 * This is a project from the McIsah Co. Company.
 * With All Rights Reserved.
 */

/**
 * Created by PhpStorm.
 * User: michaelisah
 * Date: 5/6/16
 * Time: 10:34 AM
 */


include_once ("../../others/funcs.php");
include_once ("../../others/connect.php");


$id = addslashes($_REQUEST['id']);



$image = mysql_query("SELECT * FROM news WHERE id={$id}");
$image = mysql_fetch_assoc($image);
$image = $image['cover_image'];

header("Content-type: image/jpeg");

echo $image;