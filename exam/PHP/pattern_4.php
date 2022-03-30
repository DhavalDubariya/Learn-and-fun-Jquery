<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern_4</title>
</head>

<body>
    <?php
    echo "<h4>Pattern_4:-</h4>";

    $n4 = 70;
    $num = 1;
    $count = 1;
    for ($i = 0; $i < $n4; $i++) {
        for ($j = -$n4 + 1; $j < $n4; $j++) {

            for ($k = 0; $k < $n4; $k++) {

                if ($i - abs($j) == $k) {
                    $number = $i + $k + 1;
                    if (strlen($number) == 1) {
                        echo "&nbsp;&nbsp;&nbsp;" . sprintf("%2d", $number), "&nbsp;";
                    } else if (strlen($number) == 2) {
                        echo "&nbsp;&nbsp;" . sprintf("%2d", $number), "&nbsp;";
                    } else if (strlen($number) == 3) {
                        echo sprintf("%2d", $number), "&nbsp;";
                    }
                }
            }
            if ($i + $j < 0) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }


    



    ?>

</body>

</html>