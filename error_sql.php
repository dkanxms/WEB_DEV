<?php
$id=$_POST['id'];
$pw=$_POST['pw'];

$conn = mysqli_connect("localhost","root","1234","secu");
if ( mysqli_connect_errno() ) {
        echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
}

#error_reporting(E_ALL);
#ini_set("display_errors", 1);

$query = "select * from sqli where id='$id' and pw='$pw'";
echo "query : " .$query;
echo "<br />";

if( !($result=mysqli_query($conn, $query))) {
	echo "오류 : " . mysqli_error($conn);
}
else {
$row = mysqli_fetch_array($result);

if (($row['id'] == 'admin') && ($row > 0)) {
        echo "로그인 성공!<br /> {$row['id']}님 환영합니다.";
}
else if ($id  == 'admin') {
        echo "<br />";
        echo "당신은 admin이 아닙니다.";
}

else {
        echo "<br />";
        echo "{$_POST['id']}님, 당신은 admin이 아닙니다.";
}
}


?>

