 <?php
    $link = $_POST['link'];

    if (!empty($_POST['create_file'])) {

        $isfile = strrpos($_POST['create_file'], '.');

        if (empty($isfile) == false) {

            $extension = pathinfo($_POST['create_file'], PATHINFO_EXTENSION);
            if ($extension === "txt" || $extension === "xls" || $extension === "png" || $extension === "jpeg" || $extension === "jpg") {
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
    } else {
        header("Location:index.php?index=$link&Error_valid=true");
        die();
    }
    ?>