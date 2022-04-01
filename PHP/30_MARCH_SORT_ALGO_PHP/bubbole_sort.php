<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubbole Sort</title>
</head>

<body>
    <h1 style="text-align: center;" >Bubbole Sort</h1>
    <?php
    echo "Unsorted Array:- ";
    $array = array(50, 0, 1.2, 60, 70, 80, 55, 2);
    foreach ($array as $x) {
        echo $x, " ";
    }

    for ($i = 0; $i < count($array); $i++) {

        for ($j = 0; $j < count($array) - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
                //echo $array[$j]." ".$array[$j+1]."<br>";
            }
        }
    }
    echo "<br><br>Sorted Array:- ";
    foreach ($array as $x) {
        echo $x, " ";
    }



    ?>
</body>

</html>