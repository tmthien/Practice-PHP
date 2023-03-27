<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        DESCRIPTION:
    </h3>
    <p>
        Define a function that takes an integer argument and returns a logical value true or false depending on if the integer is a prime.
    </p>
    <p>
        Per Wikipedia, a prime number ( or a prime ) is a natural number greater than 1 that has no positive divisors other than 1 and itself.
    </p>

    <h4>
        Requirements
    </h4>
    <p>
        You can assume you will be given an integer input.
        <br>
        You can not assume that the integer will be only positive. You may be given negative numbers as well ( or 0 ).
        <br>
        NOTE on performance: There are no fancy optimizations required, but still the most trivial solutions might time out.
        <br>
         Numbers go up to 2^31 ( or similar, depending on language ). Looping all the way up to n, or n/2, will be too slow.
    <br>
    =======================================================
    </p>
    <h4>Result:</h4>

    <?php
    
        function is_prime(int $n): bool {
            if($n < 2) return false;//
            for($i = 2; $i <= sqrt($n); $i++){
                if( $n % $i == 0) return false;
            }
            return true;
        }
       var_dump(is_prime(-1));

    ?>
</body>
</html>
