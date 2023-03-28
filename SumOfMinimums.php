<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Minimums!</title>
</head>

<body>
    <h3>
        DESCRIPTION:
    </h3>
    <p>
        Given a 2D ( nested ) list ( array, vector, .. ) of size m * n, your task is to find the sum of the minimum values in each row.
        <br>
        For Example:
        <br>
        [ <br>
        [ 1, 2, 3, 4, 5 ] # minimum value of row is 1 <br>
        , [ 5, 6, 7, 8, 9 ] # minimum value of row is 5 <br>
        , [ 20, 21, 34, 56, 100 ] # minimum value of row is 20 <br>
        ] <br>
        So the function should return 26 because the sum of the minimums is 1 + 5 + 20 = 26.
        <br>
        Note: You will always be given a non-empty list containing positive values.
        <br>
        =================================================
    </p>
    <h3>Result: </h3>
    <?php
        $result = 0;
        $arr = [
                [ 1, 2, 3, 4, 5 ],
                [ 5, 6, 7, 8, 9 ],
                [ 20, 21, 34, 56, 100 ]
            ];
        foreach($arr as $a) {
            $result += min($a);
        }
        echo "Tổng: $result";
    ?>
</body>

</html>