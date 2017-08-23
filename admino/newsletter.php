<?php session_start(); ?>
<!DOCTYPE html>
<!--
~ Copyright (c) 2016. McIsah Co.
~ This is a project from the McIsah Co. Company.
~ With All Rights Reserved.
-->
<?php
/**
 * Copyright (c) 2016. McIsah Co.
 * This is a project from the McIsah Co. Company.
 * With All Rights Reserved.
 */

/**
 * Created by PhpStorm.
 * User: michaelisah
 * Date: 4/20/16
 * Time: 6:11 PM
 */
include_once ('../others/connect.php');
include_once ('../others/funcs.php');
if(!isset($_SESSION['user_id']) && !isset($_SESSION['username'])){
    redirect_to('index.php');
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin / Control Panel - Alumni Association of Bells University Of Technology.</title>
    <link type="text/css" rel="stylesheet" href="../css/index.css" />
    <link type="text/css" rel="stylesheet" href="../css/reset.css" />
    <link type="text/css" rel="stylesheet" href="../css/about.css" />
    <link type="text/css" rel="stylesheet" href="css/home.css" />
    <script language="JavaScript" src="../js/gen.js" type="text/javascript"></script>
</head>
<body>
<section id="wrapper">
    <?php include_once ('header.php'); ?>

    <div id="container">
        <div class="about_board" style="width: 80%;margin-left: 10%;height: 200px;">
            <span class="about_board_header" style="text-align: left;">
                Your Newsletters
                <a href="send_newsletter.php"><span class="add_button">Send Newsletter +</span></a>
                <a href="newsletter_registered.php"><span class="add_button" style="margin-right: 10px;">View Subscribers</span></a> 
            </span>
        </div>
        <div class="inner_body_2" style="width: 80%;margin-left: 10%;">
            <div class="events_table_container">
                <span class="events_table_header">
                    <span class="events_table_header_content" style="width: 25px;text-align: center;margin-right:0;">S/N</span>
                    <span class="events_table_header_content" style="width: 35%;">Newsletter Heading</span>
                    <span class="events_table_header_content" style="width: 10%;">Recipents</span>
                    <span class="events_table_header_content" style="width: 15%;">Date</span>
                </span>
                <?php
                $read_query = "select * from sent_newsletter";
                $result = mysql_query($read_query);
                confirm_query($result);
                $s_n = 1;
                if(mysql_num_rows($result) > 0){
                    while($set = mysql_fetch_array($result)) {
                        if (isset($set)) {
                            $letter_id = $set['id'];
                            $letter_title = $set['title'];
                            $letter_message = $set['message'];
                            $letter_recipents_no = $set['recipents'];
                            $date = $set['date'];
                            if(strlen($letter_title) > 40){
                                $true_letter_title = substr($letter_title, 0, 39) . "...";
                            }else{
                                $true_letter_title = $letter_title;
                            }

                            echo "<span class=\"events_table_row\">
                    <span class=\"events_table_header_content\" style=\"width: 25px;text-align: center;margin-right:0;\">{$s_n}</span>
                    <span class=\"events_table_header_content\" style=\"width: 35%;\">{$true_letter_title}</span>
                    <span class=\"events_table_header_content\" style=\"width: 10%;\">{$letter_recipents_no}</span>
                    <span class=\"events_table_header_content\" style=\"width: 8%;\">{$date}</span>
                    <a href='resend_newsletter.php?id={$letter_id}'><span class=\"events_table_header_content hoverline\" style=\"width: 4%;\">Resend</span></a>
                    <a href='in/del_newsletter.php?id={$letter_id}'><span class=\"events_table_header_content hoverline\" style=\"width: 5%;\">Delete</span></a> 
                </span>";
                        }
                        $s_n++;
                    }
                }else{
                    echo "<div class='events_table_row'><div class='none_class'>You have not sent any Newsletter!</div></div> ";
                }

                ?>


            </div>
        </div>
    </div>

    <footer id="footer" style="position: relative;left: 0;bottom: 0;">
        <div class="inner_footer">
            <div class="inner_footer_column" style="width: 200px;">
                <span class="inner_footer_column_header">About Us</span>
                    <span class="inner_footer_column_content">
                        Lorem ipsum dolor sit amet, id laudem aperiam accusam sed. At usu albucius menandri. Ex nobis qualisque est, populo verear lucilius
                    </span>
            </div>
            <div class="inner_footer_column">
                <span class="inner_footer_column_header">Connect With Us</span>
                <span class="inner_footer_column_content_again">Facebook</span>
                <span class="inner_footer_column_content_again">Twitter</span>
                <span class="inner_footer_column_content_again">LinkedIn</span>
                <span class="inner_footer_column_content_again">Google+</span>
            </div>
            <div class="inner_footer_column" style="width: 210px;">
                <span class="inner_footer_column_header">Contact Bells Alumni Association</span>
                <span class="inner_footer_column_content" style="font-size:30px;color:#000;">+2348053600788</span>
                <a href="mailto:bellsalumni@bellsuniversity.org"><span class="inner_footer_column_content_again">bellsalumni@bellsuniversity.org</span></a>
                <a target="_blank" href="https://goo.gl/maps/ufMnFs69S5N2"><span class="inner_footer_column_content_again">Map</span></a>
                <span onclick="topper();" style="cursor:pointer;" class="inner_footer_column_content_again">Back to the Top</span>
                <a href="deses.php"><span style="font-weight:bolder;" class="inner_footer_column_content_again">Sign Out</span></a>
            </div>
            <a href="home.php"><span id="header_logo_2" style="margin-left:30px;-webkit-transform: rotate(-180deg);-moz-transform: rotate(-180deg);-ms-transform: rotate(-180deg);-o-transform: rotate(-180deg);transform: rotate(-180deg);"></span></a>
            <a target="_blank" href="http://bellsuniversity.org"><span id="header_logo_2_1" style="background-image: url('../img/thumb_logo1_1024.png')"></span></a>
            <div class="inner_footer_bottom">
                <span class="inner_footer_bottom_content">Copyright (c) 2016 BellsTech Alumni Association.</span>
                <span style="float: right;" class="inner_footer_bottom_content">Powered by Michael A. Isah</span>
            </div>
        </div>
    </footer>

</section>


<script type="text/javascript" src="../js/index.js"></script>
<script src="../js/developement%20jquery.txt"></script>
</body>
</html>


