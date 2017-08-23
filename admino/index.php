<?php session_start(); ?>
<!DOCTYPE html>
<!--
  ~ Copyright (c) 2016. McIsah Co.
  ~ This is a project from the McIsah Co. Company.
  ~ With All Rights Reserved.
  -->
<?php
    include_once ('../others/funcs.php');
    if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){
        redirect_to('home.php');
    }

    if(isset($_GET['status'])){
        $status = $_GET['status'];
        if($status == "wrong"){
            $div_1 = "<span class='textbox_container' style='font-size: 12px;text-align: center;color:#dca94d;'>Your Login Details were Wrong.</span>";
        }else{
            $div_1 = "<span class='textbox_container' style='font-size: 12px;text-align: center;color:#dca94d;'>Please fill in all the required fields.</span>";
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin / Control Panel - Alumni Association of Bells University Of Technology.</title>
    <link type="text/css" rel="stylesheet" href="../css/index.css" />
    <link type="text/css" rel="stylesheet" href="../css/reset.css" />
    <link type="text/css" rel="stylesheet" href="../css/about.css" />
    <script language="JavaScript" src="../js/gen.js" type="text/javascript"></script>
</head>
<body>
<section id="wrapper">
    <header id="back_header"></header>
    <header id="header">
        <div class="inner_header">
            <span id="header_logo" style="margin-left:96px;background-image: url('../img/yu_admin.svg');width: 81px;">The Bells University of Technology</span>

            <div id="header_menu_container" style="margin-left: 0;">
                <span class="header_menu_content_22">Welcome to the Alumni's Admin. Please login with the Admin's username and password.</span>
            </div>


            <span id="header_logo_2_4" style="background-image: url('../img/yu_3.svg');">The Bells University of Technology</span>

        </div>
    </header>

    <div id="container">
        <div class="about_board" style="width: 80%;margin-left: 10%;"></div>
        <div class="inner_body_2" style="width: 80%;margin-left: 10%;">
            <form method="post" name="admin" action="in/logger.php">
                    <span class="left_inner_body_main_2_5">
                        <div class="login_inner">
                            <?php
                            if(isset($_GET['status'])){
                                echo $div_1;
                            }
                            ?>
                            <span class="textbox_container">
                                <input type="text" name="Usrname" placeholder="Username" class="textbox_input">
                            </span>
                            <span class="textbox_container">
                                <input type="password" name="Pasword" placeholder="Password" class="textbox_input">
                            </span>
                            <span class="textbox_container" >
                                <input name="submit" style="margin-top: 5px;" type="submit" class="newsletter_submit_button" value="Sumbit">
                            </span>
                        </div>
                    </span>
            </form>
        </div>
    </div>

    <?php include_once('footer.php'); ?>

</section>


<script type="text/javascript" src="../js/index.js"></script>
<script src="../js/developement%20jquery.txt"></script>
</body>
</html>