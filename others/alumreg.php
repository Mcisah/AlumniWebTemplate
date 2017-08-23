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
 * Time: 9:34 AM
 */

include_once ('connect.php');
include_once ('funcs.php');

if(isset($_POST['Email']) && $_POST['Email'] != "" && $_POST['Email'] != " "){
    $first = $_POST['First'];
    $last = $_POST['Last'];
    $email = $_POST['Email'];
    $birth = $_POST['Date'];
    $class = $_POST['Year'];
    $matric = $_POST['Matric'];
    $degree = $_POST['Degree'];

    $news_query = "SELECT id, first, last, birthday ";
    $news_query .= "FROM alumni ";
    $news_query .= "WHERE matric = '{$matric}' ";
    $news_query .= "AND degree = '{$degree}' ";
    $news_query .= "LIMIT 1";
    $result = mysql_query($news_query);

    confirm_query($result);

    if(mysql_num_rows($result) == 1){
        $registered_email = mysql_fetch_array($result);
        $mail1 = $registered_email['first'];
        $mail2 = $registered_email['last'];
        $names = $mail1 . " " . $mail2;
        $names_2 = strtoupper($names);


        redirect_to("../alumni.php?message_2=The ALumni {$names_2}, is already registered!");
    }else {
        $news_query_2 = mysql_query("INSERT INTO alumni(first, last, email, birthday, matric, class_year, degree) VALUES('{$first}', '{$last}', '{$email}', '{$birth}', '{$matric}', '{$class}', '{$degree}')");

        if (isset($news_query_2)) {
            $news_query2 = "SELECT id, first, last, birthday ";
            $news_query2 .= "FROM alumni ";
            $news_query2 .= "WHERE first = '{$first}' ";
            $news_query2 .= "AND birthday = '{$birth}' ";
            $news_query2 .= "LIMIT 1";
            $result2 = mysql_query($news_query2);

            confirm_query($result2);

            if (mysql_num_rows($result2) == 1) {
                $found_mail = mysql_fetch_array($result2);
                $message_2 = "Thank you for registering !";

                redirect_to("../alumni.php?message_2= {$message_2}");
            }

        } else {
            // do nothing
        }
    }
}else{

}
?>

<?php mysql_close(); ?>
