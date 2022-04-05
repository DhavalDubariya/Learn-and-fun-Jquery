<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Sort</title>
</head>

<body>
    <h1 style="text-align:center">Insertion Sort</h1>
    <?php

    echo "Unsorted Array:- ";
    $array = array(50, 0, 1.2, 60, 70, 80, 55, 2);
    foreach ($array as $x) {
        echo $x, " ";
    }

    for ($i = 1; $i < count($array); $i++) {

        $temp = $array[$i];

        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $temp) {
            $array[$j + 1] = $array[$j];
            $j--;
        }

        $array[$j + 1] = $temp;
    }
    echo "<br><br>Sorted Array:- ";
    foreach ($array as $x) {
        echo $x, " ";
    }


    
    ?>

</body>

</html>