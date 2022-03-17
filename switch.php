<?php 
$title="Switch";
include 'include/header.php'?>
    <h1>Switch Statement</h1>
    <?php
    $grade='D';
    switch($grade){
        case 'A': 
            echo'<h2 style="color:green">Your performance is Excellent</h2>';
            break;
        case 'B':
            echo '<h2 style="color:blue">Your performace is Very Good</h2>';
            break; 
        case 'C':
            echo '<h2 style="color:orange">Your performace is  Good</h2>';
            break; 
        case 'C':
            echo '<h2 style="color:rose">Your performace is  Not bad</h2>';
            break;    
        default: 
            echo '<h2 style="color:red">You Failed</h2>';
                      
    }
    ?>
<?php require 'include/footer.php'?>