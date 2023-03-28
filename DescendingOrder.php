<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descengin Order</title>
</head>
<body>
    <h3>DESCRIPTION:
    </h3>
    <p>
        Your task is to make a function that can take any non-negative integer as an argument and return it with its digits in descending order. Essentially, rearrange the digits to create the highest possible number.
        <br>
        Examples: <br>
        Input: 42145 Output: 54421
        <br>
        Input: 145263 Output: 654321
        <br>
        Input: 123456789 Output: 987654321
        <br>
    ========================================================
    </p>
    <h3>Result: </h3>
    <?php
        $str = "44512346";
        $arr = str_split($str);
        rsort($arr);
        var_dump(implode($arr));
    ?>
</body>
</html>