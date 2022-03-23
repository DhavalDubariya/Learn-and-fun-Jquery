<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRING</title>
</head>

<body>
    <h1 style="text-align: center;">
        String Function
    </h1>
    <hr>
    <?php

    echo "<h4>addcslashe():- Add backslashes to character</h4>";
    $str = "Welcome To My humble Homepage!";
    echo $str . "<br>";
    echo addcslashes($str, 'd') . "<br>";
    echo addcslashes($str, 'A...Z') . "<br>";
    echo addcslashes($str, 'a...o') . "<br>";

    echo "<hr>";

    echo "<h4>addslashes():- Add slashes to predefined character.</h4>";

    $str = "Who's 'Peter' Griffin?";
    echo addslashes($str);

    echo "<hr>";


    echo "<h4>bin2hex():-Convert String to hexadecimal values.</h4>";

    $str = "Dhaval Dubariya!";
    echo bin2hex($str) . "<br>";
    echo "<hr>";
    echo "<h4>chop():- Remove character from right side of string.	</h4>";

    $str = "Dhaval Dubariya";
    echo $str . "<br>";
    echo chop($str, "abuiyrD ");

    echo "<hr>";

    echo "<h4>chr():-Return characters from different ASCII values.	</h4>";
    echo chr(65) . "<br>"; // Decimal value
    echo chr(065) . "<br>"; // Octal value
    echo chr(0x65) . "<br>"; // Hex value

    echo "<hr>";

    echo "<h4>chunk_split():-Split string after given value and add given string	</h4>";

    $str = "Hello world!";
    echo chunk_split($str, 6, "...");

    echo "<hr>";

    echo "<h4>convert_cyr_string():-Convert a string from one character-set to another.</h4>";
    echo "Error !!!!";
    // $str = "Hello world! æøå";
    // echo $str . "<br>";
    // echo convert_cyr_string($str, 'w', 'a');
    echo "<hr>";
    echo "<h4>convert_uudecode():-Decode a uuencoded string	</h4>";

    $str = ",2&5L;&\@=V]R;&0A `";
    echo convert_uudecode($str);

    echo "<hr>";
    echo "<h4>convert_uuencode():-encode a string.</h4>";

    $str = "Hello world!";
    echo convert_uuencode($str);
    echo "<hr>";

    echo "<h4>count_chars():-	</h4>";

    echo "<h4>count_chars(\$str,mode3):-Return a string with all the different characters used in string</h4>";

    $str = "Dhaval Dubariya....!";
    echo count_chars($str, 3);

    echo "<h4>count_chars(\$str,mode4):-Return a string with all unused characters used in string   </h4>";
    $str = "Dhaval Dubariya 123545489";
    echo count_chars($str, 4);

    echo "<h4>count_chars(\$str,mode1)return an array with the ASCII value as key and how many times it occurred as value:

    </h4>";
    $str = "Hello World!";
    print_r(count_chars($str, 1));
    echo "<hr>";
    echo "<h4>crc32():-	</h4>";

    $str = crc32("Hello World!");
    printf("%u\n", $str);
    echo "<br>";

    $str = crc32("Hello world.");
    echo 'Without %u: ' . $str . "<br>";
    echo 'With %u: ';
    printf("%u", $str);

    echo "<hr>";
    echo "<h4>echo():-function outputs one or more strings.

    </h4>";

    echo "echo() fubction outputs one or more strings";
    echo "<hr>";
    echo "<h4>crypt():-	</h4>";

    echo "Error !!!!";


    echo "<hr>";
    echo "<h4>explode():-Break a string into an array.</h4>";
    $str = "Hello world. It's a beautiful day.";
    print_r(explode(" ", $str));
    echo "<br>";
    $str = 'one,two,three,four';
    print_r(explode(',', $str, -2));

    echo "<hr>";

    echo "<h4>addcslashe():-</h4>";

    $num1 = 123456789;
    $num2 = -123456789;
    $char = 50; // The ASCII Character 50 is 2

    // Note: The format value "%%" returns a percent sign
    printf("%%b = %b :Binary number <br>", $num1); // 
    printf("%%c = %c :The ASCII Character<br>", $char); // 
    printf("%%d = %d :Signed decimal number<br>", $num1); // 
    printf("%%d = %d :Signed decimal number<br>", $num2); // 
    printf("%%e = %e :Scientific notation (lowercase)<br>", $num1); // 
    printf("%%E = %E : Scientific notation (uppercase)<br>", $num1); //
    printf("%%u = %u :Unsigned decimal number (positive)<br>", $num1); // 
    printf("%%u = %u :Unsigned decimal number (negative)<br>", $num2); // 
    printf("%%f = %f :Floating-point number (local settings aware)<br>", $num1);
    printf("%%F = %F :Floating-point number (not local sett aware)<br>", $num1); // 
    printf("%%g = %g :Shorter of %e and %f<br>", $num1); // 
    printf("%%G = %G :Shorter of %E and %f<br>", $num1); // 
    printf("%%o = %o :Octal number<br>", $num1); // 
    printf("%%s = %s :String<br>", $num1); // 
    printf("%%x = %x :Hexadecimal number (lowercase)<br>", $num1); // 
    printf("%%X = %X :Hexadecimal number (uppercase)<br>", $num1); // 
    printf("%%+d = %+d :Sign specifier (positive)<br>", $num1); // 
    printf("%%+d = %+d :Sign specifier (negative)<br>", $num2); // 
    echo "<hr>";

    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    echo "<h4>addcslashe</h4>";
    ?>


</body>

</html>