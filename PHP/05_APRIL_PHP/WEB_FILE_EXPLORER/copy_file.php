<?php
session_start();
echo $_SESSION['coppy_file_session'], "<br>";
$from = $_SESSION['link'];

echo $from, "<br>";

$fp = fopen('data.txt', 'a');
fwrite($fp, $from . "\n");
fclose($fp);

$filePath = "data.txt";
$lines = count(file($filePath));
echo $lines;

$dirname = dirname($from);

header("Location:index.php?index=$dirname");
