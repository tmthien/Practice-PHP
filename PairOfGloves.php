<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pair of gloves</title>
</head>

<body>
    <h3>
        DESCRIPTION:
    </h3>
    <p>
        Pair of gloves <br>
        Winter is coming, you must prepare your ski holidays. The objective of this kata is to determine the number of pair of gloves you can constitute from the gloves you have in your drawer.
        <br>
        Given an array describing the color of each glove, return the number of pairs you can constitute, assuming that only gloves of the same color can form pairs.
        <br>
        Examples:
        <br>
        input = ["red", "green", "red", "blue", "blue"] <br>
        result = 2 (1 red pair + 1 blue pair) <br> <br>

        input = ["red", "red", "red", "red", "red", "red"] <br>
        result = 3 (3 red pairs) <br>
        =============================================================================
    </p>
    <h3> Result:</h3>

    <?php
        $arr = array(
            'gray','black','purple','purple','gray','black'
        );
        var_dump($arr);

        $newArr = array_count_values($arr);
        $count = 0;
        $temp = 0;
            foreach($newArr as $a){
                if($a % 2 == 0){
                    $count = $a / 2;
                };
                $temp ++;
            }
        echo "<br>Số cặp bao tay: ".$temp;
    ?>
</body>

</html>