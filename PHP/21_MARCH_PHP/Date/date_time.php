<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time</title>
</head>

<body>
    <h1 style="text-align: center;">
        Date Function:-
    </h1>

    <?php

    echo "<h4>checkdate():-check the dates are valid or not</h4>";
    var_dump(checkdate(12, 31, -400));
    echo "<br>";
    var_dump(checkdate(2, 29, 2003));
    echo "<br>";
    var_dump(checkdate(6, 18, 2000));

    echo "<hr>";

    echo "<h4>date_add():-Add number of days to the date.</h4>";
    $date = date_create("2000-06-18");
    date_add($date, date_interval_create_from_date_string("21 years"));
    echo date_format($date, "Y-m-D");
    echo "<br>";
    echo date_format($date, "d-F-Y");

    echo "<hr>";


    echo "<h4>date_create_from_format():-Return a new DateTime object formatted according to the specified format.</h4>";
    $date = date_create_from_format("j-M-Y", "16-Mar-2000");
    echo date_format($date, "Y/m/d"), "<br>";
    echo date_format($date, "Y-M-j");
    echo "<hr>";


    echo "<h4>date_create():-Return a new DateTime object, and then format the date:
        Return a new DateTime object, and then format the date:
        </h4>";
    $date = date_create("2000-06-18");
    echo date_format($date, "Y/m/d"), "<br>";
    echo date_format($date, "d M Y");
    echo date_format($date, "d-M-Y");

    echo "<hr>";


    echo "<h4>date_date_set():-Return a new DateTime object, set a new date, and then format the date.</h4>";
    $date = date_create();
    date_date_set($date, 2000, 06, 18);
    echo date_format($date, "Y/m/d"), "<br>";
    echo date_format($date, "d - m - Y");
    echo "<hr>";


    echo "<h4>date_default_timezone_get():-Return the default timezone.</h4>";
    echo date_default_timezone_get();
    echo "<hr>";


    echo "<h4>date_default_timezone_set():-Set the defult time zone.<a href='https://www.php.net/manual/en/timezones.php' >Time Zone List</a></h4>";
    date_default_timezone_set("Asia/Bangkok");
    echo date_default_timezone_get(), "<br>";
    date_default_timezone_set("America/Blanc-Sablon");
    echo date_default_timezone_get();

    echo "<hr>";


    echo "<h4>date_diff():-Calculate the difference between two dates.</h4>";
    $date1 = date_create("2000-06-18");
    $date2 = date_create("2022-03-28");
    $diff = date_diff($date1, $date2);
    echo $diff->format("%R%a days");
    echo "<hr>";


    echo "<h4>date_format():-Return a new DateTime object, and then format the date.</h4>";
    $date = date_create("2000-06-18");
    echo date_format($date, "Y - m - d H:i:s"), "<br>";
    echo date_format($date, "d - m - Y H:i:s");

    echo "<hr>";


    echo "<h4>date_get_last_errors():-Return the warnings and errors while parsing a date string.</h4>";
    date_create("dsadsadsad%&&/");
    print_r(date_get_last_errors());

    echo "<hr>";

    echo "<h4>date_interval_create_from_date_string():-it is used to add 1 year and 36 days to a date.</h4>";

    $date = date_create('2000-01-01');
    date_add($date, date_interval_create_from_date_string('1 year 36 days'));
    echo date_format($date, 'Y-m-d'), "<br>";
    echo date_format($date, 'd-m-y');


    echo "<hr>";


    echo "<h4>date_interval_format():-Calculate the interval between two dates, then format the interval.</h4>";

    $date1 = date_create("2000-01-01");
    $date2 = date_create("2020-01-01");
    $diff = date_diff($date1, $date2);

    echo $diff->format("Total number of days: %a.");
    echo "<br>";

    echo $diff->format("Total number of days: %R%a.");
    echo "<br>";

    echo $diff->format("Month: %m, days: %d years:%y");
    echo "<hr>";


    echo "<h4>date_isodate_set():-Set the ISO date to the Given date</h4>";
    $date = date_create();
    date_isodate_set($date, 2000, 06);
    echo date_format($date, "Y-m-d");

    echo "<hr>";


    echo "<h4>date_modify():-Modify the timestamp</h4>";
    $date = date_create("2000-06-01");
    date_modify($date, "+16 days");
    echo date_format($date, "Y-m-d");

    echo "<hr>";


    echo "<h4>date_offset_get():-Return the timezone offset for Oslo (in Norway, Europe) in seconds from UTC, winter and summer.</h4>";
    $winter = date_create("2000-12-31", timezone_open("Europe/Oslo"));
    $summer = date_create("2000-06-30", timezone_open("Europe/Oslo"));

    echo date_offset_get($winter) . " seconds.<br>";
    echo date_offset_get($summer) . " seconds.";

    echo "<hr>";


    echo "<h4>date_parse_from_format():-Return an associative array with detailed information about a specified date, according to the specified format:

        </h4>";
    print_r(date_parse_from_format("mmddyyyy", "06122000"));
    echo "<br>";

    print_r(date_parse_from_format("mmddyyyy", "06182000"));

    echo "<hr>";


    echo "<h4>date_parse():-Return an associative array with detailed information about a specified date:

        </h4>";
    print_r(date_parse("2000-06-1   8 12:30:46.6"));
    echo "<br>";
    print_r(date_parse("2000-06-01 12:30:46.6"));


    echo "<hr>";


    echo "<h4>date_sub():-Subtract number of days from date</h4>";
    $date = date_create("2000-03-16");
    date_sub($date, date_interval_create_from_date_string("40 days"));
    echo date_format($date, "Y-m-d");

    echo "<hr>";


    echo "<h4>date_sun_info():-Return information about sunset/sunrise and twilight begin/end on given date.</h4>";
    echo "<h3>Date: 18st Jun, 2000</h3>";
    $sun_info = date_sun_info(strtotime("2000-06-18"), 31.7667, 36.2333);
    foreach ($sun_info as $key => $val) {
        echo "$key: " . date("H:i:s", $val) . "<br>";
    }

    echo "<h3>Date: 1st June, 2000</h3>";
    $sun_info = date_sun_info(strtotime("2000-06-18"), 31.7667, 36.2333);
    foreach ($sun_info as $key => $val) {
        echo "$key: " . date("H:i:s", $val) . "<br>";
    }
    echo "<hr>";


    echo "<h4>date_sunrise():-Return the sunrise time for Lisbon, Portugal today.</h4>";
    echo ("Lisbon, Portugal: Date: " . date("D M d Y"));
    echo ("<br>Sunrise time: ");
    echo (date_sunrise(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1));
    echo "<hr>";

    echo "<h4>date_sunset():-Return the sunset time for Lisbon, Portugal today.</h4>";
    echo ("Lisbon, Portugal: Date: " . date("D M d Y"));
    echo ("<br>Sunset time: ");
    echo (date_sunset(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1));
    echo "<hr>";

    echo "<h4>date_time_set():-Set the time.</h4>";
    echo "<hr>";

    echo "<h4>date_timestamp_get():-Return the Unix timestamp for today's date and time:

        </h4>";
    $date = date_create("2000-06-01");
    date_time_set($date, 13, 24);
    echo date_format($date, "Y-m-d H:i:s");

    echo "<hr>";

    echo "<h4>date_timestamp_set():-Set the date and time based on a Unix timestamp:

    </h4>";
    $date = date_create();
    date_timestamp_set($date, 1371803321);
    echo date_format($date, "U = Y-m-d H:i:s");

    echo "<hr>";

    echo "<h4>date_timezone_get():-Return the timezone of the given DateTime object:

    </h4>";
    // $date = date_create(null, timezone_open("Europe/Paris"));
    // $tz = date_timezone_get($date);
    // echo timezone_name_get($tz);

    echo "<hr>";

    echo "<h4>date_timezone_set():-Set the timezone for the DateTime object:

        </h4>";
    $date = date_create("2000-06-26", timezone_open("Indian/Kerguelen"));
    echo date_format($date, "Y-m-d H:i:sP");

    echo "<hr>";

    echo "<h4>date():-Format a local date and time and return the formatted date strings.        </h4>";
    echo date("l") . "<br>";
    echo date("l jS \of F Y h:i:s A");

    echo "<hr>";

    echo "<h4>getdate():-Return date/time information of the current local date/time.</h4>";
    print_r(getdate());
    echo "<hr>";

    echo "<h4>gettimeofday():-Return the current time.
        
    </h4>";
    print_r(gettimeofday());

    echo "<hr>";

    echo "<h4>gmdate():-Format a GMT/UTC date and time and return the formatted date strings:

        </h4>";
    echo gmdate("l") . "<br>";
    echo gmdate("l jS \of F Y h:i:s A");

    echo "<hr>";

    echo "<h4>gmmktime():-Return the Unix timestamp for a GMT date. Then use it to find the day of that date:

        </h4>";
    echo "Oct 3, 1976 was on a " . date("l", gmmktime(0, 0, 0, 10, 3, 1976));

    echo "<hr>";

    echo "<h4>gmstrftime():-Format GMT/UTC date and time according to locale settings:

    </h4>";
    echo (gmstrftime("%B %d %Y, %X %Z", mktime(20, 0, 0, 12, 31, 98)) . "<br>");
    setlocale(LC_ALL, "hu_HU.UTF8");
    echo (gmstrftime("%Y. %B %d. %A. %X %Z"));

    echo "<hr>";


    echo "<h4>idate():-Format a local time/date as integer. Test all the different formats:

        </h4>";
    echo idate("B") . "<br>";
    echo idate("d") . "<br>";
    echo idate("h") . "<br>";
    echo idate("H") . "<br>";
    echo idate("i") . "<br>";
    echo idate("I") . "<br>";
    echo idate("L") . "<br>";
    echo idate("m") . "<br>";
    echo idate("s") . "<br>";
    echo idate("t") . "<br>";
    echo idate("U") . "<br>";
    echo idate("w") . "<br>";
    echo idate("W") . "<br>";
    echo idate("y") . "<br>";
    echo idate("Y") . "<br>";
    echo idate("z") . "<br>";
    echo idate("Z") . "<br>";

    echo "<hr>";


    echo "<h4>localtime():-Print local time as an indexed and as an associative array:

    </h4>";
    print_r(localtime());
    echo "<br><br>";
    print_r(localtime(time(), true));

    echo "<hr>";


    echo "<h4>microtime():-Return the current Unix timestamp with microseconds:

    </h4>";
    echo (microtime());

    echo "<hr>";


    echo "<h4>mktime():-Return the Unix timestamp for a date. Then use it to find the day of that date:

        </h4>";
    echo "Oct 3, 1976 was on a " . date("l", mktime(0, 0, 0, 10, 3, 1976));

    echo "<hr>";


    echo "<h4>strftime():-Format local date and time according to locale settings:

    </h4>";
    echo (strftime("%B %d %Y, %X %Z", mktime(20, 0, 0, 12, 31, 98)) . "<br>");
    setlocale(LC_ALL, "hu_HU.UTF8");
    echo (strftime("%Y. %B %d. %A. %X %Z"));

    echo "<hr>";


    echo "<h4>strptime():-Parse a time/date generated with strftime():

    </h4>";
    $format = "%d/%m/%Y %H:%M:%S";
    $strf = strftime($format);
    echo ("$strf");
    print_r(strptime($strf, $format));

    echo "<hr>";


    echo "<h4>strtotime():-Parse English textual datetimes into Unix timestamps:

    </h4>";
    echo (strtotime("now") . "<br>");
    echo (strtotime("3 October 2006") . "<br>");
    echo (strtotime("+6 hours") . "<br>");
    echo (strtotime("+1 week") . "<br>");
    echo (strtotime("+1 week 3 days 7 hours 6 seconds") . "<br>");
    echo (strtotime("next Monday") . "<br>");
    echo (strtotime("last Sunday"));
    echo "<hr>";


    echo "<h4>time():-Return the current time as a Unix timestamp, then format it to a date.</h4>";
    $t = time();
    echo ($t . "<br>");
    echo (date("Y-m-d", $t));

    echo "<hr>";

    echo "<h4>timezone_abbreviations_list():-Print dst, offset, and timezone name for the timezone:

