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

    $n4 = 50;
    $num = 1;
    $count = 1;

    echo "<table style='text-align:center' >";

    for ($i = 0; $i < $n4; $i++) {
        echo "<tr>";
        for ($j = -$n4 + 1; $j < $n4; $j++) {
            echo "<td>";
            if ($j == 0) {
                echo (2 * $i) + 1;
            } else if ($i == abs($j)) {
                echo abs($j) + 1;
            } else if ($i > abs($j)) {
                echo (2 * $i) + 1 - abs($j);
            }

            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";







    ?>

</body>

</html>