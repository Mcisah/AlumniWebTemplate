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
            <span class="header_menu_content_22" style="width: 93%;position:absolute;left: 0;bottom:0;text-align: center;">Welcome to the Alumni's Admin. You can edit content on the Client's Side of the Website. <br>(Contents such as events, news, and albums)</span>
        </div>
        <div class="inner_body_2" style="padding-top:20px;width: 80%;margin-left: 10%;">
            <div class="home_linker_row">
                <span class="home_linker_row_label">News :</span>
                <div class="home_linker_row_buttons_section">
                    <a href="add_news.php"><span class="home_linker_row_buttons">Add News</span></a>
                    <a href="news.php"><span class="home_linker_row_buttons">Edit News</span></a>
                    <a href="news.php"><span class="home_linker_row_buttons">Delete News</span></a>
                </div>
            </div>
            <div class="home_linker_row">
                <span class="home_linker_row_label">Events :</span>
                <div class="home_linker_row_buttons_section">
                    <a href="add_event.php"><span class="home_linker_row_buttons">Add an Event</span></a>
                    <a href="events.php"><span class="home_linker_row_buttons">Edit an Event</span></a>
                    <a href="events.php"><span class="home_linker_row_buttons">Delete an Event</span></a>
                </div>
            </div>
            <div class="home_linker_row">
                <span class="home_linker_row_label">Album :</span>
                <div class="home_linker_row_buttons_section">
                    <a href="add_album.php"><span class="home_linker_row_buttons">Add an Album</span></a>
                    <a href="album.php"><span class="home_linker_row_buttons">Edit an Album</span></a>
                    <a href="album.php"><span class="home_linker_row_buttons">Delete an Album</span></a>
                </div>
            </div>
            <div class="home_linker_row" style="border-bottom: 3px solid #dddddd;padding-bottom: 20px;">
                <span class="home_linker_row_label">Events :</span>
                <div class="home_linker_row_buttons_section">
                    <a href="send_newsletter.php"><span class="home_linker_row_buttons">Send Newsletter</span></a>
                    <a href="newsletter_registered.php"><span class="home_linker_row_buttons">View Subscriber</span></a>
                    <a href="newsletter.php"><span class="home_linker_row_buttons">Resend Newsletter</span></a>
                    <a href="newsletter.php"><span class="home_linker_row_buttons">Delete Newsletter</span></a>
                </div>
            </div>
            <div class="home_linker_row" style="width:100%;">
                <?php
                    $news_query = "select * from news";
                    $events_query = "select * from events";
                    $albums_query = "select * from albums";
                    $alumni_query = "select * from alumni";
                    $pic_query = "select * from pictures";
                    $sub_query = "select * from news_letter";
                    $news_result = mysql_query($news_query);
                    $events_result = mysql_query($events_query);
                    $albums_result = mysql_query($albums_query);
                    $alumni_result = mysql_query($alumni_query);
                    $pic_result = mysql_query($pic_query);
                    $sub_result = mysql_query($sub_query);
                    $news_no = mysql_num_rows($news_result);
                    $events_no = mysql_num_rows($events_result);
                    $albums_no = mysql_num_rows($albums_result);
                    $alumni_no = mysql_num_rows($alumni_result);
                    $pic_no = mysql_num_rows($pic_result);
                    $sub_no = mysql_num_rows($sub_result);

                ?>
                <div class="home_linker_row_buttons_section" style="width:100%;">
                    <span class="home_linker_row_buttons_2">News: <?php echo $news_no; ?></span>
                    <span class="home_linker_row_buttons_2">Event(s): <?php echo $events_no; ?></span>
                    <span class="home_linker_row_buttons_2">Album(s): <?php echo $albums_no; ?></span>
                    <span class="home_linker_row_buttons_2">Alumni(s): <?php echo $alumni_no; ?></span>
                    <span class="home_linker_row_buttons_2">Picture(s): <?php echo $pic_no; ?></span>
                    <span class="home_linker_row_buttons_2">Subscriber(s): <?php echo $sub_no; ?></span>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>

</section>


<script type="text/javascript" src="../js/index.js"></script>
<script src="../js/developement%20jquery.txt"></script>
</body>
</html>


