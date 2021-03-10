<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       
       <!-- Printing data from our form -->
       <h3>Hi <?php echo htmlspecialchars($_POST['name']); ?></h3>
       <h3>You are <?php echo (int)$_POST['age']; ?> years old.</h3>
        
        <script src="" async defer></script>
    </body>
</html>