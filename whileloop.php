<?php 
$title="While";
include 'include/header.php'?>
    <h1>While Loop</h1>
   <?php
   $num=0;
   while($num<10){
       echo '<p> I am Doing a great Job';
       $num++;
   }
   echo'</br>';
   echo "<h2>Exit Loop</h2>";
   ?> 
<?php require 'include/footer.php'?>