<?php
/**
 * Copyright (c) 2016. McIsah Co.
 * This is a project from the McIsah Co. Company.
 * With All Rights Reserved.
 */

/**
 * Created by PhpStorm.
 * User: michaelisah
 * Date: 4/26/16
 * Time: 9:13 AM
 */

require 'PHPMailerAutoload.php';


$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = '';          // SMTP username
$mail->Password = ''; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

include_once("../../others/connect.php");
include_once("../../others/funcs.php");


if(isset($_POST['Title']) && isset($_POST['Message']) && $_POST['Title'] != '' && $_POST['Message']){
    $title = $_POST['Title'];
    $message = $_POST['Message'];
    $date = date('d/m/Y');

    $query = "select * from news_letter";
    $result = mysql_query($query);

    confirm_query($result);
    $s_n = 1;
    if(mysql_num_rows($result) > 0) {
        while ($set = mysql_fetch_array($result)) {
            if (isset($set)) {
                $send_to_email = $set['email'];

                $mail->setFrom('BellsTech Alumni Association');
                //$mail->addReplyTo('michaelisahadav@gmail.com', 'McIsah Co');
                $mail->addAddress($send_to_email);   // Add a recipient
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                $mail->isHTML(true);  // Set email format to HTML

                $bodyContent = $message;
                $mail->Subject = $title;
                $mail->Body    = $bodyContent;
                if(!$mail->send()) {
                    redirect_to("../send_newsletter.php?error=notsent");
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                    $read_query = "select * from news_letter";
                    $read_result = mysql_query($read_query);
                    confirm_query($read_result);
                    $num_recipents = mysql_num_rows($read_result);

                    $insert_query = "insert into sent_newsletter(title, message, date, recipents) values('{$title}', '{$message}', '{$date}', '{$num_recipents}')";
                    $insert_result = mysql_query($insert_query);

                    redirect_to("../newsletter.php");

                }

            }
        }
    }



}else{
    $title = '';
    $message = '';

    redirect_to("../send_newsletter.php?error=notset");
}


?>
