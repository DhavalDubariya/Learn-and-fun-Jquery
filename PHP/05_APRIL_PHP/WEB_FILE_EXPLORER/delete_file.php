<?php
session_start();

echo $_SESSION['delete_file_session'] . "<br>";

$link = $_SESSION['link'];

$all_data = $_SESSION['all_data'];


// print_r($all_data);

delete($link, $all_data);

function delete($path, $data_1)
{

    if (is_file($path)) {
        unlink($path);
    } else {
        if (empty($path) == 1) {
            rmdir($_SESSION['link']);
            die();
        } else {
            foreach ($data_1 as $key => $value) {
                // echo $key . " : -" . $value . "<br>";
                $data = glob("$value/*");
                if (empty(glob("$value/*")) == 0) {
                    delete($value, $data);
                } else {
                    rmdir($value);
                    unlink($value);
                }
            }
        }
    }
    rmdir($path);
}

$return = dirname($link);

header("Location:index.php?index=$return");
