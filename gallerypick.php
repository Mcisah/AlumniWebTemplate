<!DOCTYPE html>
<!--
~ Copyright (c) 2016. McIsah Co.
~ This is a project from the McIsah Co. Company.
~ With All Rights Reserved.
-->
<?php
    include_once ('others/varies.php');
    $page_name = $pages[6];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GalleryName - Alumni Association of Bells University Of Technology.</title>
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
        <div class="about_board" style="height: 300px;">
            <span class="about_board_header" style="text-align: left;bottom:35px;">GALLERY</span>
            <span class="about_board_header" style="text-align: left;font-size: 20px;">College of Engineering Alumni Reunion</span>
        </div>
        <div class="inner_gallery_body_2">
            <div class="inner_gallery_body_box_2">
                <img class="inner_gallery_body_box_icon_2" src="img/wellbeck-2x.jpg">
                <span class="inner_gallery_body_box_label">College of Engineering Alumni Reunion</span>
                <div class="gallery_piccer_box">
                    <span class="gallery_piccer_buttons">1</span>
                    <span class="gallery_piccer_buttons">2</span>
                    <span class="gallery_piccer_buttons">3</span>
                </div>
            </div>
        </div>
        <div class="inner_gallery_body">
            <span class="gallery_container_header_2">RELATED ALBUMS</span>
            <div class="inner_gallery_body_row">
                <div class="inner_gallery_body_box">
                    <span class="inner_gallery_body_box_icon" style="background-image: url('img/helsinki-2x.jpg');"></span>
                    <span class="inner_gallery_body_box_label">BUPF Dinner Night</span>
                </div>
                <div class="inner_gallery_body_box">
                    <span class="inner_gallery_body_box_icon" style="background-image: url('img/canterbury-2x.jpg');"></span>
                    <span class="inner_gallery_body_box_label">College of Engineering Alumni Reunion</span>
                </div>
                <div class="inner_gallery_body_box">
                    <span class="inner_gallery_body_box_icon" style="background-image: url('img/caroe-2x.jpg');"></span>
                    <span class="inner_gallery_body_box_label">College Lecture Speech By Chancellor</span>
                </div>
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