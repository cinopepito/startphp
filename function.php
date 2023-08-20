<?php
function name($name,$age){
    echo 'My name is '. $name .' and my age is ' . $age;
}
name(' Alex',12);

function add($num1,$num2){
    $result=$num1+$num2;
    return $result;
}
echo '<br>';
$semi = add(10,15);
echo 'the sum of this variable ' . $semi;
?>