</h4>";
    $tzlist = DateTimeZone::listAbbreviations();
    print_r($tzlist["acst"]);
    echo "<hr>";

    echo "<h4>timezone_identifiers_list():-Print all timezones in Africa:

    </h4>";
    print_r(timezone_identifiers_list(1));

    echo "<hr>";


    echo "<h4>timezone_location_get():-Return location information for the given timezone:

        </h4>";
    $tz = timezone_open("Asia/Taipei");
    print_r(timezone_location_get($tz));

    echo "<hr>";


    echo "<h4>timezone_name_from_abbr():-Return the timezone name from abbreviation:

    </h4>";
    echo timezone_name_from_abbr("EST") . "<br>";
    echo timezone_name_from_abbr("", 7200, 0);

    echo "<hr>";


    echo "<h4>timezone_name_get():-Return the name of the timezone.

    </h4>";
    $tz = timezone_open("Europe/Paris");
    echo timezone_name_get($tz);

    echo "<hr>";

    echo "<h4>timezone_offset_get():-Return the timezone offset from GMT:

    </h4>";
    $tz = timezone_open("Asia/Taipei");
    $dateTimeOslo = date_create("now", timezone_open("Europe/Oslo"));
    echo timezone_offset_get($tz, $dateTimeOslo);

    echo "<hr>";

    echo "<h4>timezone_open():-Create a new DateTimeZone object, then return the name of the timezone:

    </h4>";
    $tz = timezone_open("Europe/Paris");
    echo timezone_name_get($tz);

    echo "<hr>";

    echo "<h4>timezone_transitions_get():-Return a transition for a timezone:

        </h4>";
    $timezone = new DateTimeZone("Europe/Paris");
    print_r(reset(timezone_transitions_get($timezone)));
    echo "Object oriented style";
    print_r(reset($timezone->getTransitions()));

    echo "<hr>";

    echo "<h4>timezone_version_get():-Return the version of the timezonedb.</h4>";

    echo timezone_version_get();



    ?>
</body>

</html>