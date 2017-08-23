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
            <span class="about_board_header" style="text-align: left;">Edit Event</span>
        </div>
        <div class="inner_body_2" style="margin-left: 10%;width: 80%;">
            <div class="left_inner_body_2">
                <span class="news_container_column_header_2" style="margin-bottom: 20px;font-size: 14px;text-decoration: underline;">Update your event content to all fields as they are (all) required.</span>
                <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $query = "select * from events where id = '{$id}' limit 1";
                    $result = mysql_query($query);

                    $after_result = mysql_fetch_array($result);
                    $title = $after_result['title'];
                    $summary = $after_result['summary'];
                    $date_created = $after_result['date'];
                    $time = $after_result['time'];
                    $hour = str_split($time, 2);
                    $minute = str_split($time, 1);
                    $meridian = str_split($time, 1);
                    $location = $after_result['location'];
                    $day = $after_result['day'];
                    $month = $after_result['month'];
                    $year = $after_result['year'];
                }else{
                    redirect_to("events.php");
                }
                ?>
                <form method="post" name="alumni_reg" action="in/edit_event.php?id=<?php echo $id; ?>">
                    <div class="form_box">
                        <div class="form_box_row">
                            <div id='alumni_reg_Title_errorloc' class="error_strings_2"></div>
                            <span class="form_box_column_label">Event Title:</span>
                        <span class="form_box_column_input">
                            <input name="Title" type="text" value="<?php echo $title; ?>" class="form_box_input_2_1" placeholder="Your Event Title." required>
                        </span>
                        </div>
                        <div class="form_box_row">
                            <div id='alumni_reg_Summary_errorloc' class="error_strings_2"></div>
                            <span class="form_box_column_label">Event Summary:</span>
                        <span class="form_box_column_input">
                            <textarea name="Summary" class="form_box_input_text_area" placeholder="Your News Summary" required><?php echo $summary; ?></textarea>
                        </span>
                        </div>
                        <div class="form_box_row">
                            <div id='alumni_reg_Venue_errorloc' class="error_strings_2"></div>
                            <span class="form_box_column_label">Event Venue:</span>
                        <span class="form_box_column_input">
                            <input name="Venue" type="text" class="form_box_input_2_1" value="<?php echo $location; ?>" placeholder="Your Event Venue" required>
                        </span>
                        </div>
                        <div class="form_box_row">
                            <div id='alumni_reg_Hour_errorloc' class="error_strings_2"></div>
                            <div id='alumni_reg_Minute_errorloc' class="error_strings_2"></div>
                            <div id='alumni_reg_Meridian_errorloc' class="error_strings_2"></div>
                            <span class="form_box_column_label">Event Time:</span>
                        <span class="form_box_column_input">
                            <label>
                                <select name="Hour" style="margin-right: 9px;" class="form_box_input_small" required>
                                    <option value="<?php echo $hour[0]; ?>" selected><?php echo $hour[0]; ?></option>
                                    <option value="HH">HH</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </label>
                            <label>
                                <select name="Minute" style="margin-right: 10px;" class="form_box_input_small" required>
                                    <option value="<?php echo $minute[3] . $minute[4]; ?>" selected><?php echo $minute[3] . $minute[4];  ?></option>
                                    <option value="MM">MM</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                    <option>32</option>
                                    <option>33</option>
                                    <option>34</option>
                                    <option>35</option>
                                    <option>36</option>
                                    <option>37</option>
                                    <option>38</option>
                                    <option>39</option>
                                    <option>40</option>
                                    <option>41</option>
                                    <option>42</option>
                                    <option>43</option>
                                    <option>44</option>
                                    <option>45</option>
                                    <option>46</option>
                                    <option>47</option>
                                    <option>48</option>
                                    <option>49</option>
                                    <option>50</option>
                                    <option>51</option>
                                    <option>52</option>
                                    <option>53</option>
                                    <option>54</option>
                                    <option>55</option>
                                    <option>56</option>
                                    <option>57</option>
                                    <option>58</option>
                                    <option>59</option>
                                    <option>60</option>
                                </select>
                            </label>
                            <label>
                                <select name="Meridian" class="form_box_input_small" required>
                                    <option value="<?php echo $minute[5] . $minute[6]; ?>" selected><?php echo $minute[5] . $minute[6]; ?></option>
                                    <option value="Meridian">Meridian</option>
                                    <option>am</option>
                                    <option>pm</option>
                                </select>
                            </label>
                        </span>
                        </div>
                        <div class="form_box_row">
                            <div id='alumni_reg_Day_errorloc' class="error_strings_2"></div>
                            <div id='alumni_reg_Month_errorloc' class="error_strings_2"></div>
                            <div id='alumni_reg_Year_errorloc' class="error_strings_2"></div>
                            <span class="form_box_column_label">Event Date:</span>
                        <span class="form_box_column_input">
                            <label>
                                <select name="Day" style="margin-right: 9px;" class="form_box_input_small" required>
                                    <option value="<?php echo $day; ?>" selected><?php echo $day; ?></option>
                                    <option value="DD">DD</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                            </label>
                            <label>
                                <select name="Month" style="margin-right: 10px;" class="form_box_input_small" required>
                                    <option value="<?php echo $month; ?>" selected><?php echo $month; ?></option>
                                    <option value="MM">MM</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </label>
                            <label>
                                <select name="Year" class="form_box_input_small">
                                    <option value="<?php echo $year; ?>" selected><?php echo $year; ?></option>
                                    <option value="YYYY">YYYY</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                </select>
                            </label>
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

           frmvalidator.addValidation("Title","req","Please enter your Event Title");

           frmvalidator.addValidation("Summary","req","Please enter a Summary of the Event");

           frmvalidator.addValidation("Venue","req", "Please enter your Event Venue");


           frmvalidator.addValidation("Hour","dontselect=HH", "Please select your Event's Hour");
           frmvalidator.addValidation("Minute","dontselect=MM", "Please select your Event's Minute");
           frmvalidator.addValidation("Meridian","dontselect=Meridian", "Please select your Event's Meridain");
           frmvalidator.addValidation("Day","dontselect=DD", "Please select your Event's Day");
           frmvalidator.addValidation("Month","dontselect=MM", "Please select your Event's Month");
           frmvalidator.addValidation("Year","dontselect=YYYY", "Please select your Event's Year");




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