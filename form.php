<html>
    <head></head>
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
                exit('bad passkey');
                session_unset();
                session_destroy();
            }
            echo '<p>logged in</p>';
            // checks if user presses logout button, if true, then clear session varibles
            if ($_POST['logout'])
            {
                session_unset();
            }

        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="submit" class="button" name="logout" value="logout" />
        </form>
    </body>
</html>

