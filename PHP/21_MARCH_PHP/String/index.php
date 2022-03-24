<?php

// function myfunction($a,$b){


//     if($a===$b)
//     {
//         echo $a,"-";
//         echo $b,"<br>";
//     }


// }

$array1 = array("a" => "green", "b" => "brown", "c" => "blue");
$array2 = array("a" => "GREEN", "B" => "brown", "f" => "blue");

print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));

echo "<br>";

// echo strcasecmp("Hello world!", "hello WORLD!"), "<br>";

$array1 = array("array"=>"green","b"=>"brown", 3=>"blue", 4=>"red");
$array2 = array("array"=>"green","B"=>"Brown", 3=>"blue", 4=>"red");
$result_array = array_intersect_uassoc($array1, $array2, "strcasecmp");
print_r($result_array);
    