<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
</head>

<body>
    <h1>Calendar PHP</h1>

    <?php
    echo "<h4>cal_days_in_month():-Returns the number of days in a month for a specified year and calendar
    </h4>";

    for ($i = 1; $i < 13; $i++) {
        $d = cal_days_in_month(CAL_GREGORIAN, $i, 2005);
        $h = cal_days_in_month(CAL_JULIAN, $i, 2005);
        $a = cal_days_in_month(CAL_JEWISH, $i, 2005);
        $v = cal_days_in_month(CAL_FRENCH, $i, 2005);

        echo "CAL_GREGORIAN : There was $d days in $i  2005<br>";
        echo "CAL_JULIAN : There was $h days in $i 2005<br>";
        echo "CAL_JEWISH :There was $a days in $i 2005<br>";
        echo "CAL_FRENCH :There was $v days in $i 2005<br><br>";
    }



    echo "<h4>cal_from_jd():-Converts a Julian Day Count into a date of a specified calendar
    </h4>";


    echo "<h4>cal_info():-Return information about the Gregorian calendar</h4>";

    print_r(cal_info(0));

    echo "<h4>cal_to_jd:-Converts a date in a specified calendar to Julian Day Count
    </h4>";


    $d = cal_to_jd(CAL_GREGORIAN, 6, 20, 2007);
    $h = cal_to_jd(CAL_JEWISH, 6, 18, 2000);

    echo $d . "<br>";
    echo $h . "<br>";

    echo "<h4>easter_date():-Returns the Unix timestamp for midnight on Easter of a specified year
    </h4>";

    echo easter_date() . "<br>";
    echo date("d-M-Y", easter_date()) . "<br>";
    echo date("d-M-Y", easter_date(1973)) . "<br>";
    echo date("d-M-Y", easter_date(2021)) . "<br>";
    echo date("d-M-Y", easter_date(2022));


    echo "<h4>easter_days():-Returns the number of days after March 21, that the Easter Day is in a specified year
    </h4>";

    echo "Easter Day is " . easter_days() . "<br/>";
    echo "Easter Day was " . easter_days(1973) . "<br/>";
    echo "Easter Day was " . easter_days(2021) . "<br/>";
    echo "Easter Day will be " . easter_days(2022) . "<br/>";

    echo "<h4>frenchtojd():-Converts a French Republican date to a Julian Day Count
    </h4>";

    $jd = frenchtojd(12, 30, 14);
    echo $jd . "<br>";
    echo jdtofrench($jd);

    echo "<h4>gregoriantojd():-Converts a Gregorian date to a Julian Day Count
    </h4>";
    $jd = gregoriantojd(6, 20, 2007);
    echo $jd . "<br>";
    echo jdtogregorian($jd);

    echo "<h4>jddayofweek():-Returns the day of the week
    </h4>";
    $jd = gregoriantojd(1, 13, 1998);
    echo jddayofweek($jd, 1);

    echo "<h4>jdmonthname():-Returns a month name
    </h4>";
    $jd = gregoriantojd(1, 13, 1998);
    echo jdmonthname($jd, 0);

    echo "<h4>jdtofrench():-Converts a Julian Day Count to a French Republican date
    </h4>";
    $jd = frenchtojd(3, 3, 14);
    echo $jd . "<br>";
    echo jdtofrench($jd);

    echo "<h4>jdtogregorian():-Converts a Julian Day Count to a Gregorian date
    </h4>";
    $jd = gregoriantojd(6, 20, 2007);
    echo $jd . "<br>";
    echo jdtogregorian($jd);
    echo "<h4>jdtojewish():-Converts a Julian Day Count to a Jewish date
    </h4>";
    $jd = jdtojewish(1789430);
    echo $jd;

    echo "<h4>jdtojulian():-Converts a Julian Day Count to a Julian date
    </h4>";
    $jd = juliantojd(6, 20, 2007);
    echo $jd . "<br>";
    echo jdtojulian($jd);

    echo "<h4>jdtounix():-Converts Julian Day Count to Unix timestamp
    </h4>";
    $jd = gregoriantojd(10, 3, 1975);
    echo jdtounix($jd);

    echo "<h4>jewishtojd():-Converts a Jewish date to a Julian Day Count
    </h4>";
    $jd = jewishtojd(6, 20, 2007);
    echo $jd;

    echo "<h4>juliantojd():-Converts a Julian date to a Julian Day Count
    </h4>";
    $jd = juliantojd(6, 20, 2007);
    echo $jd . "<br>";
    echo jdtojulian($jd);

    echo "<h4>unixtojd():-Converts Unix timestamp to Julian Day Count
    </h4>";
    echo unixtojd();
    
    ?>


</body>

</html>