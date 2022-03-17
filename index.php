<?php 
$title="Home";
include 'include/header.php'?>

    <?php

    $name= "Lionel Messi" ;
    $goals= 234;
    echo "<h1>The legend of Football is : $name </h1>";
    echo '<h1> Goals Scored by Messi is :'.$goals.'</h1>';
 ?>
 <button type="button" class="btn btn-primary">Submit</button>   
 <?php require 'include/footer.php'?>