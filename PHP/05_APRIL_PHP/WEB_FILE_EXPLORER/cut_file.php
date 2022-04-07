<?php
session_start();
echo $_SESSION['coppy_file_session'], "<br>";
$from = $_SESSION['link'];

echo $from, "<br>";

$fp = fopen('data_cut.txt', 'a');
fwrite($fp, $from . "\n");
fclose($fp);

$filePath = "data.txt";
$lines = count(file($filePath));
echo $lines;

// $empty = fopen('data.txt','w');
// fwrite($empty,"");
// fclose($empty);

// echo basename($from);
// $to = "/home/woc/Dhaval/traning/PHP/05_APRIL_PHP/WEB_FILE_EXPLORER/FILE/Hello12/".basename($from);
// echo $to;
// echo copy("$from", "$to");

header("Location:index.php?index=$from");
