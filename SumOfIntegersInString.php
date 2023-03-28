<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of integers in string</title>
</head>

<body>
    <h3>DESCRIPTION</h3>
    <p>
        Your task in this kata is to implement a function that calculates the sum of the integers inside a string.
        <br>
        For example,
        <br>
        in the string "The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog",
        <br>
        the sum of the integers is 3635.
        <br>
        ===========================================================
    </p>
    <h3>Result: </h3>
    <?php
        $str = "The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog";
        // Use preg_match_all() function to check match
        preg_match_all('!\d+\.*\d*!', $str, $arr);
        $result = 0;
        foreach($arr[0] as $key=>$value){
           $result += $value;
        }
        echo $result;
    ?>
</body>

</html>