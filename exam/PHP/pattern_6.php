<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern_6</title>
</head>

<body>
    <?php
    //Pattern_6
    echo "<h4>Pattern_6 :-</h4>";
    $n6 = 10;
    for ($i = 0; $i < $n6; $i++) {
        for ($j = 0; $j < $n6; $j++) {

            $toBePrinted = "&nbsp;&nbsp;&nbsp;";

            if ($i + $j == $n6 - 1) {
                $toBePrinted =  $n6. " ";
            } else if ($j == 0) {
                $toBePrinted = ($i + 1). " ";
            } else if ($i == 0) {
                $toBePrinted = ($j + 1). " ";
            }

            echo $toBePrinted;

        }
        echo "<br>";
    }
    ?>
</body>

</html>