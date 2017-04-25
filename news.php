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
            <div id="subtitle"><h1>News</h1></div>
            <div  id="imageheader"><img src="images/news-titleimage.jpg"></div>
            <?php
            
            $data = simplexml_load_file("newsdata.xml");
            
            echo "<div id=\"news\">";
            foreach ($data->announcement as $announcement)
            {
                echo "<h3>" . $announcement->title . "</h3>";
                echo "<p id=\"author\">" . $announcement->author . "</p>";
                echo "<p id=\"date\">" . $announcement->date->event . "</p>";
                echo "<p id=\"nc\">" . $announcement->content . "</p>";
                foreach ($announcement->media->image as $image)
                {
                    echo "<image id=\"newsimage\" src=\"" . $image->url . "\">";
                    echo "<p id=\"caption\">" . $image->caption . "</p>";
                }
                echo "<hr>";
            }
            echo "</div>";
            
            ?>
        </div>
        <footer>
            <?php
                require 'include/footer.php';
            ?>
        </footer>
    </body>
</html>
