
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree</title>
    <style>
/* ul, #myUL {
  list-style-type: none;
}

#myUL {
  margin: 0;
  padding: 0;
} */

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

.myUL{
    display: none;
}

</style>

<!-- C:/xampp/htdocs/Dhaval/ -->

</head>
<body>
    
</body>
</html>

<?php

session_start();

$path = "/home/woc/Dhaval/traning/PHP/05_APRIL_PHP/WEB_FILE_EXPLORER/FILE";

$glob = glob("$path/*");

$nested = false;

tree_list($glob,$nested);

function tree_list($tree,$nested)
{ 
  if($nested == true)
  {
    ?>
    <ul class='myUL'>
    <?php
  }
  else
  {
    echo "<ul id='myUP'>";
  }  
    $num = 0;
    foreach ($tree as $key => $value) 
    {
        $new_value = basename($value);
        echo "<ul>";

        if (is_file($value)) {
        ?>
          <li>  <?php echo $new_value; ?> </li>
        <?php
        } 
        else 
        {
            $count = count(glob("$value/*"));
            if($count > 0)
            {
        ?>
            
            <li onclick="change_class(true,2)" style="color:red" >  <?php echo   $new_value ; ?></li>
        
        <?php
            }
            
            else
            {?>
            <li> <?php echo $new_value ; ?> </li> 
            <?php
            }
        }
        $list = glob("$value/*");
        if (empty(glob("$value/*")) == 0) {
            $nested = true;
            tree_list($list,$nested);
        }
        echo "</ul>";
        $num++;  
    }
  echo "</ul>";
}
    ?>


<p id="test" ></p>
<script>

function change_class(data,num)
{ 
  if (data == true && num ) {
    document.getElementsByClassName('myUL')[num].style.display = 'block';  
  }
   
  // document.getElementsByClassName('myUL')[1].style.display = 'block';

}
</script>

<!-- <script>  
var toggler = document.getElementsByClassName("caret");

 
      document.getElementsById('test').innerHtml = toggler;
 
// var i;

// for (i = 0; i < toggler.length; i++) {
//   toggler[i].addEventListener("click", function() {
//     this.parentElement.querySelector(".nested").classList.toggle("active");
//     this.classList.toggle("caret-down");
//   });
// }
</script> -->