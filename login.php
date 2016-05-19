<html>
    <head></head>
    <body>
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $pass = $_POST["pass"];
            if (sha1($pass) == '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8')
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