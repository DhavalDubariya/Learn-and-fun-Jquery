<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Sort</title>
</head>

<body>
    <h1 style="text-align:center">Quick Sort</h1>

    <?php

    function divide(&$array, $left, $right)
    {
        $pivot = $array[($left + $right) /   2];

        while ($left<=$right)
        {
            while ($array[$left] < $pivot)
            {
                $left++;
            }

            while ($array[$right] > $pivot)
            {
                $right--;
            }
            
            if ($left <= $right)
            {
                $tmp = $array[$left];
                $array[$left] = $array[$right];
                $array[$right] = $tmp;

                $left++;
                $right--;
            }
        }
        return $left;
    }

    function quickSort(&$array, $left, $right)
    {
        $index = divide($array, $left, $right);
        if ($left < $index - 1)
        {
            quickSort($array, $left, $index - 1);
        }
        if ($index < $right)
        {
            quickSort($array, $index, $right);
        }
        
    }

    $array = array(50, 0, 1.2, 60, 70, 80, 55, 2);
    echo "Unsorted Array:-";
    foreach($array as $x)
    {
        echo $x," ";
    }
    quickSort($array,0,count($array)-1);
    echo "<br>Sorted Array:-";
    foreach($array as $x)
    {
        echo $x," ";
    }

    ?>
</body>

</html>