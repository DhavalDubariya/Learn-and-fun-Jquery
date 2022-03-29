<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern_2</title>
</head>

<body>
    <?php
    //Pattern_2
    echo "<h4>Pattern_2 :-</h4>";

    $n2 = 10;

    $num = 1;
    for ($i = 0; $i < $n2; $i++) {
        for ($j = $n2 - $i; $j >= 1; $j--) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
        $num = 1;
    }
    ?>
</body>

</html>