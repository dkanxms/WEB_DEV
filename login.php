<?php
$a= admin;
$b= admin;
$ID1 = $_POST['ID'];
$PW1 = $_POST['PW'];

if(($ID1 == $a) && ($PW1 == $b))
{
        header("location:k.php");
}
else
{
        header("location:log_test.html");
}
?>
