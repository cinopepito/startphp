<?php
$name = $_GET['username'];
$age = $_GET['age'];
if(isset($name) && isset($age) && !empty($name) && !empty($age)){
    echo 'i am '. $name . 'and my age is'. $age;
}else{
    echo'please type something here';
}
?>
<form action="get.php" method='get'>
    <input type="text" name='username' placeholder='enter your username'><br>
    <input type="text" name='age' size=4><br>
    <input type="submit" name='submit'>
</form>
