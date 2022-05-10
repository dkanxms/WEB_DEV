<?php

$id=$_GET['id'];
$pw=$_GET['pw'];

$conn = mysqli_connect("localhost", "root", "1234", "secu");
if ( mysqli_connect_errno() ) {
        echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
}

error_reporting(E_ALL);
ini_set("display_errors", 0);

$query="select id from blindex where id='admin' and pw='$pw'";
echo "query : <strong>{$query}</strong><br />";
$result=mysqli_fetch_array(mysqli_query($conn, $query));
#print_r($result);

if($result['id']) {
        echo "<h2> hello, admin</h2>";
}
$pw = addslashes($pw);
$query = "select pw from blindex where id='admin' and pw='$pw'";
$result = mysqli_fetch_array(mysqli_query($conn, $query));

if(($pw) && ($result['pw'] == $pw)) {
        echo "<h1>good!<h1>";
}
?>

