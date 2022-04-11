<?php

error_reporting(E_ALL);
session_start();

echo $_SESSION['paste'], "<br>";

$link = $_SESSION['link'];

$myfile = fopen("data.txt", "r") or die("Unable to open file!");

$from = fgets($myfile);

fclose($myfile);

$trim = trim($from);

$to = $_SESSION['link'] . "/" . basename($from);

echo "from  : - " . $from . "<br><br>";

echo "basename : - " . basename($from) . "<br><br>";

echo "to : - " . $to . "<br><br>";

echo "Root : - " . $_SERVER["DOCUMENT_ROOT"] . "<br><br>";

$substr = (string)substr($from, 59);

$copy = (string)$_SERVER["DOCUMENT_ROOT"] . $substr . "<br>";
// copy("index.php","css/index.php");

if (!copy($trim, $to)) {
    echo "Error  !!! faild to copy<br><br> from : - $from<br> to : - $to";
}

header("Location:index.php?index=$link");

$myfile = fopen("data.txt", "w") or die("Unable to open file!");
fread($myfile, filesize("data.txt"));
fclose($myfile);



// echo $from, "<br>";
// echo basename($from), "<br>";

// $basename = basename($from);
// $to = $_SESSION['link'] . "/dhaval123.php";
// echo $to."<br/>";

// //echo copy('/home/woc/Dhaval/traning/PHP/05_APRIL_PHP/WEB_FILE_EXPLORER/test.php',$to);

// if (!copy($_SERVER["DOCUMENT_ROOT"].'/test.php', $to)) {
//     echo "failed to copy $from...\n";
// }
