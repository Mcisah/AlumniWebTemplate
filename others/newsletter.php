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
 * Time: 6:28 AM
 */

include_once ('connect.php');
include_once ('funcs.php');
if(isset($_POST['Email']) && $_POST['Email'] != "" && $_POST['Email'] != " ") {
    $email = $_POST['Email'];
    $re_page = $_GET['page'];

    $news_query = "SELECT id, email ";
    $news_query .= "FROM news_letter ";
    $news_query .= "WHERE email = '{$email}' ";
    $news_query .= "LIMIT 1";
    $result = mysql_query($news_query);
    $emailfrom_q = $email;

    confirm_query($result);

    if(mysql_num_rows($result) == 1){
        $registered_email = mysql_fetch_array($result);
        $mail = $registered_email['email'];
        $message = "The Email you entered is already subscribed to our mailing list. But Thanks for trying";

        redirect_to("../{$re_page}?username={$mail}&message={$message}");
    }else{
        $news_query_2 = mysql_query("INSERT INTO news_letter(email) VALUES('{$email}')");

        if(isset($news_query_2)){
            $micasa  = "SELECT id, email ";
            $micasa .= "FROM news_letter ";
            $micasa .= "WHERE email = '{$email}' ";
            $micasa .= "LIMIT 1";
            $result2 = mysql_query($micasa);

            confirm_query($result2);

            if(mysql_num_rows($result2) == 1){
                $found_mail = mysql_fetch_array($result2);
//                $new_mail = $found_user['email'];
                $message_2 = "Thank you for signing up for our newsletter !";
                include_once ('sendmailfunc.php');
                redirect_to("../{$re_page}?message= {$message_2}");
            }

        }else{
            // do nothing
        }
    }
}else{
    $email = "";
    $re_page = $_GET['page'];
    redirect_to("../{$re_page}");
}

?>

<?php mysql_close(); ?>





