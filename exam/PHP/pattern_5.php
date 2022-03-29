<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern_5</title>
</head>

<body>
    <?php

    //Pattern 5
    echo "<h4>Pattern_5:-</h4>";

    $n5 = 5;
    $num = 1;
    for ($i = 0; $i < $n5; $i++) {
        for ($j = -$n5 + 1; $j < $n5; $j++) {
            if ($i == $n5 - 1) {
                if ($n5 % 2 == 0) {
                    if (abs($j) % 2 !== 0) {
                        echo $num++;
                    } else {
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                } else {
                    if (abs($j) % 2 == 0) {
                        echo $num++;
                    } else {
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                }
            } else if ($i + $j == 0 && $j < 0) {
                echo "1 ";
            } else if ($i == $j) {
                echo $i + 1;
            } else {
                echo "&nbsp;&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "<hr>";


    ?>
</body>

</html>