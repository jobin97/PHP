<?php 
$title="Do While";
include 'include/header.php'?>
<h1> Do While Loop</h1>
   <?php
   $num=0;
   do{
    echo '<p> I am Doing a great Job';
    $num++;
   }
   while($num<=10);
   echo'</br>';
   echo "<h2>Exit Loop</h2>";
   ?> 
<?php require 'include/footer.php'?>