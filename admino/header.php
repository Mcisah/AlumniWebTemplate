<header id="back_header"></header>
<header id="header">
    <div class="inner_header">
        <a href="home.php"><span id="header_logo" style="margin-left:96px;background-image: url('../img/yu_admin.svg');width: 81px;">The Bells University of Technology</span></a>

        <div id="header_menu_container">
            <a href="news.php"><span class="header_menu_content_admin">News</span></a>
            <a href="events.php"><span class="header_menu_content_admin">Events</span></a>
            <a href="album.php"><span class="header_menu_content_admin">Albums</span></a>
            <a href="pictures.php"><span class="header_menu_content_admin">Pictures</span></a>
            <a href="newsletter.php"><span class="header_menu_content_admin">Newsletter</span></a>
        </div>


        <span id="header_logo_2_4" style="background-image: url('../img/yu_3.svg');">The Bells University of Technology</span>

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