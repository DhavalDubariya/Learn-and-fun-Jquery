<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function remover_space($number)
    {   
       
    }


    $n = 7;
    for ($i = 0; $i < $n; $i++) {
        for ($j = -$n + 1; $j < $n; $j++) {
            if ($j == 0) {
                $space = (2 * $i) + 1;
                remover_space($space);
            } else if ($i == abs($j)) {
                echo abs($j) + 1;
            } else if ($i > abs($j)) {
                echo 2 * $i + 1 - abs($j);
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }

    ?>
</body>

</html>