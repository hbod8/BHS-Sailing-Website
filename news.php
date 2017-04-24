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
        <link rel="shortcut icon" href="images/icons/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/icons/favicon.ico" type="image/x-icon">
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
