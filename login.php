<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <center>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p>Password: </p><input type="password" name="pass">
        </form>
        <?php
            //read stored key
            $keyFile = fopen("secure/key.txt", "r") or die("Unable to get hash.");
            $key = fread($keyFile, filesize("secure/key.txt"));
            fclose($keyfile);
            //Init session to keep varibles between pages
            session_start();
            //process submitted keys and compare
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $pass = $_POST["pass"];
                $_SESSION["pass"] = $_POST["pass"];
                if (sha1($pass) == $key)
                {
                    echo '<p>logging in</p>';
                    echo '<script>window.location = \'http://harry.technology/form.php\'</script>';
                }
                else
                {
                    echo '<p>WRONG PASSWORD</p>';
                }
            }
        ?>
        </center>
    </body>
</html>