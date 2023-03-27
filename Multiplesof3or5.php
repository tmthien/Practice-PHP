<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>DESCRIPTION:</h3>
    <p>
        If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
        <br>
        Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in. Additionally, if the number is negative, return 0 (for languages that do have them).
        <br>
        Note: If the number is a multiple of both 3 and 5, only count it once.
    </p>
    <p>=======================================================</p>
    <h4>
        Result:
    </h4>
    <?php

    function solution($n)
    {
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            if (($i % 3 == 0) || ($i % 5 == 0)) {
                $sum += $i;
            }
        }
        echo $sum;
    }
    solution(10);

    ?>
</body>

</html>