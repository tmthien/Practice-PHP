<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fix String Case</title>
</head>

<body>
    <h3>
        DESCRIPTION:
    </h3>
    <p>
        In this Kata, you will be given a string that may have mixed uppercase and lowercase letters and your task is to convert that string to either lowercase only or uppercase only based on:
            <br> make as few changes as possible. <br>
            if the string contains equal number of uppercase and lowercase letters, convert the string to lowercase.
<br>
            For example:
            <br>
            solve("coDe") = "code". Lowercase characters > uppercase. Change only the "D" to lowercase. <br>
            solve("CODe") = "CODE". Uppercase characters > lowecase. Change only the "e" to uppercase. <br>
            solve("coDE") = "code". Upper == lowercase. Change all to lowercase.
            <br>
            ====================================================================================
    </p>
    <h3>Result:</h3>


    <?php
    $string = "AAAAccc";
    $new = str_split($string);
    $up = 0;
    $low = 0;
    for ($i = 0; $i < count($new); $i++) {
        if (strtoupper($new[$i]) == $new[$i]) {
            $up += 1;
        } else  $low += 1;
    }
    if ($up > $low) {
        echo strtoupper($string);
    } else echo strtolower($string);
    ?>
</body>

</html>