<!DOCTYPE html>
<html>
    <head>
        <?php
            require 'include/head.php';
        ?>
    </head>
    <body>
        <header>
            <h1>BHS Sailing</h1>
            <a href="index.html"><img alt="BHS_Burgee" src="images/burgee.png"></a>
            <nav>
                <?php
                    require 'include/navbar.php';
                ?>
            </nav>
        </header>
        <div id="content">
            <!--
            <div id="subtitle"><h1>{TITLE OF THE PAGE}</h1></div>
            <div  id="imageheader"><img src="images/{IMAGENAME}div>
            
Add each paragraph in a <p> tag so that looks like:
            
            <p>first paragraph</p>
            <p>second paragraph</p>
            -->
            <iframe id="teamcalender" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;mode=WEEK&amp;height=700&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=bhssailing%40gmail.com&amp;color=%23865A5A&amp;ctz=America%2FLos_Angeles" style="border-width:0" width="100%" height="700" frameborder="0" scrolling="no"></iframe>
        </div>
        <footer>
            <?php
                require 'include/navbar.php';
            ?>
        </footer>
    </body>
</html>
