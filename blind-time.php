<?php
$pw=$_GET['pw'];

$conn = mysqli_connect("localhost", "root", "1234", "secu");
if ( mysqli_connect_errno() ) {
        echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
}

#error_reporting(E_ALL);
#ini_set("display_errors", 1);

#$time2=time();
$query="select id from blindex where id='admin' and pw='$pw'";
echo "query : {$query}<br />";
$result=mysqli_fetch_array(mysqli_query($conn, $query));
#$pre=time();
#$pre = (int) $pre;
#echo $time2;
#echo "<br />";
#echo $pre;

#if(preg_match('/\'|\\\/i', $pw)) {
#       exit "no!";
#}

$query = "select pw from blindex where id='admin' and pw='$pw'";
$result = mysqli_fetch_array(mysqli_query($conn, $query));

if(($result['pw']) && ($result['pw'] == $pw)) {
        echo "<h2>good!</h1>";
}
?>

