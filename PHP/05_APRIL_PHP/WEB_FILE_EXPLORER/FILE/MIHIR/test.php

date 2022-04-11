
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree</title>
    <style>
ul, #myUL {
  list-style-type: none;
}

#myUL {
  margin: 0;
  padding: 0;
}

.caret {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none;
}

.caret::before {
  content: "\25B6";
  color: black;
  display: inline-block;
  margin-right: 6px;
}

.caret-down::before {
  -ms-transform: rotate(90deg); /* IE 9 */
  -webkit-transform: rotate(90deg); /* Safari */
  transform: rotate(90deg);  
}

.nested {
  display: none;
}

.active {
  display: block;
}
</style>
</head>
<body>
    
</body>
</html>

<?php

session_start();

$path = "/home/woc/Dhaval/traning/PHP/05_APRIL_PHP/WEB_FILE_EXPLORER/FILE";

$glob = glob("$path/*");

tree_list($glob);

echo $_GET['count_data'];

function tree_list($tree)
{
    foreach ($tree as $key => $value) {
        $new_value = basename($value);

        if (is_file($value)) {
            echo "<ul style='color:red' >" . $new_value . "<br>";
        } else {
            $count = count(glob("$value/*"));
?>

            <ul> <a onclick="tree_data('<?php echo $count; ?>','<?php echo $value; ?>')"> <?php echo  $new_value; ?> </a> <br>
    <?php
        }
        $list = glob("$value/*");
        if (empty(glob("$value/*")) == 0) {
            tree_list($list);
            echo "-------------------------";
        }
        echo "</ul>";
    }
}

    ?>

    <p id="count_data"></p>

    <script>
        var oprater;

        function tree_data(data, link) {
            if (data > 0) {
                window.location.href = "test.php?index=" + "&count_data=" + data;
            } else {
                document.getElementById("count_data").innerHTML = "There are No More Folder";
            }
        }
    </script>