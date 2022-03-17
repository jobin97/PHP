<?php 
$title="Function";
include 'include/header.php'?>
    <?php
    function message(){
        echo "I LOVE YOU".'</br>';

    }
    message();
    message();
    message();
    message();
    message();

    function add($num1,$num2){
        $sum=$num1+$num2;
        echo "The sum of $num1 and $num2 is : $sum".'</br>';

    }
    function changenum(&$num){
        $num=$num+10;
    }
    function returnvalue($num1,$num2){
        $pro=$num1+$num2;
        return $pro;

    }
    $num=500;
    add(4,6);
    add(6,6);
    add(4,4);
    changenum($num);
    echo $num.'</br>';
    $ret=returnvalue(10,30);
    echo $ret.'</br>';
    ?>
<?php require 'include/footer.php'?>