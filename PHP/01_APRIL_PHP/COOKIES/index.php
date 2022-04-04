<?php
$cookie_name = "user_2";
$cookie_value = "Dhaval_2";

setcookie($cookie_name, $cookie_value, time() + 3600, "/");
// 86400 = 1 day.
// "/" means that the cookie is available for all file.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES</title>
</head>

<body>
    <h1 style="text-align: center;">COOKIES</h1>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
    }

    $new_user = "asdsadsadsad";

    $new_value =  "sadsadsaasdg";

    setcookie($new_user, $new_value, time() + 3600, "/");

    echo $_COOKIE[$new_user];

    print_r($_COOKIE);

    echo "<br><br>";

    foreach ($_COOKIE as $key => $value) {
        echo $key . ":- " . $value, "<br>";
    }
    

    ?>
</body>

</html>