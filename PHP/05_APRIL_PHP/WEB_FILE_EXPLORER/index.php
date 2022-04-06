<?php
$link = $_GET['index'];

$file = glob("$link/*");
$index = $_SERVER["PHP_SELF"];

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="./css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>WEB FILE EXPLORER</title>

</head>

<body>

    <section class="container-fluid">
        <div class="row">

            <div class="col-xl-12">
                <h1 style="text-align:center;">FILE EXPLORER</h1>
                <hr>

            </div>

            <!-- left_section -->

            <div class="col-xl-3 left_section" style="border: solid 1px;border-radius:15px">
                <h4 class="text-center">SIDE</h4>
                <ul>
                    <?php


                    foreach ($file as $value) {
                        $new_value = basename($value);
                        if (is_file($value)) {
                            echo "<li>
                            <i class='fa-solid fa-file file'></i> $new_value
                            </li>";
                        } else {
                            $directory = $value;
                            $files1 = scandir($directory);
                            $num_files = count($files1) - 2;
                            echo "
                            <li><a href='index.php?index=$value' ><i class='fa-solid fa-folder folder'></i> $new_value
                            </li></a>";
                        }
                    }

                    ?>
                </ul>

            </div>

            <!-- right_section -->

            <div class="col-xl-9" style="border: solid 1px;border-radius:15px">

                <!-- header_section -->

                <div class="row header_section">

                    <div class="col-auto button_padding">
                        <a href="index.php?index=<?php echo pathinfo($link)["dirname"]; ?>" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-circle-arrow-left"></i> BACK</a>
                    </div>

                    <div class="col-auto button_padding">
                        <a href="index.php?index=/home/woc/Dhaval/traning/PHP/05_APRIL_PHP/WEB_FILE_EXPLORER" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-house-chimney"></i> HOME </a>
                    </div>

                    <div class="col-auto button_padding">
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-secondary btn-sm"><i class="fa-solid fa-folder-plus"></i> CREATE</button>
                    </div>

                    <!-- Model For Create Folder -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Folder</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="create_folder.php" method="post">
                                    <div class="modal-body">
                                        <input class="form-control form-control-sm" type="text" name="create_dir" placeholder="Enter Folder Name" aria-label=".form-control-sm example">
                                        <input type="hidden" name="link" value="<?php echo $link ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-auto button_padding">
                        <button data-bs-toggle="modal" data-bs-target="#model_create_file" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-circle-plus"></i> ADD FILE</button>
                    </div>

                    <!-- Model For Create File -->
                    <!-- create -->
                    <div class="modal fade" id="model_create_file" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create File</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="create_file.php" method="post">
                                    <div class="modal-body">
                                        <input class="form-control form-control-sm" type="text" name="create_file" placeholder="Enter File Name" aria-label=".form-control-sm example">
                                        <input type="hidden" name="link" value="<?php echo $link ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto button_padding">
                        <button class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash-can"></i> DELETE</button>
                    </div>




                    <div class="col-auto button_padding">
                        <button class="btn btn-outline-info btn-sm"><i class="fa-solid fa-scissors"></i> CUT</button>
                    </div>


                    <div class="col-auto button_padding">
                        <button class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-copy"></i> COPY</button>
                    </div>


                    <div class="col-auto button_padding">
                        <button class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-paste"></i> PASTE</button>
                    </div>


                    <div class="col-auto button_padding">
                        <button class="btn btn-outline-secondary btn-sm"><i class="fa-solid fa-pen-to-square"></i> RENAME</button>
                    </div>

                </div>

                <!-- main_body -->

                <div class="row main_body">

                    <?php

                    foreach ($file as $value) {
                        $new_value = basename($value);
                        if (is_file($value)) {
                            echo "<div class='col-2 main_padding'>
                            <a href='index.php?index=$value'>
                            <ul>
                            <li><i class='fa-solid fa-file main_body_element_size file'></i></li>
                            <li>$new_value</li>
                            </ul>   
                            </a>
                            </div>
                            ";
                        } else {
                            echo "
                                <div class='col-2 main_padding' >
                                <a href='index.php?index=$value'>
                                    <ul>
                                        <li><i class='fa-solid fa-folder main_body_element_size folder'></i></li>
                                        <li>$new_value</li>
                                    </ul>   
                                </a>
                                </div>
                            ";
                        }
                    }



                    ?>


                </div>



            </div>

        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>