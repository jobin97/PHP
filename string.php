<?php
$title="String";
include 'include/header.php'?>
   <?php
   $phar1="Studen Who Came late";
   $phar2="in Class, Stand Out with Others";
   $name="lionel messi";
   echo $phar1." named John ".$phar2."</br>";
   echo '</br>';
   echo'<hr/>';
   echo 'uppercase letter:' .ucfirst($name)."</br>";
   echo 'uppercase letter of words:' .ucwords($name)."</br>";
   echo 'uppercase letter:' .strtoupper($name)."</br>";
   echo 'Lowercase letter:' .strtolower($name)."</br>";
   echo'<hr/>';
   echo '</br>';
   echo 'Repeat value:'.str_repeat('Like',10).'</br>';
   echo 'Repeat value:'.strtoupper(str_repeat('Like',10)).'</br>';
   echo 'Get String:'.strtoupper(substr($name,6)).'</br>';
   echo 'Get String Position of m:'.strpos($name,'m').'</br>';
   echo 'Get String length:'.strlen($name);
   echo '<hr/>';
   $str="Hello World";
   echo 'Without Trim: '.$str.'</br>';
   echo 'Trim the space:'. trim($str).'</br>';
   echo 'Replace the String Hi:'. str_replace("Hello","Hi",$str).'</br>';

   ?> 
<?php require 'include/footer.php'?>