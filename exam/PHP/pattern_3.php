<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern_3</title>
</head>

<body>
    <?php

    //Pattern_3
    echo "<h4>Pattern_3 :-</h4>";

    $n3 = 10;
    for ($k = 0; $k < $n3; $k++) {
        for ($l = 0; $l <= $k; $l++) {
            if ($k == $l || $k == $n3 - 1 || $l == 0) {
                echo $l + 1, " ";
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