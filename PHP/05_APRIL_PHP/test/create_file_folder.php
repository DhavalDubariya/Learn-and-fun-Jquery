<?php


$link = $_POST['link'];
$f_name = $_POST["create_dir"];

$elements = glob("$link/*");

// echo $f_name."<br>";
// echo $link."<br>";

create_folder($f_name, $link);

function create_folder($folder_name, $folder_pos)
{
    // echo $folder_name . "<br>";
    // echo $folder_pos . "<br>";
    $glob  = glob("$folder_pos/*");
    mkdir("");
    foreach ($glob as $key => $value) {
        // echo $key ." : -" .$value ."<br>";
        $basename = basename($value);
        // echo $basename."<br>";
        if ($basename == $folder_name) {
            $last = substr($folder_name, -1);
            $first = substr($folder_name, 0, -1);

            if (is_int($last) == 0) {
                $new_last = (int) $last + 1;
                echo $new_last . "<br>";
                // $new_name =  $folder_name . $new_last;
                mkdir($new_last);
                create_folder($new_last, $folder_pos);
            } else {
                echo "Heloo Int ll" . "<br>";
            }
        }
        else
        {
            echo "hello";
        }
    }
}

// function repete($new_name,$folder_pos)
// {
//     $glob  = glob("$folder_pos/*");
//     foreach($glob as $key => $value)
//     {
//         if($value == $new_name)
//         {

//         }
//     }
// }

// if(!empty($f_name))
// {
//     echo $f_name;   
// }
// else
// {
//     // header("Location:index.php?index=$link&Error_empty=true");
// }
