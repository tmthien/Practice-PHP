<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Century From Year</title>
</head>
<body>
    <h3>
        DESCRIPTION:
    </h3>
    <p>
        Introduction <br>
        The first century spans from the year 1 up to and including the year 100, the second century - from the year 101 up to and including the year 200, etc.
        <br>
        Task
        <br>
        Given a year, return the century it is in.
        <br>
        Examples
        <br>
        1705 --> 18 <br>
        1900 --> 19 <br>
        1601 --> 17 <br>
        2000 --> 20 <br>
        =================================================
    </p>
    <h3>Result: </h3>
    <?php
    $year = 2024;
    $centuryCount = 0;
    while ($year > 0){
      $year = $year - 100;
      $centuryCount = $centuryCount + 1;
    }
    echo "Thế kỉ $centuryCount";
    
    ?>

</body>
</html>