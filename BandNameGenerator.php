<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Band Name Generator</title>
</head>
<body>
    <h2>DESCRIPTION:</h2>
    <p>
    My friend wants a new band name for her band. She like bands that use the formula: 
        <br>
        "The" + a noun with the first letter capitalized, for example:
        <br>
        "dolphin" -> "The Dolphin"
        <br>
    However, when a noun STARTS and ENDS with the same letter, she likes to repeat the noun twice and connect them together with the first and last letter, combined into one word (WITHOUT "The" in front), like this:
        <br>
"alaska" -> "Alaskalaska"
        <br>
Complete the function that takes a noun as a string, and returns her preferred band name written as a string.
<p>================================================</p>
    </p>
    <h4>Result:</h4>
    <?php
        function band_name_generator(string $s) {
            $end = substr($s, -1);
            $newstr = substr($s , 1);
            $low = strtolower($s);
            $the = "The ";
            $result = "";
            if($s[0] == $end) {
                echo $result = ucfirst($s).$newstr;
            }
        
            else { 
                echo $result = $the.ucfirst($low);
            }
    }
        band_name_generator("alaska");
        echo "<br>";
        band_name_generator("dolphin");
    ?>
</body>
</html>