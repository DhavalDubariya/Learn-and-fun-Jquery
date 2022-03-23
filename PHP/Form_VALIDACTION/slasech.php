<?php
function removeslashes($string)
{
    $expload_string = explode("\\", $string);

    $string = implode("", $expload_string);
    return stripslashes(trim($string));
}

$text = "My dog don \'t like the postman!";
echo removeslashes($text);


?>