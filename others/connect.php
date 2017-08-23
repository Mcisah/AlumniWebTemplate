<?php
/**
 * Copyright (c) 2016. McIsah Co.
 * This is a project from the McIsah Co. Company.
 * With All Rights Reserved.
 */

/**
 * Created by PhpStorm.
 * User: michaelisah
 * Date: 1/1/15
 * Time: 6:34 AM
 */

define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_NAME","alumni_bells");
define("DB_PASS","");
mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());

?>