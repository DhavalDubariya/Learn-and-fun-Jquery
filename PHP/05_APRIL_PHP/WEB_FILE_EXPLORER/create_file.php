 <?php
    $link = $_POST['link'];

    // $file = $_POST['link'] . "/" . $_POST['create_file'];
    // $myfile = fopen($file, 'w');
    // fclose($myfile);
    // header("Location:index.php?index=$link");
    if (!empty($_POST['create_file'])) {
        $isfile = strrpos($_POST['create_file'], '.');
        if (empty($isfile) == false) {
            $file = $_POST['link'] . "/" . $_POST['create_file'];
            $myfile = fopen($file, 'w');
            fclose($myfile);
            header("Location:index.php?index=$link");
            die();
        } else {
            header("Location:index.php?index=$link&Error_valid=true");
            die();
        }
    } else {
        header("Location:index.php?index=$link&Error_valid=true");
        die();
    }
    ?>