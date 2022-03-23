<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Mobile_Validation</title>
</head>

<body>

    <?php

    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["india"])) {
            $indiaErr = "Number is required";
        } else {
            $india = test_input($_POST["india"]);
            if (!preg_match("/^[+][9][1][-][\d]{5}[-][\d]{5}$/", $india)) {
                $indiaErr = "Enter Indian Mobile Number:+91-XXXXX-XXXXX";
            }
        }

        if (empty($_POST["usa"])) {
            $usaErr = "Number is required";
        } else {
            $usa = test_input($_POST["usa"]);
            if (!preg_match("/^[+][1][-][2-9][\d]{2}[-][2-9][\d]{2}[-][\d]{4}$/", $usa)) {
                $usaErr = "Enter USA Mobile Number : +1-NXX-NXX-XXXX";
            }
        }

        if (empty($_POST["germany"])) {
            $germanyErr = "Number is required";
        } else {
            $germany = test_input($_POST["germany"]);
            if (!preg_match("/^[+][4][9]\s[\d]{2}\s[\d]{6}$/", $germany)) {
                $germanyErr = "Enter germany Mobile Number : +49 XX XXXXXX";
            }
        }

        if (empty($_POST["hk"])) {
            $hkErr = "Number is required";
        } else {
            $hk = test_input($_POST["hk"]);
            if (!preg_match("/^[+][8][5][2]\s[\d]{4}\s[\d]{4}$/", $hk)) {
                $hkErr = "Enter Hong kong Mobile Number : +852 XXXX XXXX
                ";
            }
        }

        if (empty($_POST["au"])) {
            $auErr = "Number is required";
        } else {
            $au = test_input($_POST["au"]);
            if (!preg_match("/^[+][6][1]\s[2 | 5]\s[\d]{4}\s[\d]{4}$/", $au)) {
                $auErr = "Enter Hong kong Mobile Number : +61 2\5 XXXX XXXX
                ";
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $string = implode("", explode("\\", $data));
        $data = stripslashes($string);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <section class="container mt-5">
        <div class="row">
            <div class="col mb-3">
                <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">India</label>
                        <input placeholder="+91-XXXXX-XXXXX" class="form-control" type="text" name="india" value="<?php echo $india ?>">
                        <small style="color:red"><?php echo $indiaErr; ?></small>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">USA</label>
                        <input placeholder="+1-NXX-NXX-XXXX" class="form-control" type="text" name="usa" value="<?php echo $usa ?>">
                        <small style="color:red"><?php echo $usaErr; ?></small>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">germany</label>
                        <input placeholder="+49 XX XXXXXX" class="form-control" type="text" name="germany" value="<?php echo $germany ?>">
                        <small style="color:red"><?php echo $germanyErr; ?></small>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Hong Kong</label>
                        <input placeholder="+852 XXXX XXXX" class="form-control" type="text" name="hk" value="<?php echo $hk ?>">
                        <small style="color:red"><?php echo $hkErr; ?></small>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Australia</label>
                        <input placeholder="+61 2\5 XXXX XXXX" class="form-control" type="text" name="au" value="<?php echo $au ?>">
                        <small style="color:red"><?php echo $auErr; ?></small>
                    </div>


                    <input class="btn  btn-primary" type="submit">
                </form>
            </div>

            <div class="col-xl-12">

                <h5>
                    <?php
                    echo "Name :" . $india . "<br>";
                    echo "Email :" . $usa . "<br>";
                    echo "Website :" . $germany . "<br>";
                    echo "Comment :" . $hk . "<br>";
                    echo "Gender :" . $au . "<br>";
                    ?>
                </h5>

                <?php // echo htmlspecialchars($_SERVER["PHP_SELF"]); 
                ?>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>