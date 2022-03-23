<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1 style="text-align: center;">Array Function</h1>
    <h3>
        Index Array
    </h3>
    <?php

    $cars = array("Volvo", "BMW", "Toyota");
    print_r($cars);

    echo "</br>" . $cars[0], $cars[1], $cars[2] . "</br>";

    echo count($cars) . "</br>"; // Count Number Of Elemnets in Array

    //Index Array

    for ($i = 0; $i < count($cars); $i++) {
        echo $cars[$i] . "<br>";
    }
    ?>

    <h3>Associative Array
    </h3>
    <?php
    //Associative Array


    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    echo $age['Peter'] . "<br>" . $age['Ben'] . "<br>" . $age['Joe'] . "<br>";

    echo "Hello World", $age['Peter'] + $age['Ben'] . "<br>";

    //echo $age_sum. "<br>";

    foreach ($age as $x => $y) {
        echo $x . " = " . $y . "<br>";
    }
    ?>

    <h3>
        Multidimensional Arrays
    </h3>

    <?php
    //Multidimensional Arrays

    $cars_multy = array(
        array(array(1, array(5, 4)), 22, 18), array("BMW", 15, 13), array("Saab", 5, 2), array("Land Rover", 17, 15)
    );

    echo $cars_multy[0][0][1][1] . "<br><br>";

    $cars_multy_test = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    for ($i = 0; $i < count($cars_multy_test); $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $cars_multy_test[$i][$j] . "<br>";
        }
    }

    ?>

    <h3>Sorting</h3>
    <?php

    // sort()
    echo "<h4>sort()</h4>";

    $sort_array = array("Volvo", "BMW", "Toyota");

    sort($sort_array);

    for ($i = 0; $i < count($sort_array); $i++) {
        echo $sort_array[$i] . "<br>";
    }


    //rsort
    echo "<h4>rsort()</h4>";

    rsort($sort_array);

    for ($i = 0; $i < count($sort_array); $i++) {
        echo $sort_array[$i] . "<br>";
    }

    //asort : sort an array acording to value
    echo "<h4>asort()</h4>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    asort($age);

    foreach ($age as $x => $y) {
        echo $x . " = " . $y . "<br>";
    }

    //ksort : sort an array acording to Key
    echo "<h4>ksort()</h4>";

    ksort($age);

    foreach ($age as $x => $y) {
        echo $x . " = " . $y . "<br>";
    }


    //arsort : sort an array acording to value in Descending order
    echo "<h4>arsort()</h4>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    arsort($age);

    foreach ($age as $x => $y) {
        echo $x . " = " . $y . "<br>";
    }


    //krsort : sort an array acording to Key in Descending order
    echo "<h4>krsort()</h4>";

    krsort($age);

    foreach ($age as $x => $y) {
        echo $x . " = " . $y . "<br>";
    }

    //array_change_key_case() :- Changes all keys in an array to lowercase or uppercase
    echo "<h4>array_change_key_case() :- Changes all keys in an array to lowercase or uppercase. </h4>";

    print_r(array_change_key_case($age, CASE_UPPER));


    echo "<h4> array_chunk() :-The array_chunk() function splits an array into chunks of new arrays.</h4>";

    $cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel");

    print_r(array_chunk($cars, 3));

    //Split an array into chunks of  and preserve the original keys:
    print_r(array_chunk($age, 2, false)); //Give Value
    echo "<br>";
    print_r(array_chunk($age, 2, true)); //Give Key

    echo "<h4>array_column():-Get column of last names from a recordset:

    </h4>";

    $a = array(
        array(
            'id' => 5698,
            'first_name' => 'Peter',
            'last_name' => 'Griffin',
        ),
        array(
            'id' => 4767,
            'first_name' => 'Ben',
            'last_name' => 'Smith',
        ),
        array(
            'id' => 3809,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        )
    );

    $last_names = array_column($a, 'first_name', 'last_name');
    print_r($last_names);

    echo "<h4>array_column():-Get column of last names from a recordset:</h4>";
    $fname = array("Peter", "Ben", "Joe");
    $age = array("35", "37", "43");
    $c = array_combine($fname, $age);

    print_r($c);

    echo "<h4>array_count_values():- Count Values</h4>";
    $a = array("A", "Cat", "Dog", "A", "Dog");
    print_r(array_count_values($a));

    echo "<h4>Return differences between  arrays</h4>";
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "blue", "h" => "sadsd");

    $result = array_diff($a1, $a2);

    foreach ($result as $x) {
        echo $x . "<br>";
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "black", "g" => "purple");
    $a3 = array("a" => "red", "b" => "black", "h" => "yellow");

    $result = array_diff($a2, $a1, $a3);

    foreach ($result as $x) {
        echo $x . " ";
    }

    echo "<h4>array_diff_assoc():-Compare the keys and values of arrays, and return the differences.
        </h4>";

    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("a" => "red", "d" => "yellow", "g" => "blue", "c" => "white");
    $a3 = array("h" => "red", "b" => "green", "g" => "blue");

    $result = array_diff_assoc($a1, $a2, $a3);
    print_r($result);

    echo "<h4>array_diff_key():-Compare the keys of  arrays, and return the differences:


        </h4>";
    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "red", "c" => "blue", "d" => "pink");

    $result = array_diff_key($a1, $a2);
    print_r($result);

    echo "<br>";

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("c" => "yellow", "d" => "black", "e" => "brown");
    $a3 = array("f" => "green", "c" => "purple", "g" => "red");

    $result = array_diff_key($a1, $a2, $a3);
    print_r($result);

    echo "<h4>array_fill():-Fill value in Array:</h4>";

    $a1 = array_fill(0, 4, "blue");
    $b1 = array_fill(0, 1, "red");
    print_r($a1);
    echo "<br>";
    print_r($b1);

    echo "<h4>array_fill_keys:-Fill an array with values, specifying keys
        </h4>";

    $keys = array("a", "b", "c", "d");
    $a2 = array("red", "green", "blue", "yellow");

    for ($i = 0; $i < count($keys); $i++) {
        $new = array($keys[$i]);
        $a1 = array_fill_keys($new, $a2[$i]);
        print_r($a1);
    }

    echo "array_diff_uassoc():- Compare the keys and values  of two arrays and return the differences";

    function myfunction_5($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("d" => "red", "b" => "green", "e" => "blue");

    $result = array_diff_uassoc($a1, $a2, "myfunction_5");
    print_r($result);

    echo "<h4>array_diff_ukey():-Compare the keys of two arrays.</h4>";

    function myfunction_6($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

    $result = array_diff_ukey($a1, $a2, "myfunction_6");
    print_r($result);


    echo "<h4>array_filter():- Filter the values of an array using a callback function:

    </h4>";

    function test_odd($var)
    {
        if ($var % 2 !== 0) {
            return ($var);
        }
    }

    $a1 = array(1, 3, 2, 3, 4);
    print_r(array_filter($a1, "test_odd"));

    echo "<h4>array_flip():-flip value in to key</h4>";

    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $result = array_flip($a1);
    print_r($result);


    echo "<h4>array_intersect():- Intersect only values from all arrays</h4>";

    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "purple");
    $a3 = array("a" => "red", "b" => "green", "h" => "yellow");

    $result = array_intersect($a1, $a2, $a3);
    print_r($result);

    echo "<h4>array_intersect_assoc():-Compare the keys of all arrays, and return the matches.
    </h4>";

    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("a" => "red", "b" => "green", "g" => "blue");
    $a3 = array("a" => "red", "b" => "green", "g" => "blue");

    $result = array_intersect_assoc($a1, $a2, $a3);
    print_r($result);

    echo "<h4>array_intersect_uassoc():-Compare the keys and values of two arrays, and return the matches.</h4>";

    function myfunction_8($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("d" => "red", "b" => "green", "e" => "blue");

    $result = array_intersect_uassoc($a1, $a2, "myfunction_8");
    print_r($result);

    echo "<h4>array_intersect_ukey():-Compare the keys of  arrays and return the matches.

    <h4>";

    function myfunction_9($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

    $result = array_intersect_ukey($a1, $a2, "myfunction_9");
    print_r($result);


    echo "<h4>array_key_exites():-Check the given key exists in an array or not & in return give boolean values.
        </h4>";

    $a = array("Volvo" => "XC90", "BMW" => "X5");

    echo (array_key_exists("Volvo", $a));

    echo "<h4>array_keys():-returns an array containing the keys.
    </h4>";

    $a = array("Volvo" => "XC90", "BMW" => "X5", "Toyota" => "Highlander");
    print_r(array_keys($a));

    echo "<br>";

    $a = array("Volvo" => "XC90", "BMW" => "X5", "Toyota" => "Highlander");
    print_r(array_keys($a, "Highlander"));

    echo "True False parameter in array_keys <br>";

    $a = array(10, 20, 30, "10");
    print_r(array_keys($a, "10", false));


    echo "<h4>array_map():-send each value of array to user made function </h4>";

    function myfunction($v1, $v2)
    {
        if ($v1 === $v2) {
            return "same";
        }
        return "different";
    }

    $a1 = array("Horse", "Dog", "Cat");
    $a2 = array("Cow", "Dog", "Rat");
    print_r(array_map("myfunction", $a1, $a2));

    echo "<h4>array_merge():-Merge different arrays into one array.(override the keys)</h4>";
    $a1 = array("a" => "red", "b" => "green");
    $a2 = array("c" => "blue", "b" => "yellow");
    print_r(array_merge($a1, $a2));

    echo "<h4>array_merge_recursive:-Merge different arrays into one array.(Can't override the keys)</h4>";
    $a1 = array("a" => "red", "b" => "green");
    $a2 = array("c" => "blue", "b" => "yellow");
    print_r(array_merge_recursive($a1, $a2));

    echo "<h4>array_multisort:-returns a sorted array.</h4>";

    $a1 = array(1, 30, 1);
    $a2 = array("Pluto", "Fido", "Missy");
    $a3 = array(4, 30, 2);

    array_multisort($a1, $a2, $a3);
    print_r($a1);
    print_r($a2);
    print_r($a3);


    echo "<h4>array_pad():-inserts a specified number of elements with value to array</h4>";

    $a = array("red", "green");
    print_r(array_pad($a, -5, "blue"));

    echo "<h4>array_pop():-Delete Last Element of Array.</h4>";

    $a = array("red", "green", "yellow");
    $pop = array_pop($a);
    print_r($pop);

    echo "<h4>array_product():- Return product of array</h4>";

    $a = array(50, 65, 12, 100);
    echo (array_product($a));

    echo "<h4>array_push():- push value at end of the array</h4>";

    $a = array("a" => "red", "b" => "green");
    array_push($a, "blue", "yellow");
    print_r($a);


    echo "<h4>array_rand:- Return random key from array</h4>";

    $a = array("red", "green", "blue", "yellow", "brown");
    $random_keys = array_rand($a);
    echo $random_keys;

    echo "<h4>array_reduce():-sends the values in an array to a user-defined function, and returns a string</h4>";

    function myfunction_1($v1, $v2)
    {
        return $v1 + $v2;
    }
    $a = array(10, 15, 20);
    print_r(array_reduce($a, "myfunction_1", 5));

    echo "<h4>array_reduce:- For string</h4>";


    function myfunction_3($v1, $v2)
    {
        return $v1 . "-" . $v2;
    }
    $a = array("Dog", "Cat", "Horse");
    print_r(array_reduce($a, "myfunction_3", 5));

    echo "<h4>array_replace():-Replace a value of first array with second array</h4>";

    $a1 = array("a" => "red", "green");
    $a2 = array("a" => "orange", "b" => "burgundy");
    print_r(array_replace($a1, $a2));
    echo "<h4>array_replace_recursive():-</h4>";

    $a1 = array("a" => array("red"), "b" => array("green", "blue"),);
    $a2 = array("a" => array("yellow"), "b" => array("black"));
    print_r(array_replace_recursive($a1, $a2));


    echo "<h4>array_reverse():- Reverse an array. </h4>";

    $a = array("a" => "Volvo", "b" => "BMW", "c" => "Toyota");
    print_r(array_reverse($a));

    echo "<h4>array_search():- Search value in array and return as key</h4>";

    $a = array("a" => "red", "b" => "green", "c" => "blue");
    echo array_search("red", $a);

    echo "<h4>array_shift():-Remove the first element from array and return it.</h4>";

    $a = array("a" => "Volvo", "b" => "BMW", "c" => "Toyota");
    print_r(array_shift($a));

    echo "<h4>array_slice():-Slice an array from given position</h4>";

    $a = array("red", "green", "blue", "yellow", "brown");
    print_r(array_slice($a, 1, 3));

    echo "<h4>array_splice:-removes selected elements from an array and replaces it with new elements.</h4>";

    $a1 = array("0" => "red", "1" => "green");
    $a2 = array("0" => "purple", "1" => "orange");
    array_splice($a1, 1, 1, $a2);
    print_r($a1);


    echo "<h4>array_sum():-Return sum of array.</h4>";

    $a = array("a" => 52.2, "b" => 13.7, "c" => 0.9);
    echo array_sum($a);

    echo "<h4>array_udiff():-Compare the values of arrays and return the differences.</h4>";
    function myfunction_10($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

    $result = array_udiff($a1, $a2, "myfunction_10");
    print_r($result);


    echo "<h4>array_udiff_assoc():-Compare the keys and values of arrays and return the differences</h4>";

    function myfunction_11($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "red", "b" => "blue", "c" => "green");

    $result = array_udiff_assoc($a1, $a2, "myfunction_11");
    print_r($result);

    echo "<h4>array_uintersect():-Compare the keys and values of arrays and return matches.</h4>";
    function myfunction_12($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

    $result = array_uintersect($a1, $a2, "myfunction_12");
    print_r($result);

    echo "array_uintersect_assoc():-Compare the keys and values of arrays and return the matches.";

    function myfunction_13($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "red", "b" => "blue", "c" => "green");

    $result = array_uintersect_assoc($a1, $a2, "myfunction_13");
    print_r($result);


    echo "<h4>compact():- Create an array from variables and their values.</h4>";

    $firstname = "Peter";
    $lastname = "Griffin";
    $age = "41";

    $result = compact("firstname", "lastname", "age");

    print_r($result);

    echo "<h4>current(),next(),prev(),end(),reset()</h4>";

    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    echo current($people) . ":  The current element is Peter<br> ";
    echo next($people) . ": The next element of Peter is Joe<br>";
    echo end($people) . ":   The last element is Cleveland<br>";
    echo prev($people) . ": The previous element of Cleveland is Glenn<br>";
    echo reset($people) . ":   Moves the internal pointer to the first element of the array, which is Peter<br>";


    echo "<h4>array_values():-Return all the values of an array (not the keys).</h4>";

    $a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
    print_r(array_values($a));

    echo "<h4>array_walk():-Run each array element in a user-defined function.</h4>";


    function myfunction_4($value, $key)
    {
        echo "The key $key has the value $value<br>";
    }
    $a = array("a" => "red", "b" => "green", "c" => "blue");
    array_walk($a, "myfunction_4");

    echo "<h4>array_unique():-Remove duplicate values from an array.</h4>";
    $a = array("a" => "red", "b" => "green", "c" => "red");
    print_r(array_unique($a));

    echo "<h4>array_unshift():-Inserts new elements to an array. The new array values will be inserted in the beginning of the array.</h4>";
    $a = array(0 => "red", 1 => "green");
    array_unshift($a, "blue");
    print_r($a);

    echo "<h4>extract():-Convert key into variables.</h4>";

    $b = "mango";
    $my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");
    extract($my_array, EXTR_PREFIX_SAME, "ddh");
    echo "\$a = $a; \$b = $b; \$c = $c; \$ddh_b = $ddh_b";

    //print_r(each($people));

    echo "<h4>in_array():-Search a value in array and give output.</h4>";

    $people = array("Peter", "Joe", "Glenn", "Cleveland", 23);

    if (in_array("23", $people, TRUE)) {
        echo "Match found<br>";
    } else {
        echo "Match not found<br>";
    }
    if (in_array("Glenn", $people, TRUE)) {
        echo "Match found<br>";
    } else {
        echo "Match not found<br>";
    }

    if (in_array(23, $people, TRUE)) {
        echo "Match found<br>";
    } else {
        echo "Match not found<br>";
    }

    echo "<h4>Return the element key from the current internal pointer position.</h4>";

    $people = array("Peter", "Joe", "Glenn", "Cleveland");
    echo end($people) . "<br>";
    echo key($people);


    echo "<h4>list():-Assign variables as if they were an array.</h4>";

    $my_array = array("Dog", "Cat", "Horse");

    list($a, $b, $c) = $my_array;
    echo  $a . "-" . $b . "-" . $c;

    echo "<h4>natsort():-sorts an array by using a natural order algorithm. </h4>";

    $files = array(
        "temp15.txt", "temp10.txt",
        "temp1.txt", "temp22.txt", "temp2.txt"
    );


    sort($files);
    echo "Standard sorting: ";
    print_r($files);
    echo "<br>";

    natsort($files);
    echo "Natural order: ";
    print_r($files);


    echo "<h4>natcasesort():- sorts an array by using a natural order algorithm(case insensitve).
    </h4>";

    $files = array(
        "temp15.txt", "Temp10.txt",
        "temp1.txt", "Temp22.txt", "temp2.txt"
    );

    natsort($files);
    echo "Natural order: ";
    print_r($files);
    echo "<br />";

    natcasesort($files);
    echo "Natural order case insensitve: ";
    print_r($files);

    echo "<h4>range():-</h4>";
    $number = range(0, 5);
    print_r($number);

    echo "<h4>range with increment</h4>";
    $number = range(10, 50, 10);
    print_r($number);

    echo "<h4>Latters</h4>";
    $letter = range("a", "z");
    print_r($letter);


    echo "<h4>shuffle():-shuffle an array</h4>";

    $my_array = array("red", "green", "blue", "yellow", "purple");

    shuffle($my_array);
    print_r($my_array);

    echo "<h4>sizeof():-Return the number of elements in an array</h4>";

    $cars = array("Volvo", "BMW", "Toyota");
    echo sizeof($cars) . "<br>";

    echo "Recursive Count:-";

    $cars = array(
        "Volvo" => array(
            "XC60",
            "XC90"
        ),
        "BMW" => array(
            "X3",
            "X5"
        ),
        "Toyota" => array(
            "Highlander"
        )
    );

    echo "Normal count: " . sizeof($cars) . "<br>";
    echo "Recursive count: " . sizeof($cars, 1);

    echo "<h4>uasort():-Sort the elements of the  array by values using a user-defined comparison function.
    </h4>";

    function my_sort($a, $b)
    {
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
    }

    $arr = array("a" => 4, "b" => 2, "c" => 8, "d" => 6);
    uasort($arr, "my_sort");

    foreach ($arr as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    echo "<h4>uksort():-Sort the elements of the array by keys using a user-defined comparison function.

    </h4>";

    function my_sort_2($a, $b)
    {
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
    }

    $arr = array("a" => 4, "b" => 2, "c" => 8, "d" => 6);
    uksort($arr, "my_sort_2");

    foreach ($arr as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }


    echo "<h4>Sort the elements of the array using a user-defined comparison function.</h4>";

    function my_sort_4($a, $b)
    {
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
    }

    $a = array(4, 2, 8, 6);
    usort($a, "my_sort_4");

    $arrlength = count($a);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $a[$x];
        echo "<br>";
    }

    ?>

</body>

</html>