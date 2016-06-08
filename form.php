<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <style>
            body>* {
                margin-left: 10%;
                margin-right: 10%;
            }
        </style>
    </head>
    <body>
        <?php
        //read stored key
        $keyFile = fopen("secure/key.txt", "r") or die("Unable to get hash.");
        $key = fread($keyFile, filesize("secure/key.txt"));
        fclose($keyfile);
        //Init session to keep varibles between pages
        session_start();
        //process submitted keys and compare
        if (sha1($_SESSION['pass']) != $key)
        {
            exit("<div class=\"alert alert-danger\" role=\"alert\"><p>bad passkey</p></div>");
            session_unset();
            session_destroy();
        }
        echo '<div class="alert alert-success" role="alert"><p>logged in</p></div>';
        // checks if user presses logout button, if true, then clear session varibles
        if ($_POST['logout'])
        {
            session_unset();
        }
        
        /* Form submission */
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            date_default_timezone_set('PST');
            
            //read from file
            $XMLFileRead = fopen("newsdata.xml", "r") or die ("<div class=\"alert alert-danger\" role=\"alert\"><p>Cannot open newsdata.xml for reading.</p></div>");
            $FileContents = array();
            while (!feof($XMLFileRead))
            {
                array_push($FileContents, fgets($XMLFileRead));
            }
            //unset($FileContents[count($FileContents)-1]);
            $XMLFinalLine = array_pop($FileContents);

            //writing to the XML file
            $XMLFileWrite = fopen("newsdata.xml", "w") or die ("<div class=\"alert alert-danger\" role=\"alert\"><p>Cannot open newsdata.xml for writing.</p></div>");
            $FileString = "";
            foreach ($FileContents as $line)
            {
                $FileString .= $line;
            }
            //echo "<p>" . htmlspecialchars($FileString) . "</p>";
            fwrite($XMLFileWrite, $FileString);
            $new = "\t</announcement>\n";
            $new .= "\t<announcement>\n";
            $new .= "\t\t<title>" . $_POST["title"] . "</title>\n";
            $new .= "\t\t<topic>" . "</topic>\n";
            $new .= "\t\t<date>\n";
            $new .= "\t\t\t<posted>" . date("g:i:s A D/n/y") . "</posted>\n";
            $new .= "\t\t\t<event>" . $_POST['date'] . "</events>\n";
            $new .= "\t\t</date>\n";
            $new .= "\t\t<author>" . $_POST['author'] . "</author>\n";
            $new .= "\t\t<content>" . $_POST['content'] . "</content>\n";
            $new .= "\t\t<media></media>\n";
            $new .= "\t</announcement>\n";
            echo $new;
            fwrite($XMLFileWrite, $new);
            fwrite($XMLFileWrite, $XMLFinalLine);

            //close files
            fclose($XMLFileRead);
            fclose($XMLFileWrite);
            
            //return status
            echo "<div class=\"alert alert-success\" role=\"alert\"><p>New post added.</p></div>";
        }
        ?>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>New Post</h4>
            </div>
            <div class="panel-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <p>Title:</p><input type="text" name="title"><br>
                    <p>Date: (of event)</p><input type="text" name="date"><br>
                    <p>Author:</p><input type="text" name="author"><br>
                    <p>Post: (use &lt;br&gt;&lt;p id="nc"&gt; to indicate a new paragraph)</p><textarea type="text" name="post" rows="10" cols="50"></textarea>
                </form>
            </div>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="submit" class="btn btn-default" name="submit" value="Add post">
            <input type="submit" class="btn btn-default" name="logout" value="Logout">
        </form>
    </body>
</html>
