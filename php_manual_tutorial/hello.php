<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP TEST</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

       <?php echo '<p>Hello World</p>' // simple output; ?>

       <?php echo '<h1>Get system information from PHP</h1>'; ?>
       <?php phpinfo() // Get system information from PHP; ?>

       <?php echo '<h1>Printing Variable</h1>'; ?>
       <?php echo $_SERVER['HTTP_USER_AGENT'] // Printing a variable; ?>


       <?php // Using control structures and functions

            // strpos() searches a string for another string. 
            if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
                echo 'You are using Internet Explorer.<br />';
            }
        ?>

        <?php // Mixing both HTML and PHP modes
            if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
                ?>
                <h3>strpos() must have returned non-false</h3>
                <p>You are using Internet Explorer</p>
        <?php    
            } else {
                
            ?>
            <h3>strpos() must have returned false</h3>
            <p>You are not using Internet Explorer</p>
        <?php
        }
        ?>

        <!-- A simple HTML form -->
        <form action="action.php" method="post">
            <p>Your name: <input type="text" name="name" /></p>
            <p>Your age: <input type="text" name="age" /></p>
            <p><input type="submit" /></p>
        </form>




        <script src="" async defer></script>
    </body>
</html>