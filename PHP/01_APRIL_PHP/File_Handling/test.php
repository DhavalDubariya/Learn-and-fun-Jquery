<?php 
    chmod("test.txt",0777);
    echo readfile("test.txt");
?>