<?php
$names = array(
    'pierre'=>array('age'=>10,'size'=>100,'month'=>'january'),
    'paul'=>20,
    'jacques'=>30,
    'alex'=>120,
);
$names['john']=70;
echo $names['paul'].'<br>';
print_r($names['pierre']['month']);
?>