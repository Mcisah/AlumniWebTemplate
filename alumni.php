<!DOCTYPE html>
<!--
~ Copyright (c) 2016. McIsah Co.
~ This is a project from the McIsah Co. Company.
~ With All Rights Reserved.
-->
<?php
    include_once ('others/varies.php');
    $page_name = $pages[2];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Join Alumni - Alumni Association of Bells University Of Technology.</title>
    <link type="text/css" rel="stylesheet" href="css/index.css" />
    <link type="text/css" rel="stylesheet" href="css/reset.css" />
    <link type="text/css" rel="stylesheet" href="css/about.css" />
    <link type="text/css" rel="stylesheet" href="css/alumni.css"  />
    <link rel="stylesheet" type="text/css" href="jQueryAssets/jquery.ui.core.min.css" >
    <link rel="stylesheet" type="text/css" href="jQueryAssets/jquery.ui.theme.min.css">
    <link rel="stylesheet" type="text/css" href="jQueryAssets/jquery.ui.datepicker.min.css">
    <script language="JavaScript" src="js/gen.js" type="text/javascript"></script>


    <script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="jQueryAssets/jquery-ui-1.9.2.datepicker.custom.min.js" type="text/javascript"></script>
</head>
<body>
<section id="wrapper">
    <?php include_once ('header.php'); ?>

    <div id="container">
        <div class="about_board" style="height: 250px;">
            <span class="about_board_header" style="text-align: left;">Join the Alumni Family</span>
        </div>
        <div class="inner_body_2">
            <div class="left_inner_body_2">
                    <span class="news_container_column_header_2" style="font-size: 14px;text-decoration: underline;">Please verify your affiliation to BellsTech by providing your name, date of birth, BellsTech degree and class year.</span>

                <p class="left_inner_body_other_2">
                    Lorem ipsum dolor sit amet, id laudem aperiam accusam sed. At usu albucius menandri. Ex nobis qualisque est, populo verear lucilius cum ne, duo modo option interpretaris ex. Usu ex regione moderatius, ex quo omnis erant voluptatum. Ad has sanctus legimus, nec te nulla periculis comprehensam, eu mel congue equidem. Nec ad ubique nonumes constituto.
                </p>
                <form method="post" name="alumni_reg" action="others/alumreg.php">
                <div class="form_box">
                    <div class="form_box_row">
                        <span class="form_box_column_label">First Name:</span>
                        <div id='alumni_reg_First_errorloc' class="error_strings_2"></div>
                        <span class="form_box_column_input">
                            <input name="First" type="text" class="form_box_input" placeholder="Your First Name" required>
                        </span>
                    </div>
                    <div class="form_box_row">
                        <span class="form_box_column_label">Last Name:</span>
                        <div id='alumni_reg_Last_errorloc' class="error_strings_2"></div>
                        <span class="form_box_column_input">
                            <input name="Last" type="text" class="form_box_input" placeholder="Your Last Name" required>
                        </span>
                    </div>
                    <div class="form_box_row">
                        <span class="form_box_column_label">Email:</span>
                        <div id='alumni_reg_Email_errorloc' class="error_strings_2"></div>
                        <span class="form_box_column_input">
                            <input name="Email" type="email" class="form_box_input" placeholder="Your Email" required>
                        </span>
                    </div>
                    <div class="form_box_row">
                        <span class="form_box_column_label">Matric Number:</span>
                        <div id='alumni_reg_Matric_errorloc' class="error_strings_2"></div>
                        <span class="form_box_column_input">
                            <input name="Matric" type="text" class="form_box_input" placeholder="Your Matric Number" required>
                        </span>
                    </div>
                    <div class="form_box_row">
                        <span class="form_box_column_label">Date of Birth:</span>
                        <div id='alumni_reg_Date_errorloc' class="error_strings_2"></div>
                        <span class="form_box_column_input">
                                <input name="Date" id="datepicker" type="text" class="form_box_input" placeholder="DD/MM/YYYY" required>
                        </span>
                    </div>
                    <div class="form_box_row">
                        <span class="form_box_column_label">BellsTech Year:</span>
                        <div id='alumni_reg_Year_errorloc' class="error_strings_2"></div>
                        <span class="form_box_column_input">
                            <select name="Year" title="year" class="form_box_input" style="width: 175px;height: 41px;" required>
                                <option selected value="Choose Year">Choose Year</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2009</option>
                                <option>2008</option>
                                <option>2007</option>
                                <option>2006</option>
                                <option>2005</option>
                            </select>
                        </span>
                    </div>
                    <div class="form_box_row">
                        <span class="form_box_column_label">BellsTech Degree:</span>
                        <div id='alumni_reg_Degree_errorloc' class="error_strings_2"></div>
                        <span class="form_box_column_input">
                            <select name="Degree" title="degree" class="form_box_input" style="width: 175px;height: 41px;" required>
                                <option selected value="Choose Degree">Choose Degree</option>
                                <option>Bsc. Engineering</option>
                                <option>Bsc. Engineering</option>
                                <option>Bsc. Engineering</option>
                                <option>Bsc. Engineering</option>
                                <option>Bsc. Engineering</option>
                                <option>Bsc. Engineering</option>
                                <option>Bsc. Engineering</option>
                                <option>Bsc. Engineering</option>
                            </select>
                        </span>
                    </div>

                    <div id='alumni_reg_Agree_errorloc' class="error_strings_2" style="width: 100%;margin-top:30px;"></div>
                    <span class="news_container_column_header_2" style="margin-top: 0px;">
                         <input name="Agree" title="agree" type="checkbox" required> I accept the BellsTech Alumni Association Policy on Access & Usage.
                    </span>
                    <div class="form_box_row">
<!--                        TODO: remember to create a Policy page and link-->
                        <input name="Submit" type="submit" class="newsletter_submit_button" value="Sumbit" style="border-radius: 3px;" >
                    </div>
                </div>
                </form>
                <script language="JavaScript" type="text/javascript" xml:space="preserve">
           //<![CDATA[
            //You should create the validator only after the definition of the HTML form
            var frmvalidator  = new Validator("alumni_reg");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();

            frmvalidator.addValidation("First","req","Please enter your First Name");
            frmvalidator.addValidation("First","maxlen=20",	"Max length for FirstName is 20");

            frmvalidator.addValidation("Last","req","Please enter your Last Name");
            frmvalidator.addValidation("Last","maxlen=20",	"Max length for LastName is 20");

            frmvalidator.addValidation("Email","maxlen=50");
            frmvalidator.addValidation("Email","req", "Please enter your email");
            frmvalidator.addValidation("Email","email");

           frmvalidator.addValidation("Matric","maxlen=9");
           frmvalidator.addValidation("Matric","req", "Please enter your Matric Number when as a student.");

            frmvalidator.addValidation("Date","req","Please enter a Valid Phone Number");
            frmvalidator.addValidation("Date","maxlen=20");
            frmvalidator.addValidation("Degree","dontselect=Choose Degree", "Please select your BellsTech Degree");
            frmvalidator.addValidation("Year","dontselect=Choose Year", "Please select your Class Year");
            frmvalidator.addValidation("Agree","shouldselchk", "You have to agree to the Policy on Access & Usage.");




        //]]>
</script>
            </div>
            <span id="header_logo_3" style="margin-left:131px;-webkit-transform: rotate(-180deg);-moz-transform: rotate(-180deg);-ms-transform: rotate(-180deg);-o-transform: rotate(-180deg);transform: rotate(-180deg);"></span>
        </div>
    </div>

    <?php include_once('footer.php'); ?>


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
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript">
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
</body>
</html>