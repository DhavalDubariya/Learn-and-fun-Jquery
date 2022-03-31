<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Sort</title>
</head>

<body>
    <h1 style="text-align: center;">Selection Sort</h1>

    <?php


    echo "Unsorted Array:- ";
    $array = array(50, 0, 1.2, 60, 70, 80, 55, 2);
    foreach ($array as $x) {
        echo $x, " ";
    }

    for ($i = 0; $i < count($array); $i++) {
        $minimum = $i;

        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$minimum]) {
                $minimum = $j;
            }
        }
        $temp = $array[$minimum];
        $array[$minimum] = $array[$i];
        $array[$i] = $temp;
    }
    echo "<br><br>Sorted Array:- ";
    foreach ($array as $x) {
        echo $x, " ";
    }
    ?>
</body>

</html>