<footer id="footer" style="position: fixed;left: 0px;bottom: 0px;">
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
            <?php
            if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){
                echo "<a href=\"deses.php\"><span style=\"font-weight:bolder;\" class=\"inner_footer_column_content_again\">Sign Out</span></a>";
            }
            ?>

        </div>
        <a href="home.php"><span id="header_logo_2" style="margin-left:30px;-webkit-transform: rotate(-180deg);-moz-transform: rotate(-180deg);-ms-transform: rotate(-180deg);-o-transform: rotate(-180deg);transform: rotate(-180deg);"></span></a>
        <a target="_blank" href="http://bellsuniversity.org"><span id="header_logo_2_1" style="background-image: url('../img/thumb_logo1_1024.png')"></span></a>
        <div class="inner_footer_bottom">
            <span class="inner_footer_bottom_content">Copyright (c) 2016 BellsTech Alumni Association.</span>
            <span style="float: right;" class="inner_footer_bottom_content">Powered by Michael A. Isah</span>
        </div>
    </div>
</footer>