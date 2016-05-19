<html>
    <head></head>
    <body>
        <?php
        
        session_start();
        
        if (sha1($_SESSION['pass']) != '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8')
        {
            exit('bad passkey');
            session_unset();
            session_destroy();
        }
        echo '<p>logged in</p>'
        ?>
    </body>
</html>

