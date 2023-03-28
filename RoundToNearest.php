<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round To Nearest</title>
</head>

<body>
    <h3>DESCRIPTION:</h3>
    <p>
        You are given a list of numbers (positive / negative integers) and you need to get the nearest entries of a given value.
        <br>
        For example:
        <br>
        The number 10 is given and you need to get the nearest number in this series: 1, 2, 3, 4, 6, 12. The answer should be 12.
        <br>
        If the given number is 5, the result should be {4,6};
        <br>
        $intArray = [1,2,3,4,6,12]; <br>
        $givenValue = 5; <br>
        roundUp($givenValue, $intArray) => [4, 6]; <br>
        If the method gets an empty array, it will return an empty array. <br>
        $intArray = []; <br>
        $givenValue = 42; <br>
        roundUp($givenValue, $intArray) => []; <br>
        ====================================================
    </p>
    <h3>Result: </h3>
    <?php
        $arr = [ 2, 3, 6, 7, 9];
        $n = 12;
        $countArr = count($arr);//Đếm số phần tử của mảng
        if($n < $arr[0]) echo $arr[0]; // nếu n nhỏ hơn phần tử đầu tiên của mảng thì lấy phần tử đầu tiên
        if($n > $arr[$countArr-1]) echo $arr[$countArr-1];// nếu n lớn hơn phần tử cuối cùng thì lấy phần tử cuối cùng
        else {
            array_push($arr, $n);//thêm n vào mảng
            sort($arr);//sắp xếp mảng theo thứ tự tăng dần
            $temp1 = 0;
            $temp2 = 0;
            for($i = 0; $i < count($arr); $i++){ 
                if($arr[$i] == $n){
                    $temp1 = $arr[$i] - $arr[$i-1]; // ví dụ n = 5 thì sẽ tính khoảng cách giữa số trước và số sau   
                    $temp2 = $arr[$i+1] - $arr[$i];
                    if($temp1 < $temp2) echo $arr[$i-1];
                    elseif($temp1 > $temp2) echo $arr[$i+1];
                    else echo $arr[$i-1].' '. $arr[$i+1];
                }
            }
        }

    ?>
</body>

</html>