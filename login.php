<html>
    <head></head>
    <body>
        <?php
        $keyFile = fopen("/var/key.txt", "r") or die("Unable to get hash.");
        $key = fread($keyFile, filesize("key.txt"));
        fclose($keyfile);
        
        session_start();
        
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            echo '<p>sha: ';
            echo sha1($_POST["pass"]);
            echo 'key: ';
            echo $key;
            $pass = $_POST["pass"];
            $_SESSION["pass"] = $_POST["pass"];
            if (sha1($pass) == $key)
            {
                echo '<p>logging in</p>';
                echo '<script>window.location = \'http://harry.technology/form.php\'</script>';
            }
        }
        
        ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p>Password: </p><input type="password" name="pass">
        </form>
    </body>
</html>