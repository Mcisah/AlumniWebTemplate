<header id="back_header"></header>
<header id="header">
    <div class="inner_header">
        <a href="index.php"><span id="header_logo">The Bells University of Technology</span></a>

        <div id="header_menu_container">
            <a href="about.php"><span class="header_menu_content">About Us</span></a>
            <a href="events.php"><span class="header_menu_content">Events</span></a>
            <a href="news.php"><span class="header_menu_content">News</span></a>
            <a href="gallery.php"><span class="header_menu_content">Gallery</span></a>
            <a href="contact.php"><span class="header_menu_content">Contact</span></a>
            <a href="alumni.php"><span class="header_menu_content">Join Alumni</span></a>
        </div>

        <div id="newsletter_panel" onmouseover="news_l();" onmouseout="news_l_off();">
            <span class="newsletter_header">
                Sign Up For Our Newsletter
             <div id='newsletter_Email_errorloc' class="error_strings"></div>
            </span>
                <form method="post" name="newsletter" action="others/newsletter.php?page=<?php echo $page_name; ?>">
                    <span class="newsletter_text_box_container">
                        <input name="Email" type="email" placeholder="Your Email" value="" class="newsletter_text_box" required>
                    </span>
                    <span class="newsletter_submit_container">
                        <input name="submit" type="submit" class="newsletter_submit_button" value="Sumbit">
                    </span>
                </form>
            <script language="JavaScript" type="text/javascript" xml:space="preserve">
        //<![CDATA[
        //You should create the validator only after the definition of the HTML form
        var frmvalidator  = new Validator("newsletter");
        frmvalidator.EnableOnPageErrorDisplay();
        frmvalidator.EnableMsgsTogether();

        frmvalidator.addValidation("Email","maxlen=50");
        frmvalidator.addValidation("Email","req", "Please enter your email");
        frmvalidator.addValidation("Email","email");




        //]]>
            </script>
        </div>
    </div>
    <span class="no_show">

    <?php
    if(isset($_GET['message'])){
        $message = $_GET['message'];
        $alerter = $message == "SUCCESS" ? "alert(\"Thank you for signing up for our newsletter !\");" : "alert(\"Hey! : $message\");";
    }else{
        $alerter = '';
    }
    ?>
    </span>
</header>