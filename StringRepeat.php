<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Repeat</title>
</head>
<body>  
    <h3>
        Instructions
    </h3>
    <p>
        Write a function that accepts an integer n and a string s as parameters, and returns a string of s repeated exactly n times.
        <br>
        Examples (input -> output)
        6, "I"     -> "IIIIII"
        5, "Hello" -> "HelloHelloHelloHelloHello"
    </p>
    <p>=================================</p>
    <h4> Result: </h4>
    <?php
        function output($n, $str){
            $result = "";
            for($i = 1 ; $i <= $n; $i++){
                echo $result = $str;
            }
            return $result;
        }
        output(3, "*");
        echo "<br>";
        output(6, "!");
        echo "<br>";
        output(7, "Hello");
    ?>

</body>
</html>