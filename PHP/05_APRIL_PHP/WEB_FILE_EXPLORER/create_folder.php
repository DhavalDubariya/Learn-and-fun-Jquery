<?php

$link = $_POST['link'];
$check_folder_exists = $_POST["create_dir"];

if (empty($check_folder_exists)) {
    header("Location:index.php?index=$link&Error_empty=true");
} else {
    function folder($folder_name)
    {
        $link = $_POST['link'];
        $check_folder_exists = $_POST["create_dir"];

        $num = 1;
        while (file_exists($link . "/" . $check_folder_exists)) {
            $check_folder_exists = (string) $check_folder_exists . ($num);
            echo $check_folder_exists;
            $name = $check_folder_exists;
            $num++;
        }
        $link_glob_new = $link . "/" . $name;
        mkdir("$link_glob_new");
    }

    $trim = trim($_POST["create_dir"]);
    $implode = implode("", explode("\\", $trim));
    $slashes = stripslashes($implode);
    $check_folder_exists = htmlspecialchars($slashes);

    $check = preg_match("/^[a-zA-Z0-9]+$/", $check_folder_exists);
    if ($check == 0) {
        header("Location:index.php?index=$link&Error_valid=true");
        die();
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
    mkdir($new_folder);



    header("Location:index.php?index=$link");
}
