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

    // echo "<h4>count_chars(\$str,mode4):-Return a string with all unused characters used in string   </h4>";
    // $str = "Dhaval Dubariya 123545489";
    // echo count_chars($str, 4);

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

    echo "<h4>fprint():-Write some text to a text file named     </h4>";

    $num1 = 123456789;
    $num2 = -123456789;
    $char = 50;

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

    echo "<h4>get_html_translation_table():-Print the translation table used by the htmlspecialchars function</h4>";

    print_r(get_html_translation_table(HTML_ENTITIES));
    echo "<hr>";

    echo "<h4>hebrev():-Reverse the display of Hebrew characters.    </h4>";

    echo hebrev("á çùåï äúùñâ");
    echo "<hr>";
    echo "<h4>hebrevc():-</h4>";
    echo "Error !!!";
    echo "<hr>";

    echo "<h4>hex2bin():-Convert hexadecimal values to ASCII characters.</h4>";

    echo hex2bin("48656c6c6f20576f726c6421");

    echo "<hr>";
    echo "<h4>html_entity_decode():-Convert HTML entities to characters.    </h4>";

    $str = "My name is Dh&Aring;v&Aringl.";
    echo html_entity_decode($str, ENT_QUOTES, "UTF-8");

    echo "<hr>";

    echo "<h4>htmlentities():-Convert some characters to HTML entities.    </h4>";
    $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
    echo htmlentities($str);
    echo "<hr>";

    echo "<h4>htmlspecialchars_decode():-converts some predefined HTML entities to characters.</h4>";

    $str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
    echo htmlspecialchars_decode($str);

    echo "<hr>";

    echo "<h4>htmlspecialchars():- Convert the predefined characters  (less than) and (greater than) to HTML entities:

    </h4>";

    $str = "This is some <b>bold</b> text.";
    echo htmlspecialchars($str);

    echo "<hr>";

    echo "<h4>implode():-Join array elements with a string.</h4>";

    $arr = array('Hello', 'World!', 'Beautiful', 'Day!');
    echo implode("   ", $arr) . "<br>";
    echo implode(" + ", $arr) . "<br>";
    echo implode(" - ", $arr) . "<br>";
    echo implode(" X ", $arr);

    echo "<hr>";

    echo "<h4>Join():- Join array elements with a string.</h4>";

    $arr = array('Hello', 'World!', 'Beautiful', 'Day!');
    echo join(" ", $arr) . "<br>";
    echo join("+", $arr) . "<br>";
    echo join("-", $arr) . "<br>";
    echo join("X", $arr);
    echo "<hr>";


    echo "<h4>ucfirst():-converts the first character of a string to uppercase. </h4>";

    echo ucfirst("dhaval dubariya");

    echo "<h4>ucwords():-converts the first character of each word in a string to uppercase. </h4>";

    echo ucwords("dhaval dubariya");

    echo "<h4>strtoupper():-converts a string to uppercase. </h4>";

    echo strtoupper("dhaval dubariya");

    echo "<h4>strtolower():-converts a string to lowercase. </h4>";

    echo strtolower("DHAVAL DUBARIYA");

    echo "<h4>lcfirst():-converts the first character of a string to uppercase. </h4>";

    echo lcfirst("Dhaval Dubariya");


    echo "<hr>";

    echo "<h4>levenshtein():-Calculate the Levenshtein distance between two strings.</h4>";
    echo levenshtein("Helloo Waorldi", "Helloo all Woorld", 2, 5, 9);

    echo "<hr>";
    echo "<h4>localeconv():-containing local numeric and monetary formatting information.</h4>";

    $locale_info = localeconv();
    print_r($locale_info);

    echo "<hr>";

    echo "<h4>ltrim():-remove characters from left side of a string</h4>";

    $str = "Hello World!";
    echo $str . "<br>";
    echo ltrim($str, "Hlloe");
    echo "<hr>";

    // echo "<h4>md5():-uses the RSA Data Security, Inc. MD5 Message-Digest Algorithm.</h4>";
    // $str = "Hello";
    // echo md5($str);

    // if (md5($str) == "8b1a9953c4611296a827abf8c47804d7") {
    //     echo "<br>Hello world!";
    //     exit;
    // }

    // echo "<h5>md5_file():-uses the RSA Data Security, Inc. MD5 Message-Digest Algorithm.</h5>";

    // $filename = "test.txt";
    // $md5file = md5_file($filename);
    // echo $md5file;

    // echo "<hr>";

    echo "<h4>metaphone():-A metaphone key represents how a string sounds if said by an English speaking person.

    </h4>";


    $str = "Dhaval";
    $str2 = "Mihir";

    echo metaphone($str);
    echo "<br>";
    echo metaphone($str2);

    echo "<hr>";



    // echo "<h4>money_format():-</h4>";

    // echo "Error !!!";

    // $number = 1234.56;
    // setlocale(LC_MONETARY, "en_US");
    // echo money_format("The price is %i", $number);
    // echo "<hr>";

    echo "<h4>nl_langinfo():- returns specific local information.</h4>";

    echo "Error !!";

    echo "<hr>";


    echo "<h4>nl2br():-Insert line breaks where newlines (\n) occur.</h4>";

    echo nl2br("One line.\nAnother line.");

    echo "<hr>";

    echo "<h4>number_format():-function formats a number with grouped thousands</h4>";

    echo number_format("9998817524") . "<br>";
    echo number_format("9998817524", 2) . "<br>";
    echo number_format("9998817524", 2, ",", ".");
    echo "<hr>";

    echo "<h4>ord():-Return ASCII value of firct character of string </h4>";

    echo ord("D") . "<br>";
    echo ord("hello") . "<br>";
    echo "<hr>";

    echo "<h4>parse_str():-Store the variables in an array.</h4>";

    echo "Error !!!";

    // parse_str("name=Peter&age=43");
    // echo $name . "<br>";
    // echo $age;


    echo "<hr>";


    echo "<h4>print :- Write some text to the output.</h4>";

    print "Hello world";

    echo "<hr>";




    echo "<h4>quoted_printable_decode():-Decode a quoted-printable string to an 8-bit ASCII string.</h4>";

    $str = "Hello=0Aworld.";
    echo quoted_printable_decode($str);

    echo "<hr>";

    echo "<h4>quoted_printable_encode():-function converts an 8-bit string to a quoted-printable string.</h4>";

    $str = quoted_printable_decode($str);
    echo quoted_printable_encode($str);
    echo "<hr>";

    echo "<h4>quotemeta():-Add backslashes in front of the predefined characters.</h4>";

    $str1 = "1 + 1 = 2";
    $str2 = "1 * 1 = 1";
    $str3 = "Could you borrow me 5$?";
    $str4 = "Are you not entertained? (I am..)";
    $str5 = "The caret [ ^ ] Looks like a hat!";

    echo quotemeta($str1) . "<br>";
    echo quotemeta($str2) . "<br>";
    echo quotemeta($str3) . "<br>";
    echo quotemeta($str4) . "<br>";
    echo quotemeta($str5) . "<br>";

    echo "<hr>";


    echo "<h4>setlocale():- set the locale</h4>";

    echo "Error !!!";

    // echo setlocale(LC_ALL, "USA");
    // echo "<br>";
    // echo setlocale(LC_ALL, NULL);


    echo "<h4>sha1_file():-nction uses the US Secure Hash Algorithm 1.</h4>";

    echo "Error !!!";

    // $filename = "test.txt";
    // $sha1file = sha1_file($filename);
    // echo $sha1file;

    echo "<hr>";

    echo "<h4>similar_text():-Calculate the similarity between two strings and return the matching characters.</h4>";

    echo similar_text("Hello World", "Hello Peter");

    echo "<hr>";

    echo "<h4>soundex():-function calculates the soundex key of a string.</h4>";


    $str = "Assistance";
    $str2 = "Dhaval";

    echo soundex($str);
    echo "<br>";
    echo soundex($str2);
    echo "<hr>";


    echo "<h4>sprintf():- Replace the percent (%) sign by a variable passed as an argument.</h4>";

    echo sprintf("%%b = %b :Binary number <br>", $num1);
    echo sprintf("%%c = %c :The ASCII Character<br>", $char);
    echo sprintf("%%d = %d :Signed decimal number<br>", $num1);
    echo sprintf("%%d = %d :Signed decimal number<br>", $num2);
    echo sprintf("%%e = %e :Scientific notation (lowercase)<br>", $num1);
    echo sprintf("%%E = %E : Scientific notation (uppercase)<br>", $num1);
    echo sprintf("%%u = %u :Unsigned decimal number (positive)<br>", $num1);
    echo sprintf("%%u = %u :Unsigned decimal number (negative)<br>", $num2);
    echo sprintf("%%f = %f :Floating-point number (local settings aware)<br>", $num1);
    echo sprintf("%%F = %F :Floating-point number (not local sett aware)<br>", $num1);
    echo sprintf("%%g = %g :Shorter of %e and %f<br>", $num1);
    echo sprintf("%%G = %G :Shorter of %E and %f<br>", $num1);
    echo sprintf("%%o = %o :Octal number<br>", $num1);
    echo sprintf("%%s = %s :String<br>", $num1);
    echo sprintf("%%x = %x :Hexadecimal number (lowercase)<br>", $num1);
    echo sprintf("%%X = %X :Hexadecimal number (uppercase)<br>", $num1);
    echo sprintf("%%+d = %+d :Sign specifier (positive)<br>", $num1);
    echo sprintf("%%+d = %+d :Sign specifier (negative)<br>", $num2);


    echo "<h4>sscanf():-Give data </h4>";

    $str = "age:30 weight:60kg";
    sscanf($str, "age:%d weight:%dkg", $age, $weight);
    // show types and values
    var_dump($age, $weight);

    echo "<hr>";

    echo "<h4>str_ireplace():-Replace the characters  in the string</h4>";

    echo str_ireplace("WORLD", "Peter", "Hello good world!"), "<br>";
    echo str_ireplace("good", "how's", "Hello good world!");
    echo "<hr>";


    echo "<h4>str_pad():-Pad to the right side of the string, to a new length of given characters.</h4>";

    $str = "Hello World";
    echo str_pad($str, 13, ".");

    echo "<hr>";

    echo "<h4>str_repeat():-Repeat string multipal times.</h4>";

    echo str_repeat("Hello - ", 7);
    echo "<hr>";

    echo "<h4>str_replace():-Replace the characters  in the string (case-sensitive)</h4>";
    echo str_ireplace("WORLD", "Peter", "Hello good world!"), "<br>";
    echo str_ireplace("good", "how's", "Hello good world!");
    echo "<hr>";


    echo "<h4>str_rot13():- Encode and Decode String.</h4>";

    echo str_rot13("Dhaval");
    echo "<br>";
    echo str_rot13("Quniny");
    echo "<hr>";

    echo "<h4>str_shuffle():- Randomly shuffle all characters of a string.</h4>";

    echo str_shuffle("Hello World");
    echo "<hr>";


    echo "<h4>str_split():-Split the string into an array</h4>";
    print_r(str_split("Dhaval", 2));
    echo "<hr>";


    echo "<h4>str_word_count():-count number of words in string</h4>";

    echo str_word_count("Hello world!"), "<br>";
    echo str_word_count("Hello world !..");
    echo "<hr>";

    echo "<h4>strcasecmp():-function Compare two strings (case-insensitive).</h4>";

    echo strcasecmp("Hello world!", "hello WORLD!"), "<br>";
    echo strcasecmp("Hello world!", "helloWORLD!"), "<br>"; 
    echo strcasecmp("Hello world!", "hello"), "<br>";
    echo "<hr>";

    echo "<h4>strchr():- Find the first occurrence of world inside string and return the rest of the string.</h4>";

    echo strchr("Dhaval Dubariya Dhaval","Dubariya");

    echo "<hr>";

    echo "<h4>strcmp():- Compare strings. if strings are same return 0.</h4>";
    
    echo strcmp("Hello world!","Hello   world!");
        
    ?>


</body>

</html>