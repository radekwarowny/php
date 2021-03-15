<?php

$f_name = "Radek";
$l_name = "Warowny";
$age = "33";
$height = "1.88";
$can_vote = true;
$address = array('street'=> '123 Main St', 'City'=> 'Newcastle');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEREK BANAS PHP TUTORIAL</title>
</head>
<body>
    <p>Name: <?php echo $f_name . ' ' . $l_name; ?></p>
        <form action="index.php" method="GET">
            <label>Your County : </label>
            <input type="text" name="county" /><br>
            <label>Number 1 : </label>
            <input type="text" name="num-1" /><br>
            <label>Number 2 : </label>
            <input type="text" name="num-2" /><br>
            <input type="submit" value="Submit" />
    </form>

    <?php
        if (isset($_GET) && array_key_exists('county', $_GET)) {
            $county = $_GET['county'];
            if(isset($county) && !empty($state)) {
                echo 'You livbe in ' > $county . '<br>';
                echo "$f_name lives in $county<br>";

            }
            if(count($_GET) >= 3) {
                $num_1 = $_GET['num-1'];
                $num_2 = $_GET['num-2'];
                echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . "<br>";
                echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br>";
                echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br>";
                echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br>";
                echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br>";
                echo "$num_1 / $num_2 = " . (intdiv($num_1, $num_2)) . "<br>";

                echo "Increment $nun_1 = " . ($num_1++) . "<br>";
                echo "Decrement $nun_1 = " . ($num_1--) . "<br>";

                echo "sin(0) = " .sin(0) . "<br>";
                echo number_format(12345.56789, 2) . "<br>";           
            }
            
        }
    ?>
    
</body>
</html>