<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>

<body>
    <h1 style="text-align: center;">File Handling</h1>


    <?php
    echo "<h4>readfile():-It is useful if all you want to do is open up a file and read its contents.
        </h4>";

    echo readfile('test_txt_1.txt');

    echo "<hr>";

    echo "<h4>fopen():-contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.</h4>";

    $myfile = fopen("test_txt_1.txt", "r+") or die("Unable to open file!");
    echo fread($myfile, filesize("test_txt_1.txt"));

    echo "<br><br>File Size:- " . filesize("test_txt_1.txt");
    echo "<hr>";

    echo "<h4>fwrite():-Writes to an open file (binary-safe).</h4>";
    $myfile = fopen("test_txt_1.txt", "a") or die("Unable to open file!");
    fwrite($myfile, "-");
    fclose($file);
    echo "<hr>";

    echo "<h4>fgets():- It is used to read a single line from a file.</h4>";

    $myfile = fopen("test_txt_1.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);

    echo "<hr>";

    echo "<h4>feof:-function checks if the end-of-file (EOF) has been reached.</h4>";

    $myfile = fopen("test_txt_1.txt", "r") or die("Unable to open file!");
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);

    echo "<hr>";

    echo "<h4>fgetc():-function is used to read a single character from a file</h4>";

    $myfile = fopen("test_txt_1.txt", "r") or die("Unable to open file!");

    while (!feof($myfile)) {
        echo fgetc($myfile), "-";
    }
    fclose($myfile);
    echo "<hr>";

    echo "<h4>basename():-Return filename from the specified path</h4>";
    $path = "/01_APRIL_PHP/test_txt_1.txt";

    echo basename($path) . "<br/>";

    echo basename($path, ".txt");
    echo "<hr>";

    echo "<h4>chgrp():- Change the usergroup to admin for the test.txt file.</h4>";
    echo "Error !!!";
    // echo chgrp("test_txt_1.txt","admin");

    echo "<hr>";

    echo "<h4>Copy():-Copy file</h4>";
    echo copy("test_txt_1.txt", "test.txt");

    echo "<hr>";

    echo "<h4>dirname():-Return the path of the parent directory.</h4>";

    echo dirname("c:/test/php/home.php") . "<br />";
    echo dirname("c:/php/home.php", 2) . "<br />";
    echo dirname("/php/home.php");

    echo "<hr>";

    echo "<h4>echo disk_free_space():-Return the free space, in bytes, of the C: directory:

    </h4>";

    echo disk_free_space("Computer");

    echo "<hr>";

    echo "<h4>disk_total_space():-Return the total size, in bytes, of the C directory</h4>";
    disk_total_space("/");
    echo "<hr>";

    echo "<h4>fflush():-Write all buffered output to the open file:

    </h4>";

    echo "Error !!!";

    $file = fopen("test_txt_1.txt", "r+");
    rewind($file);
    echo fwrite($file, 'Hello World');
    fflush($file);

    fclose($file);
    echo "<hr>";

    echo "<h4>fgetcsv():- Read and get line from the open CSV file.</h4>";

    $file = fopen("csv_test.csv", "r");

    while (!feof($file)) {
        echo fgetcsv($file)[0], "<br>";
    }

    fclose($file);

    echo "<hr>";

    echo "<h4>file_exists():-Check whether a file exists or note</h4>";

    if (file_exists("test.txt") == 1) {
        echo "File Exists<br>";
    } else {
        echo "File Not Exists<br>";
    }

    if (file_exists("sadsad.txt") == 1) {
        echo "File Exists<br>";
    } else {
        echo "File Not Exists<br>";
    }

    echo "<hr>";

    echo "<h4>file_get_contents():- Read a file as a string.</h4>";
    echo file_get_contents("test.txt");

    echo "<hr>";

    echo "<h4>file_put_contents():-Write data to a file.(owerwrite data)</h4>";

    echo file_put_contents("test.txt", "WEBOCCULT TECNOLOGIES");

    echo "<hr>";

    echo "<h4>fileatime():-Give last access time of file.</h4>";

    echo fileatime("csv_test.csv");
    echo "<br>";

    echo "Last access: " . date("F d Y H:i:s.", fileatime("csv_test.csv"));

    echo "<hr>";

    echo "<h4>filegroup():-Return the group ID of File.</h4>";

    echo "Error !!!";

    echo filegroup("test.txt");

    echo "<hr>";

    echo "<h4>fileowner():- Return File owner id</h4>";
    echo fileowner("test.txt");

    echo "<hr>";
    echo "<h4>fileperms():-Display permissions as an octal value.</h4>";
    echo substr(sprintf("%o", fileperms("test.txt")), -4);
    echo "<hr>";

    echo "<h4>filesize():- Return File Size.</h4>";

    echo filesize("test.txt"), "<br>";
    echo filesize("test_txt_1.txt");
    echo "<hr>";

    echo "<h4>filetype():-Return the file type</h4>";
    echo filetype("test.txt"), "<br>";
    echo filetype("dhaval.jpg");
    echo "<hr>";

    echo "<h4>flock():-Lock and release a file.</h4>";
    $file = fopen("test.txt", "w+");

    // exclusive lock
    if (flock($file, LOCK_EX)) {
        fwrite($file, "Add some text to the file.");
        fflush($file);
        flock($file, LOCK_UN);
    } else {
        echo "Error locking file!";
    }
    fclose($file);

    echo "<hr>";

    echo "<h4>fnmatch():-Checking a color name against a shell wildcard pattern:

    </h4>";

    echo "Error !!!";

    $txt = "My car is a dark color";
    if (fnmatch("*col[ou]r", $txt)) {
        echo "Match Found";
    } else {
        echo "cant find the match";
    }


    echo "<hr>";
    echo "<h4>fpassthru():- Read from the current position in file - until EOF, and then write the remaining data to the output buffer.</h4>";
    $file = fopen("test_txt_1.txt", "r");

    fgets($file);

    echo fpassthru($file);
    fclose($file);

    echo "<hr>";
    echo "<h4>fputcsv():- Format a line as CSV and writes it to an open file. </h4>";

    $list = array(
        array("Peter", "Griffin", "Oslo", "Norway"),
        array("Glenn", "Quagmire", "Oslo", "Norway"),
        array("sadsad", "Quagmire", "Oslo", "Norway"),
        array("Glensadasn", "Quagmire", "Oslo", "Norway"),
        array("sd", "Quagmire", "Oslo", "Norway"),
        array("dsads", "Quagmire", "Oslo", "Norway"),
    );

    $file = fopen("contacts.csv", "w");
    foreach ($list as $line) {
        fputcsv($file, $line);
    }


    $file = fopen("contacts.csv", "r");

    while (!feof($file)) {
        echo fgetcsv($file)[0], "<br>";
    }


    fclose($file);

    fclose($file);


    echo "<hr>";

    echo "<h4>fread():- Read 10 bytes from an open file.</h4>";

    $file = fopen("test_txt_1.txt", "r");
    echo fread($file, "3");
    fclose($file);

    echo "<hr>";

    echo "<h4>fstat():- Return information about file</h4>";
    $file = fopen("test.txt", "r");
    print_r(fstat($file));
    fclose($file);

    echo "<hr>";
    echo "<h4>ftell():-Return the current position of the read/write pointer in an open file.</h4>";
    $file = fopen("test_txt_1.txt", "r");

    echo ftell($file);
    fseek($file, "2");
    echo "<br>" . ftell($file);
    fgets($file);
    fclose($file);
    echo "<hr>";

    echo "<h4>glob():-Return an array of filenames or directories that matches the specified pattern.</h4>";
    $array = glob("*.jpg");
    foreach ($array as $x) {
        echo $x, "<br>";
    }
    echo "<hr>";

    echo "<h4>is_dir():-Check Given specified filename is directory or note.</h4>";

    $file = "test_folder";
    if (is_dir($file)) {
        echo ("$file is a directory");
    } else {
        echo ("$file is not a directory");
    }

    echo "<h4>is_executable():-Check whether the specified filename is executable.</h4>";

    $file = "test_exe.exe";
    if (is_executable($file)) {
        echo ("$file is executable");
    } else {
        echo ("$file is not executable");
    }

    echo "<hr>";


    echo "<h4>is_file():-Check whether the specified filename is a regular file.</h4>";

    $file = "test.txt";
    if (is_file($file)) {
        echo ("$file is a regular file");
    } else {
        echo ("$file is not a regular file");
    }
    echo "<hr>";


    echo "<h4>is_link():-Chack whether the specified filename is link or not</h4>";

    echo "";

    $link = 'uploads.php';

    if (is_link($link)) {
        echo "$link Is Link";
    } else {
        echo "$link Is Not A Link";
    }


    echo "<hr>";


    echo "<h4>is_readable:-Check whether the specified filename is readable.</h4>";

    $file = "test.txt";
    if (is_readable($file)) {
        echo ("$file is readable");
    } else {
        echo ("$file is not readable");
    }


    echo "<hr>";


    echo "<h4>is_uploaded_file():-Check whether the specified filename is uploaded via HTTP POST.</h4>";

    $file = "test.txt";
    if (is_uploaded_file($file)) {
        echo ("$file is uploaded via HTTP POST");
    } else {
        echo ("$file is not uploaded via HTTP POST");
    }

    echo "<hr>";


    echo "<h4>is_writable():-Check whether the specified filename is writable.</h4>";

    $file = "test.txt";
    if (is_writable($file)) {
        echo ("$file is writable");
    } else {
        echo ("$file is not writable");
    }
    echo "<hr>";


    echo "<h4>lchgrp():-Change the group ownership of a symbolic link.</h4>";

    $target = "downloads.php";
    $link = "downloads";
    symlink($target, $link);

    print_r(lchgrp($link, 8));

    echo "<hr>";


    echo "<h4>link():-Create a hard link.</h4>";

    echo "Error !!!";

    $target = "text.txt";
    $linkname = "mylink";

    link($target, $linkname);

    echo "<hr>";


    echo "<h4>mkdir():-Create a directory</h4>";
    mkdir("mkdir");

    echo "<hr>";

    echo  "<h4>parse_ini_file():-print Contents of test.ini</h4>";

    foreach (parse_ini_file("test.ini") as $x) {
        echo $x, "<br>";
    }

    echo "<hr>";

    echo "<h4>parse_ini_string():- Parse an ini string.</h4>";
    $ini = '
            [names]
            me = "Dhaval"
            you = "Dubariya"

            [urls]
            first = "http://www.google.com"
            second = "https://www.aryavarta.com"
            ';
    foreach (parse_ini_string($ini) as $x) {
        echo $x, "<br>";
    }
    echo "<hr>";

    echo "<h4>pathinfo():-Give info about file path</h4>";

    // print_r(pathinfo("/testweb/test.txt"));
    foreach (pathinfo("/testweb/test.txt") as $key => $value) {
        echo $key . ":-" . $value, "<br>";
    }

    echo "<hr>";

    echo "<h4>pclose():-Open and close a pipe to the program specified in the command parameter.</h4>";

    $file = popen("/bin/ls", "r");
    echo "Error !!!";

    pclose($file);


    echo "<hr>";

    echo "<h4>realpath():-Returns the absolute pathname.</h4>";
    echo realpath("test.txt");
    echo "<hr>";

    echo "<h4>realpath_cache_get():-Return realpath cache entries.</h4>";
    var_dump(realpath_cache_get());
    echo "<hr>";

    echo "<h4>realpath_cache_size():-Return realpath cache size.</h4>";
    var_dump(realpath_cache_size());
    echo "<hr>";

    echo "<h4>rename():- Change file name and directory</h4>";

    rename("dhaval.jpg", "image.jpg");
    rename("/test/file1.txt", "/home/docs/my_file.txt");

    echo "<hr>";

    echo "<h4>rewind():- Rewind the position of the file pointer to biginning of the file.</h4>";
    $file = fopen("test.txt", "r");

    fseek($file, "15");
    rewind($file);

    fclose($file);

    echo "<hr>";

    echo "<h4>rmdir():-Remove images directory.</h4>";

    $path = "mkdir";
    if (!rmdir($path)) {
        echo ("Could not remove $path");
    }

    echo "<hr>";

    echo "<h4>set_file_buffer():-Create an unbuffered stream.</h4>";

    echo "Error !!!";

    $file = fopen("test.txt", "w");
    if ($file) {
        set_file_buffer($file, 0);
        fwrite($file, "Hello World. Testing!");
        fclose($file);
    }


    echo "<hr>";

    echo "<h4>symlink():-Create a symbolic link.</h4>";

    echo "Error !!!";

    // $target = "downloads.php";
    // $link = "downloads";
    // symlink($target, $link);
    // echo readlink($link);

    echo "<hr>";

    echo "<h4>tempnam():-Create a temporary file with a unique name in the specified directory.</h4>";

    echo tempnam("\home\woc\Dhaval\traning\PHP\01_APRIL_PHP", "TMP0");

    echo "<br>";

    echo "<h4>tempfile():-Create a temporary file with a unique name in read-write (w+) mode:

    </h4>";

    $temp = tmpfile();

    fwrite($temp, "Testing, testing Hello.");

    rewind($temp);

    echo fread($temp, 1024);

    fclose($temp);

    echo "<br>";

    echo "<h4></h4>";

    echo "<br>";

    echo "<h4>The umask():-function changes the file permissions for files.</h4>";

    // $file = "test.txt";
    // echo (umask());


    echo "<h4>unlink:-Delete File.</h4>";

    // $file = fopen("test.txt", "w");
    // echo fwrite($file, "Hello World. Testing!");
    // fclose($file);

    // unlink("test.txt");


    ?>


</body>

</html>