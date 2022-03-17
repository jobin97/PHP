<?php 
$title="IF";
include 'include/header.php'?>
<h1>IF Statement </h1>
    <?php
    echo "<h2> IF Statement</h2>";
    $num =3;
    if($num>=30){
        echo'<h3 style="color:green"> You have Passed the Test</h3>';
    }
    else{
        echo'<h3 style="color:red"> You have Failed the Test</h3>';
    }
    ?>
    <button class="button">submit</button>
<?php require 'include/footer.php'?>