<?php 
$title="Date and Time";
include 'include/header.php'?>
  <h1>Date and Time</h1>  
  <?php
  $date=getdate();
  echo "Today's date:";
  echo $date['mday'];
  echo '-' .$date['mon'];
  echo '-' .$date['year'];
  echo '</br>';
  echo "Today's date is:". $date['mday']. '/'.$date['mon']. '/'. $date['year']. '</br>';
  
  print date("m.d/y G.i:s<br>", time()). '</br>';
  print "Today is:";
  print date("j of F Y, \a\\t g.i.a", time());
  ?>
<?php require 'include/footer.php'?>