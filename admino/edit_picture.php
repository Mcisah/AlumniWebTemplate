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
<?php
include_once ('../others/varies.php');
$page_name = $pages[2];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin / Control Panel - Alumni Association of Bells University Of Technology.</title>
    <link type="text/css" rel="stylesheet" href="../css/index.css" />
    <link type="text/css" rel="stylesheet" href="../css/reset.css" />
    <link type="text/css" rel="stylesheet" href="../css/about.css" />
    <link type="text/css" rel="stylesheet" href="../css/alumni.css"  />
    <link rel="stylesheet" type="text/css" href="../jQueryAssets/jquery.ui.core.min.css" >
    <link rel="stylesheet" type="text/css" href="../jQueryAssets/jquery.ui.theme.min.css">
    <link rel="stylesheet" type="text/css" href="../jQueryAssets/jquery.ui.datepicker.min.css">
    <script language="JavaScript" src="../js/gen.js" type="text/javascript"></script>


    <script src="../jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="../jQueryAssets/jquery-ui-1.9.2.datepicker.custom.min.js" type="text/javascript"></script>
</head>
<body>
<section id="wrapper">
    <?php include_once ('header.php'); ?>
    <div id="container">
        <div class="about_board" style="height: 200px;width: 80%;margin-left:10%;">
            <span class="about_board_header" style="text-align: left;">
                Update Picture's Details
            </span>
        </div>
        <div class="inner_body_2" style="margin-left: 10%;width: 80%;">
            <div class="left_inner_body_2">
                <span class="news_container_column_header_2" style="margin-bottom: 20px;font-size: 14px;text-decoration: underline;">Update the details of the picture by filling all fields as they are (all) required.</span>
                <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $query = "select * from pictures where id = '{$id}' limit 1";
                    $result = mysql_query($query);

                    $after_result = mysql_fetch_array($result);
                    $name = $after_result['name'];
                    $album_id = $after_result['album_id'];
                    $album_real_name = $after_result['picture_name'];
                }else{
                    redirect_to("pictures.php");
                }
                ?>
                <form method="post" name="alumni_reg" action="in/edit_picture.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                    <div class="form_box">
                        <div class="form_box_row">
                            <span class="form_box_column_label">Album:</span>
                            <div id='alumni_reg_Album_errorloc' class="error_strings_2"></div>
                        <span class="form_box_column_input">
                            <label>
                                <select style="width:266px;height: 40px;" name="Album" style="margin-right: 9px;width: 99%;" class="form_box_input_2_1" required>
                                    <?php
                                        $album_id_2 = $album_id;
                                        $read_query_4 = "select * from albums where id = '{$album_id_2}' limit 1";
                                        $result_4 = mysql_query($read_query_4);
                                        $album_final = mysql_fetch_array($result_4);
                                        $album_real_id = $album_final['id'];
                                        $album_real = $album_final['name'];
                                    ?>
                                    <option value="<?php echo $album_real_id; ?>" selected><?php echo $album_real; ?></option>
                                    <?php
                                    $read_query = "select * from albums";
                                    $result = mysql_query($read_query);
                                    confirm_query($result);
                                    $s_n = 1;
                                    if(mysql_num_rows($result) > 0){
                                        while($set = mysql_fetch_array($result)) {
                                            if (isset($set)) {
                                                $album_id = $set['id'];
                                                $headline = $set['name'];

                                                echo "<option value=\"{$album_id}\">{$headline} </option>";
                                            }
                                            $s_n++;
                                        }
                                    }else{
                                        echo "<div class='events_table_row'><div class='none_class'>You have not Uploaded any Albums!</div></div> ";
                                    }

                                    ?>
                                </select>
                            </label>
                        </span>
                        </div>
                        <div class="form_box_row">
                            <div id='alumni_reg_Title_errorloc' class="error_strings_2"></div>
                            <span class="form_box_column_label">Image Label:</span>
                        <span class="form_box_column_input">
                            <input name="Title" value="<?php echo $name; ?>" type="text" style="width: 90%;height: 23px;" class="form_box_input_2_1" placeholder="Picture Label." required>
                        </span>
                        </div>
                        <div class="form_box_row">
                            <span class="form_box_column_label">Present News Cover Image:</span>
                        <span class="form_box_column_input">
                            <img src='in/out2.php?id=<?php echo $id; ?>' width='220'>
                        </span>
                            <div id='alumni_reg_Cover_errorloc' class="error_strings_2" style="color:#555;">Name : <?php echo $album_real_name; ?></div>
                        </div>
                        <div class="form_box_row">
                            <div id='alumni_reg_Picture_errorloc' class="error_strings_2"></div>
                            <span class="form_box_column_label">Picture:</span>
                        <span class="form_box_column_input">
                            <input name="Picture" type="file" class="form_box_input" placeholder="Your Picture Goes Here">
                        </span>
                        </div>
                        <div class="form_box_row">
                            <input name="Submit" type="submit" class="newsletter_submit_button" value="Sumbit" style="border-radius: 3px;margin-left: 192px;" >
                        </div>
                    </div>
                </form>
                <script language="JavaScript" type="text/javascript" xml:space="preserve">
           //<![CDATA[
           //You should create the validator only after the definition of the HTML form
           var frmvalidator  = new Validator("alumni_reg");
           frmvalidator.EnableOnPageErrorDisplay();
           frmvalidator.EnableMsgsTogether();

           frmvalidator.addValidation("Title","req","Please enter your Picture's Name");
           frmvalidator.addValidation("Album","dontselect=Albums", "Please select your Picture's Album");




           //]]>
</script>
            </div>
            <span id="header_logo_3" style="margin-left:131px;-webkit-transform: rotate(-180deg);-moz-transform: rotate(-180deg);-ms-transform: rotate(-180deg);-o-transform: rotate(-180deg);transform: rotate(-180deg);"></span>
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

    <span class="no_show">

    <?php
    if(isset($_GET['message_2'])){
        $message_2 = $_GET['message_2'];
        $alerter_2 = "alert(\"$message_2\");";

    }else{
        $alerter_2 = '';
    }
    ?>
    </span>

<script type="text/javascript">
    <?php echo $alerter; ?>
    <?php echo $alerter_2; ?>
</script>
<script type="text/javascript" src="../js/index.js"></script>
<script type="text/javascript">
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
</body>
</html>