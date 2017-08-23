<?php
/**
 * Copyright (c) 2016. McIsah Co.
 * This is a project from the McIsah Co. Company.
 * With All Rights Reserved.
 */

/**
 * Created by PhpStorm.
 * User: michaelisah
 * Date: 5/1/16
 * Time: 7:29 PM
 */
include_once ('../../others/connect.php');
include_once ('../../others/funcs.php');

if(isset($_POST['Usrname']) && isset($_POST['Pasword']) && $_POST['Usrname'] != '' && $_POST['Pasword'] != ''){
    $usrname = mysql_prep($_POST['Usrname']);
    $pasword = mysql_prep($_POST['Pasword']);

    $enc = sha1($pasword);
    $query = "select id, username from user where username = '{$usrname}' and enc_password = '{$enc}'";

    $result = mysql_query($query);
    confirm_query($result);

    if(mysql_num_rows($result) == 1){
        $found_user = mysql_fetch_array($result);
        $id = $found_user['id'];
        $user = $found_user['username'];

        redirect_to("../ses.php?id={$id}&username={$user}");
    }else{
        redirect_to("../index.php?status=wrong");
    }

}else{
    $usrname = '';
    $pasword = '';
    redirect_to("../index.php?status=nothing");
}






mysql_close();

?>