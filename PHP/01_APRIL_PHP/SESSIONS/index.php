<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION</title>
</head>

<body>


    <?php
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";

    echo $_SESSION["favcolor"],"<br>";

    print_r($_SESSION);
    //session_unset();

    session_destroy();
    echo "<br>";
    foreach($_SESSION as $key=>$value)
    {
        echo $key."-".$value,"<br>";
    }

    ?>




</body>

</html>