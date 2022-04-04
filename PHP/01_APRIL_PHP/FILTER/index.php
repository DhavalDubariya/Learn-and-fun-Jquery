<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILTER</title>
</head>

<body>
    <h1 style="text-align: center;">FILTER</h1>

    <?php

    echo "<h4>filter_list():-</h4>";

    foreach (filter_list() as $key => $value) {
        echo $value . ":-" . filter_id($value), "<br>";
    }

    echo "<hr>";
    echo "<h4>filter_var():-</h4>";

    $str = "<h1>Test</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;

    echo "<h4>Validate an IP Address</h4>";

    $ip = "192.168.1.7/Dhaval";

    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        echo ("$ip is a valid IP address");
    } else {
        echo ("$ip is not a valid IP address");
    }

    echo "<h4>Validate an Email Address</h4>";
    echo "<form method='post' action='http://localhost:3000/FILTER/index.php' >
        <input type='text' name='email'>
        <input type='submit'>
    </form>";
    $email = $_POST['email'];

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo ("$email is a valid email address");
    } else {
        echo ("$email is not a valid email address");
    }


    echo "<h4>Validate a URL</h4>";

    $url = "https://www.goole";

    $url = filter_var($url, FILTER_SANITIZE_URL);

    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo ("$url is a valid URL");
    } else {
        echo ("$url is not a valid URL");
    }

    echo "<h4>Validate an Integer Within a Range.</h4>";

    $int = 250;
    $min = 1;
    $max = 200;

    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
        echo ("Variable value:$int is not within the legal range");
    } else {
        echo ("Variable value:$int is within the legal range");
    }

    echo "<h4>Validate IPv6 Address.</h4>";

    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
        echo ("$ip is a valid IPv6 address");
    } else {
        echo ("$ip is not a valid IPv6 address");
    }

    echo "<h4>Validate URL - Must Contain QueryString.</h4>";

    $url = "https://www.goole.com";

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo ("$url is a valid URL with a query string");
    } else {
        echo ("$url is not a valid URL with a query string");
    }

    echo "<h4>Remove Characters With ASCII Value > 127</h4>";

    $str = "<h1>Hello WorldÆØÅ!</h1>";

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;

    echo "<h4>Check if the external variable email is sent to the PHP page, through the POST method, and also check if it is a valid email address.</h4>";
  
    echo "<form method='post' action='http://localhost:3000/FILTER/index.php' >
            <input type='text' name='email'>
            <input type='submit'>
          </form>";
                                                                                                                                                                                                                                
    if (isset($_POST["email"])) {
        if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) === false) {
            echo $_POST['email']," Email is valid";
        } else {
            echo $_POST['email']," Email is not valid";
        }
    }

    echo "<h4>Use the filter_input_array() function to filter three POST variables. The received POST variables is name, age and e-mail.</h4>";

    echo "Error !!!";

    $filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "flags" => FILTER_FORCE_ARRAY,
            "options" => "ucwords"
        ),
        "age"   => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array("min_range" => 1, "max_range" => 120)
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );
    print_r(filter_input_array(INPUT_POST, $filters));


    echo "<h4>filter_list():- List of all supported filter names.</h4>";

    foreach (filter_list() as $value) {
        echo $value . "<br>";
    }

    echo "<hr>";

    echo "<h4>filter_var_array():- function to get multiple variables</h4>";

    $data = array(
        'fullname' => 'Peter Griffin',
        'age' => 41,
        'email' => 'peter@example.com',
    );

    $mydata = filter_var_array($data);
    var_dump($mydata);
    echo "<br><br>";
    foreach ($mydata as $key => $value) {
        echo $key . ":-" . $value, "<br>";
    }




    ?>
</body>

</html>