
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Sort</title>
</head>
<body>
    
</body>
</html>
    <h1 style="text-align:center" >
        Merge Sort
    </h1>
<?php


$test_array = array(50, 0, 1.2, 60, 70, 80, 55, 2);
echo "Original Array : ";
foreach ($test_array as $x)
{
    echo $x." ";
}


function merge_sort($array)
{
    if (count($array) == 1)
    {
        return $array;    
    }
    
    $mid = (int)(count($array) / 2);

    $left = array_slice($array, 0, $mid);
       
    $right = array_slice($array, $mid);

    $left = merge_sort($left);
    
    $right = merge_sort($right);
    
    return merge($left, $right);
}
function merge($left, $right)
{
    $one_arr = array();
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] > $right[0]) 
        {
            $one_arr[] = $right[0];
            $right = array_slice($right, 1);
        } 
        else 
        {
            $one_arr[] = $left[0];
            $left = array_slice($left, 1);
        }
    }
    while (count($left) > 0) 
    {
        $one_arr[] = $left[0];
        $left = array_slice($left, 1);
    }
    while (count($right) > 0)
    {
        $one_arr[] = $right[0];
        $right = array_slice($right, 1);
    }
    return $one_arr;
}
echo "<br>Sorted Array :";
$marge_sort = merge_sort($test_array);

foreach($marge_sort as $x)
{
    echo $x," ";
}   

?>