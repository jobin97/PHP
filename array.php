<?php 
$title="Array";
include 'include/header.php'?>
    <h1> Array</h1>
    <?php
     $num=array(1,2,3,4,5,6,7,8);
     echo $num[1];
     $size=count($num);
     echo"<p>Array have a size: $size</p>";
     
     for($i=0;$i<$size;$i++){
        echo"<p> $num[$i]</p>";
     }
     ?>
<?php require 'include/footer.php'?>