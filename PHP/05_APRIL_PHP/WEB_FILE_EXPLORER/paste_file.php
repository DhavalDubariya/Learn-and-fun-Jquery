<?php

error_reporting(E_ALL);
session_start();

echo $_SESSION['paste'], "<br>";

$link = $_SESSION['link'];

$myfile = fopen("data.txt", "r") or die("Unable to open file!");

$from = fgets($myfile);

fclose($myfile);

$to = $_SESSION['link'] ."/". basename($from);

echo "from  : - " . $from . "<br><br>";

echo "basename : - " . basename($from) . "<br><br>";

echo "to : - ".$to . "<br><br>";

echo "Root : - ".$_SERVER["DOCUMENT_ROOT"] . "<br><br>";

copy("index.php","css/index.php");

if(!copy($_SERVER["DOCUMENT_ROOT"].'/FILE/Dhaval/Hello12/01.php',$to))
{
    echo "Error  !!! faild to copy<br><br> from : - $from<br> to : - $to";
}



// echo $from, "<br>";
// echo basename($from), "<br>";

// $basename = basename($from);
// $to = $_SESSION['link'] . "/dhaval123.php";
// echo $to."<br/>";

// //echo copy('/home/woc/Dhaval/traning/PHP/05_APRIL_PHP/WEB_FILE_EXPLORER/test.php',$to);

// if (!copy($_SERVER["DOCUMENT_ROOT"].'/test.php', $to)) {
//     echo "failed to copy $from...\n";
// }

// header("Location:index.php?index=$link");
