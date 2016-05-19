<html>
    <head></head>
    <body>
        <?php
        $keyFile = fopen("key.txt", "r") or die("Unable to get hash.");
        $key = fread($keyFile, filesize("key.txt"));
        fclose($keyfile);
        
        session_start();
        
        if (sha1($_SESSION['pass']) != $key)
        {
            exit('bad passkey');
            session_unset();
            session_destroy();
        }
        echo '<p>logged in</p>';
        
        
        
        ?>
    </body>
</html>

