<?php

$link = $_POST['link'];
$check_folder_exists = $_POST["create_dir"];

function folder($folder_name)
{
    $link = $_POST['link'];
    $check_folder_exists = $_POST["create_dir"];

    $num = 1;
    while (file_exists($link."/".$check_folder_exists)) {
        $check_folder_exists = (string) $check_folder_exists . ($num);
        // echo $check_folder_exists;
        $name = $check_folder_exists;
        $num++;
    }   
    $link_glob_new = $link . "/" . $name;
    mkdir("$link_glob_new");
}

$new_folder = "$link/$check_folder_exists";

foreach (glob("$link/*") as $key => $value) {
    // echo $key . ":-" . $value, "<br>";
    if ($value == $new_folder) {
        folder($value);
        //mkdir("$link/$new");
    } else {
        mkdir($value);
    }
}

header("Location:index.php?index=$link");