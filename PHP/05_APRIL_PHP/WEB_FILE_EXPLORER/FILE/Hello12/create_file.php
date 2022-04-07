 <?php
$link = $_POST['link'];
$file = $_POST['link'] . "/" . $_POST['create_file'];
$myfile = fopen($file, 'w');
fclose($myfile);
header("Location:index.php?index=$link");
