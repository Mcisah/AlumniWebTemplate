<!DOCTYPE html>
<!--
~ Copyright (c) 2016. McIsah Co.
~ This is a project from the McIsah Co. Company.
~ With All Rights Reserved.
-->
<?php
    include_once ('others/varies.php');
    $page_name = $pages[4];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery - Alumni Association of Bells University Of Technology.</title>
    <link type="text/css" rel="stylesheet" href="css/index.css" />
    <link type="text/css" rel="stylesheet" href="css/contact.css" />
    <link type="text/css" rel="stylesheet" href="css/about.css" />
    <link type="text/css" rel="stylesheet" href="css/reset.css" />
    <link type="text/css" rel="stylesheet" href="css/gallery.css" />
    <script language="JavaScript" src="js/gen.js" type="text/javascript"></script>
</head>
<body>

    <section id="wrapper">
        <?php include_once ('header.php'); ?>

        <div id="container">
            <div class="gallery_board" style="height: 250px;">
                <span class="about_board_header" style="text-align: left;">GALLERY</span>
            </div>
            <div class="inner_gallery_body">
                <div class="inner_gallery_body_row">
                    <a href="gallerypick.php">
                    <div class="inner_gallery_body_box">
                        <span class="inner_gallery_body_box_icon" style="cursor:pointer;background-image: url('img/helsinki-2x.jpg');"></span>
                        <span class="inner_gallery_body_box_label">BUPF Dinner Night</span>
                    </div>
                    </a>
                    <a href="gallerypick.php">
                    <div class="inner_gallery_body_box">
                        <span class="inner_gallery_body_box_icon" style="background-image: url('img/canterbury-2x.jpg');"></span>
                        <span class="inner_gallery_body_box_label">College of Engineering Alumni Reunion</span>
                    </div>
                    </a>
                    <a href="gallerypick.php">
                    <div class="inner_gallery_body_box">
                        <span class="inner_gallery_body_box_icon" style="background-image: url('img/caroe-2x.jpg');"></span>
                        <span class="inner_gallery_body_box_label">College Lecture Speech By Chancellor</span>
                    </div>
                    </a>
                </div>
                <div class="inner_gallery_body_row">
                    <a href="gallerypick.php">
                    <div class="inner_gallery_body_box">
                        <span class="inner_gallery_body_box_icon" style="background-image: url('img/milan-2x.jpg');"></span>
                        <span class="inner_gallery_body_box_label">BUPF Dinner Night</span>
                    </div>
                    </a>
                    <a href="gallerypick.php">
                    <div class="inner_gallery_body_box">
                        <span class="inner_gallery_body_box_icon" style="background-image: url('img/shanghai-2x.jpg');"></span>
                        <span class="inner_gallery_body_box_label">College of Engineering Alumni Reunion</span>
                    </div>
                    </a>
                    <a href="gallerypick.php">
                    <div class="inner_gallery_body_box">
                        <span class="inner_gallery_body_box_icon" style="background-image: url('img/wellbeck-2x.jpg');"></span>
                        <span class="inner_gallery_body_box_label">College Lecture Speech By Chancellor</span>
                    </div>
                    </a>
                </div>
                <div class="inner_gallery_body_row">
                    <a href="gallerypick.php">
                    <div class="inner_gallery_body_box">
                        <span class="inner_gallery_body_box_icon" style="background-image: url('img/nhm-2x.jpg');"></span>
                        <span class="inner_gallery_body_box_label">BUPF Dinner Night</span>
                    </div>
                    </a>
                    <a href="gallerypick.php">
                    <div class="inner_gallery_body_box">
                        <span class="inner_gallery_body_box_icon" style="background-image: url('img/millennium-2x.jpg');"></span>
                        <span class="inner_gallery_body_box_label">College of Engineering Alumni Reunion</span>
                    </div>
                    </a>
                    <a href="gallerypick.php">
                    <div class="inner_gallery_body_box">
                        <span class="inner_gallery_body_box_icon" style="background-image: url('img/caroe-2x.jpg');"></span>
                        <span class="inner_gallery_body_box_label">College Lecture Speech By Chancellor</span>
                    </div>
                    </a>
                </div>
            </div>
        </div>

        <?php include_once('footer.php'); ?>
    </section>

    <script type="text/javascript">
        <?php echo $alerter; ?>
    </script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/developement%20jquery.txt"></script>
</body>
</html>