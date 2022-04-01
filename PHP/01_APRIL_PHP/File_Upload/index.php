<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>UPLOAD FILE</title>
</head>

<body>

    <h1 style="text-align:center">
        UPLOAD FILE
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div>
                        <input class="form-control form-control-lg" type="file" name="fileToUpload" id="fileToUpload"><br>
                    </div>

                    <input class="btn btn-primary" type="submit" value="Upload Image" name="submit">
                </form>
                <br>
                <div class="row">
                    
                    <?php

                    $array = glob("uploads/*.png");

                    foreach ($array as $x) {
                        echo "<div class='col-xl-4'>";
                        echo "<img class='img-fluid'  src='$x' >";
                        echo "<br></div>";
                    }

                    ?>

                </div>

            </div>
        </div>
    </div>

</body>

</html>