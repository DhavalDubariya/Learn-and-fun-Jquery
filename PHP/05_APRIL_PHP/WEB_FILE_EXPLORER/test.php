<?php

session_start();

$path = "/home/woc/Dhaval/traning/PHP/05_APRIL_PHP/WEB_FILE_EXPLORER/FILE";

$glob = glob("$path/*");

tree_list($glob);

function tree_list($tree)
{
    foreach ($tree as $key => $value) {
        if (is_file($value)) {
            echo "<ul style='color:red' >" . $value . "<br>";
        } else {
            echo "<ul>" . $value . "<br>";
        }
        $list = glob("$value/*");
        if (empty(glob("$value/*")) == 0) {
            tree_list($list);
        }
        echo "</ul>";
    }
}

