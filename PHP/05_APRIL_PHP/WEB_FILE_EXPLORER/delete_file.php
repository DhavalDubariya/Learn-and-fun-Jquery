<?php
session_start();

echo $_SESSION['delete_file_session'] . "<br>";

$file = $_SESSION['link'];

$all_data = $_SESSION['all_data'];

foreach($all_data as $key=>$value)
{
    echo $key.":-".$value."<br>";
    if(is_file($value))
    {
        unlink($_SESSION['link']);
    }

}

print_r($all_data);

// // if(is_file($file))
// // {
// //    unlink($_SESSION['link']);
// // }
// // else
// // {
// //     rmdir($_SESSION['link']);
// // }


// // $return = dirname($file);

// header("Location:index.php?index=$return");
