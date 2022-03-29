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

    echo "<hr>";

    //Pattern_2
    echo "<h4>Pattern_2 :-</h4>";

    $n2 = 10;
    $a2 = $n2;
    for ($i = 0; $i < $a2; $i++) {
        for ($j = 0; $j < $n2; $j++) {
            echo $j + 1, " ";
        }
        echo "<br>";
        $n2--;
    }

    echo "<hr>";

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



    //Pattern 4
    echo "<h4>Pattern_4:-</h4>";

    $n4 = 5;
    $num = 1;
    $count = 1;
    for ($i = 0; $i < $n4; $i++) {
        for ($j = -$n4 + 1; $j < $n4; $j++) {

            for ($k = 0; $k < $n4; $k++) {
                if ($i - abs($j) == $k) {
                    echo "&nbsp;";
                    echo $i + $k + 1;
                }
            }

            if ($i + $j < 0) {
                echo "&nbsp;&nbsp;&nbsp;";
            }


            // if ($j == 0) {
            //     echo  $num, " ";
            //     $num = $num + 2;
            // } 
            // else if ($i == abs($j)) {
            //     echo abs($j) + 1, " ";
            // }
            // else if($i-abs($j)==1)
            // {   
            //     echo $i + 2, " ";
            // }

            // else if($i-abs($j)==2)
            // {   
            //     echo $i + 3, " ";
            // }

            // else if($i-abs($j)==3)
            // {   
            //     echo $i + 4, " ";
            // }

            // else {
            //     echo "&nbsp;&nbsp;&nbsp;";
            // }



        }
        echo "<br>";
    }
    echo "<hr>";

    //Pattern 5
    echo "<h4>Pattern_5:-</h4>";

    $n5 = 10;
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

    //Pattern_6
    echo "<h4>Pattern_6 :-</h4>";
    $a1 = 10;
    $n1 = $a1;
    for ($i = 0; $i < $a1; $i++) {
        for ($j = 0; $j < $n1; $j++) {

            if ($i + $j == $a1 - 1) {
                echo $a1, " ";
            } else if ($j == 0) {
                echo $i + 1, " ";
            } else if ($i == 0) {
                echo $j + 1, " ";
            } else {
                echo "&nbsp;&nbsp;&nbsp;";
            }
        }
        echo "<br>";
        $n1--;
    }

    ?>
</body>

</html>