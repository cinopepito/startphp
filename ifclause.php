<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            color:salmon;
        }
    </style>
</head>
<body>
    <h2>Home sweet  ethome</h2>
</body>
</html>
<?php
$age=28;
if($age>21){
    echo 'you are <b>old</b> enough to drink alcohol in USA';
}
else if($age>=18){
    echo'you are old enough to drink in UK';
}  
    else{
    echo 'you are not old enough to drink alcohol';
}
?>