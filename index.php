<!DOCTYPE html>
<html>
    <head>
      <title>BHS Sailing</title>
        <!-- JQUERY -->
        <script src="jquery.js"></script>
        <!-- BOOTSTRAP -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- Project CSS & JavaScript -->
        <link rel="stylesheet" type="text/css" href="universal_stylesheet.css">
    </head>
    <body>
        <header>
            <h1>BHS Sailing</h1>
            <a href="index.html"><img alt="BHS_Burgee" src="images/burgee.png"></a>
            <nav>
                <div id="navitem"><a id="navlink" href="index.php"><p id="navtext">News</p></a></div>
                <div id="navitem"><a id="navlink" href="team.html"><p id="navtext">Team</p></a></div>
                <div id="navitem"><a id="navlink" href="coaches.html"><p id="navtext">Coaches</p></a></div>
                <div id="navitem"><a id="navlink" href="equipment.html"><p id="navtext">Equipment</p></a></div>
                <div id="navitem"><a id="navlink" href="calender.html"><p id="navtext">Calendar</p></a></div>
                <div id="navitem"><a id="navlink" href="practice.html"><p id="navtext">Practice</p></a></div>
                <div id="navitem"><a id="navlink" href="friends.html"><p id="navtext">Friends</p></a></div>
                <div id="navitem"><a id="navlink" href="help.html"><p id="navtext">How to help</p></a></div>
                <div id="navitem"><a id="navlink" href="signup.html"><p id="navtext">Sign Up</p></a></div>
            </nav>
        </header>
        <div id="content">
            <div id="subtitle"><h1>News</h1></div>
            <div  id="imageheader"><img src="images/news-titleimage.jpg"></div>
            <?php
            
            $data = simplexml_load_file("newsdata.xml");
            
            foreach ($data->announcement as $announcement)
            {
                echo "<hr>";
                echo "<h2>" . $announcement->title . "</h2>";
                echo "<p id=\"author\">" . $announcement->author . "</p>";
                echo "<p id=\"date\">" . $announcement->date->event . "</p>";
                echo "<p id=\"nc\">" . $announcement->content . "</p>";
                foreach ($announcement->media->image as $image)
                {
                    echo "<image id=\"newsimage\" src=\"" . $image->url . "\">";
                    echo "<p id=\"caption\">" . $image->caption . "</p>";
                }
            }
            
            ?>
        </div>
        <footer>
            <h4>Our Sponsors</h4>
            <hr>
            <a href="http://www.biparksfoundation.org/ " target="_blank" alt="BHS Sailing Team Supporter - Bainbridge Island Parks Foundation"> <img title="Bainbridge Island Parks Foundation" alt="BHS Sailing Team Supporter - Bainbridge Island Parks Foundation" src="http://bhssailing.net/wp-content/themes/BHS-Sailing/img/parks-min.jpg"><br><p>Bainbridge Island Parks Foundation</p></a>
            <a href="http://www.bainbridgeislandrotary.org/" target="_blank" alt="BHS Sailing Team Supporter - Rotary Club of Bainbridge Island"><img title="Rotary Club of Bainbridge Island" alt="BHS Sailing Team Supporter - Rotary Club of Bainbridge Island" src="images/sponsors/rotary-min.jpg"><br><p>Rotary Club of Bainbridge Island</p></a>
            <a href="http://www.eagleharboryachtclub.com/" target="_blank" alt="bhs sailing team supporter eagle harbor yacht club"><img title="Eagle Harbor Yacht Club" alt="BHS Sailing Team Supporter - Eagle Harbor Yacht Club" src="http://bhssailing.net/wp-content/themes/BHS-Sailing/img/eagleharboryc-min.gif"><br><p>Eagle Harbor Yacht Club</p></a>
            <a href="http://www.spartanboosteralumniclub.org/" target="_blank" alt="bhs sailing team supporter spartan boooster alumni club"><img title="Spartan Boooster Alumni Club" alt="BHS Sailing Team Supporter - Spartan Boooster Alumni Club" src="http://bhssailing.net/wp-content/themes/BHS-Sailing/img/spartan-min.jpg"><br><p>Spartan Boooster Alumni Club</p></a>
            <a href="http://portmadisonyc.org/" target="_blank" alt="bhs sailing team supporter port madison yacht club"> <img title="Port Madison Yacht Club" alt="BHS Sailing Team Supporter - Port Madison Yacht Club" src="http://bhssailing.net/wp-content/themes/BHS-Sailing/img/pmyc-min.jpg"><br><p>Port Madison Yacht Club</p></a>
            <a href="http://www.thesailingfoundation.org/" target="_blank" alt="BHS Sailing Team Supporter - The Sailing Foundation"> <img title="The Sailing Foundation" alt="BHS Sailing Team Supporter - The Sailing Foundation" src="http://bhssailing.net/wp-content/themes/BHS-Sailing/img/tsf.png"><br><p>The Sailing Foundation</p></a>
            <a href="http://www.onecallforall.org/" target="_blank" alt="BHS Sailing Team Supporter - One Call For All"> <img title="One Call For All" alt="BHS Sailing Team Supporter - One Call For All" src="http://bhssailing.net/wp-content/themes/BHS-Sailing/img/ocfa_logo.gif"> <br><p>One Call For All</p></a>
            <a href="http://bainbridgecf.org/" target="_blank" alt="BHS Sailing Team Supporter - Bainbridge Community Foundation"> <img title="Bainbridge Community Foundation" alt="BHS Sailing Team Supporter - Bainbridge Community Foundation" src="http://bhssailing.net/wp-content/themes/BHS-Sailing/img/image05.jpg"><br><p>Bainbridge Community Foundation</p></a>
            <a href="http://www.sycfoundation.org/" target="_blank" alt="BHS Sailing Team Supporter - SYC Foundation"> <img title="SYC Foundation" alt="BHS Sailing Team Supporter - SYC Foundation" src="http://bhssailing.net/wp-content/themes/BHS-Sailing/img/image07.jpg"><br><p>SYC Foundation</p></a>
            <p>(c) 2016 Harrison Saliba</p>
        </footer>
    </body>
</html>
