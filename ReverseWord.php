<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Word</title>
</head>
<body>
    <h3>
        Complete the function that accepts a string parameter, and reverses each word in the string. All spaces in the string should be retained.
    </h3>
    <p>
        Examples <br>
        "This is an example!" ==> "sihT si na !elpmaxe" <br>
        "double  spaces"      ==> "elbuod  secaps" <br>
        ==============================================
    </p>
    <h3> Result:</h3>
    <?php 
    
        $str = "This is an example!";
        $newArr = explode(' ', $str);

        foreach($newArr as $a) {
            echo " ".strrev($a);
        }
    ?>
</body>
</html>