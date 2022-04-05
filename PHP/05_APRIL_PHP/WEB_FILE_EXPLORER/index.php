<?php
$file = glob("FILE/*");
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
    <?php
    if (isset($_POST["create_dir"])) {
        $new = $_POST["create_dir"];
        mkdir("FILE/$new");
    }
    ?>
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
                        if (is_file($value)) {
                            echo "<li>
                            <i class='fa-solid fa-file'></i> $value
                            </li>";
                        } else {
                            echo "
                            <li><i class='fa-solid fa-folder'></i> $value
                            </li>";
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
                        <button class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-house-chimney"></i> HOME </button>
                    </div>

                    <div class="col-auto button_padding">
                        <a href="<?php echo $_SERVER["PHP_SELF"]; ?>?create=true" class="btn btn-outline-secondary btn-sm"><i class="fa-solid fa-folder-plus"></i> CREATE</a>
                    </div>
                    
                    <!-- create -->

                    <div class="col-auto button_padding">
                        <button class="btn btn-outline-success btn-sm"><i class="fa-solid fa-circle-plus"></i> ADD FILE</button>
                    </div>

                    <div class="col-auto button_padding">
                        <button class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash-can"></i> DELETE</button>
                    </div>

                    <div class="col-auto button_padding">
                        <button class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-circle-arrow-left"></i> BACK</button>
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


                    <?php

                    if ($_GET["create"] == true) {

                    echo '
                        <form method="post" action="index.php" >
                        <div class="row" style="padding-top:15px;" >
                            <div class="col-8">
                                <input class="form-control form-control-sm" name="create_dir" type="text" placeholder="Enter Folder Name">
                            </div>
                            <div class="col-4">
                                <input type="submit" class="btn btn-outline-secondary btn-sm">
                            </div>
                        </div>
                        </form>
                    ';
                    }
                    ?>

                    
                </div>

                <!-- main_body -->

                <div class="row main_body">

                    <?php

                    foreach ($file as $value) {

                        if (is_file($value)) {
                            echo "<div class='col-2 main_padding'>
                            <ul>
                            <li><i class='fa-solid fa-file main_body_element_size'></i></li>
                            <li>$value</li>
                        </ul>   
                        </div>
                            ";
                        } else {
                            echo "<div class='col-2 main_padding'>
                            <ul>
                            <li><i class='fa-solid fa-folder main_body_element_size'></i></li>
                            <li>$value</li>
                        </ul>   
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