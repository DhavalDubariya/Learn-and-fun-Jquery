<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul,
        #myUL {
            list-style-type: none;
        }

        #myUL {
            margin: 0;
            padding: 0;
        }

        .caret {
            cursor: pointer;
            -webkit-user-select: none;
            /* Safari 3.1+ */
            -moz-user-select: none;
            /* Firefox 2+ */
            -ms-user-select: none;
            /* IE 10+ */
            user-select: none;
        }

        .caret::before {
            content: "\25B6";
            color: black;
            display: inline-block;
            margin-right: 6px;
        }

        .caret-down::before {
            -ms-transform: rotate(90deg);
            /* IE 9 */
            -webkit-transform: rotate(90deg);
            /* Safari */
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
$nested = false;
tree_list($glob, $nested);

function tree_list($tree, $nested)
{
    foreach ($tree as $key => $value) {
        $new_value = basename($value);

        echo ($nested == true) ? "<ul class='nested' >" : "<ul id='myUL' >";
        if (is_file($value)) {
?>
            <li><?php echo  $key . " : - " .  $new_value; ?>
            <li>
                <?php
            } else {
                $count = count(glob("$value/*"));

                if ($count > 0) {
                    $nested = true; ?>
            <li style="color: red;"><span class="caret"> <a onclick="tree_data('<?php echo $count; ?>','<?php echo $value; ?>')"> <?php echo $key . " : - " .  $new_value; ?></span> </li>
        <?php
                } else { ?>
            <li> <a onclick="tree_data('<?php echo $count; ?>','<?php echo $value; ?>')"> <?php echo $key . " : - " .  $new_value; ?> </li>
<?php
                }
            }
            $list = glob("$value/*");
            if (empty(glob("$value/*")) == 0) {
                echo $nested;
                tree_list($list, $nested);
            }
        }
        echo "</ul>";
    }
?>

<!-- <ul id="myUL">
    <li><span class="caret">Beverages</span>
        <ul class="nested">
            <li>Water</li>
            <li>Coffee</li>
            <li><span class="caret">Tea</span>
                <ul class="nested">
                    <li>Black Tea</li>
                    <li>White Tea</li>
                    <li><span class="caret">Green Tea</span>
                        <ul class="nested">
                            <li>Sencha</li>
                            <li>Gyokuro</li>
                            <li>Matcha</li>
                            <li>Pi Lo Chun</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul> -->


<p id="count_data"></p>

<!-- <script>
    var oprater;

    function tree_data(data, link) {
        if (data > 0) {
            window.location.href = "test_tree.php?index=" + "&count_data=" + data;
        } else {
            document.getElementById("count_data").innerHTML = "There are No More Folder";
        }
    }
</script> -->

<script>
    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".nested").classList.toggle("active");
            this.classList.toggle("caret-down");
        });
    }
</script>