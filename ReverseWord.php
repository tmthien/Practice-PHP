<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Word</title>
</head>
<body>
    <?php 
    
        $str = "This is an example!";
        $newArr = explode(' ', $str);

        foreach($newArr as $a) {
            echo " ".strrev($a);
        }
    ?>
</body>
</html>