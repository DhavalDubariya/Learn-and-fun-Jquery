<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    echo "<h1 style='text-align:center' >Pattern Program</h1>";

    //Pattern_1
    echo "<h4>Pattern_1 :-</h4>";

    $n = 10;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $j + 1, " ";
        }
        echo "<br>";
    }
    ?>
</body>

</html>