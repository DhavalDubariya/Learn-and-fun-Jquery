<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>

<body>

    <h1 style="text-align: center;">EXCEPTION</h1>

    <?php
    echo "<h4>throw :- statement allows a user defined function or method to throw an exception.</h4>";

    function divide($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("test throw function");
        }
        return $dividend / $divisor;
    }

    echo divide(5, 2);

    echo "<hr>";

    echo "<h4>try...catch :- statement to catch exceptions and continue the process.
    </h4>";

    function divides($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divides(5, 0);
    } catch (Exception $e) {
        echo "Unable to divide.";
    }


    echo "<hr>";

    echo "<h4>getCode():-Throw an exception and output its code.</h4>";

    try {
        throw new Exception("An error occurred", 404);
    } catch (Exception $e) {
        echo "How Error code: " . $e->getCode();
    }

    echo "<hr>";

    echo "<h4>getFile():-Throw an exception and output the path of the file in which the exception occurred.</h4>";

    try {
        throw new Exception("An error occurred");
    } catch (Exception $e) {
        echo "Error in this file: " . $e->getFile();
    }

    echo "<hr>";

    echo "<h4>getMessage():-Throw an exception and then output its message.</h4>";

    try {
        throw new Exception("Hello This Error From PHP");
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    echo "<hr>";

    echo "<h4>getLine():-Throw an exception and then output the number of the line on which it was thrown.</h4>";

    try {
        throw new Exception("An error occurred");
    } catch (Exception $e) {
        echo $e->getLine();
    }
    echo "<hr>";
    echo "<h4>getPrevious():- Get information about a previous exception.</h4>";

    try {
        try {
            throw new Exception("An error occurred", 1);
        } catch (Exception $e1) {
            throw new Exception("Another error occurred", 2, $e1);
        }
    } catch (Exception $e2) {
        echo $previous = $e2->getPrevious();
        echo $previous->getMessage();
    }

    echo "<hr>";

    echo "<h4>getTrace():- Output the stack trace.</h4>";

    function myFunction($num)
    {
        throw new Exception("An error occurred");
    }

    try {
        myFunction(5);
    } catch (Exception $e) {
        print_r($e->getTrace());
    }

    echo "<hr>";

    echo "<h4>Output the stack trace</h4>";

    function myFunction_1($num)
    {
        throw new Exception("An error occurred");
    }

    try {
        myFunction_1(5);
    } catch (Exception $e) {
        print_r($e->getTraceAsString());
    }










    ?>
</body>

</html>