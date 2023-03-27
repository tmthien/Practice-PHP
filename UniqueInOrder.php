<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique In Order</title>
</head>

<body>
    <h3>
        DESCRIPTION:
    </h3>
    <p>
        Implement the function unique_in_order which takes as argument a sequence and returns a list of items without any elements with the same value next to each other and preserving the original order of elements.
        <br>
        For example:
        <br>
        uniqueInOrder("AAAABBBCCDAABBB") == {'A', 'B', 'C', 'D', 'A', 'B'}
        <br>
        uniqueInOrder("ABBCcAD") == {'A', 'B', 'C', 'c', 'A', 'D'}
        <br>
        uniqueInOrder([1,2,2,3,3]) == {1,2,3}
        <br>
        =====================================================================
    </p>
    <h3>Result:</h3>
    <?php
        $str = "AAABBBCCccDDDAAACcc";
        var_dump($str);
        $arr = [];
        $new = str_split($str);
        
        for ($i = 0; $i < count($new); $i++) {
            if ($new[$i] !== $new[$i+1]) {
                array_push($arr, $new[$i]);
            }
        }
        $newStr = implode('', $arr);
        var_dump($newStr) ;
    ?>

</body>

</html>