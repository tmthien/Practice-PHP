<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordered Count of Characters</title>
</head>

<body>
    <h3>DESCRIPTION</h3>
    <p>
        Count the number of occurrences of each character and return it as a (list of tuples) in order of appearance. For empty output return (an empty list).
        <br>
        Consult the solution set-up for the exact data structure implementation depending on your language.
        <br>
        Example:
        <br>
        orderedCount("abracadabra") == [['a', 5], ['b', 2], ['r', 2], ['c', 1], ['d', 1]]
        <br>
        =================================================================
    </p>
    <h3>Result: </h3>
    <?php

        $str = 'aaaabcddeeeeeeeessss';
        $arr = str_split($str);
        $reuslt = [];
        $countArr = array_count_values($arr);
        foreach($countArr as $key=>$value){
            array_push($reuslt, [$key, $value]);
        }
        var_dump($reuslt);
    ?>
</body>

</html>