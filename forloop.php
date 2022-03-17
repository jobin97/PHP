<?php 
$title="For";
include 'include/header.php'?>
  <h1>For Loop</h1> 
  <?php
  for($i=0;$i<=10;$i++){
      echo"<p>The count of value: $i</p>";
  }
  ?> 
<?php require 'include/footer.php'?>