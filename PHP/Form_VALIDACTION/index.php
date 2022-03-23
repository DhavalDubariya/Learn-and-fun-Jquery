<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>16_MARCH_PHP</title>
</head>

<body>

    <?php

    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Enter Valid name";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["website"])) {
            $websiteErr = "Enter website Url";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
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
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" value="<?php echo $name ?>">
                        <small style="color:red"><?php echo $nameErr; ?></small>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" value="<?php echo $email ?>">
                        <small style="color:red"><?php echo $emailErr; ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Website</label>
                        <input class="form-control" type="text" value="<?php echo $website ?>" name="website">
                        <small style="color:red"><?php echo $websiteErr; ?></small>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Comment</label>
                        <textarea class="form-control" name="comment"><?php
                                                                        if (isset($comment)) {
                                                                            echo $comment;
                                                                        }
                                                                        ?>
                        </textarea>
                    </div>
                    <div class="mb-3">

                        <div class="form-check">
                            <input class="form-check-input" value="Female" type="radio" name="gender" id="flexRadioDefault1" <?php if (isset($gender) && $gender == "Female") echo "checked" ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="Male" type="radio" name="gender" id="flexRadioDefault2" <?php if (isset($gender) && $gender == "Male") echo "checked" ?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Male
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" value="Other" type="radio" name="gender" id="flexRadioDefault3" <?php if (isset($gender) && $gender == "Other") echo "checked" ?>>
                            <label class="form-check-label" for="flexRadioDefault3">
                                Other
                            </label>

                        </div>
                        <small style="color:red"><?php echo $genderErr; ?></small>

                    </div>

                    <input class="btn  btn-primary" type="submit">
                </form>
            </div>

            <div class="col-xl-12">

                <h5>
                    <?php
                    echo "Name :" . $name . "<br>";
                    echo "Email :" . $email . "<br>";
                    echo "Website :" . $website . "<br>";
                    echo "Comment :" . $comment . "<br>";
                    echo "Gender :" . $gender . "<br>";
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