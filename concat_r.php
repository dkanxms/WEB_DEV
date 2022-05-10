<?php
$conn = mysqli_connect("127.0.0.1","root","1234","2022hacking");

if ( $conn == false ) {
echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
}
date_default_timezone_set('Asia/Seoul');

error_reporting(E_ALL);
ini_set("display_errors", 0);

$name = $_POST['name'];
$number = $_POST['number'];
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d H:i:s");
#$name= addslashes($name); 자동으로 이스케이프해버려서 따옴표 안들어감..
#$number=addslashes($number); 결국 삭제 진행!

if (isset($name) && $number) {
        if(preg_match("/no|on/i", $name)){ exit( "입력 불가! "); }
        if(preg_match("/ascii|ord|mid|hex|0x|no|reverse|select|insert/i", $number)) {
            exit( "no hack! "); 
        }

    $query2="select name from concat_game where name='$name'";
    $result2= mysqli_query($conn, $query2);
    $row=mysqli_fetch_array($result2);
    
    if ($row['name'] == $name) {
        exit("같은 이름이 존재합니다.");
    }
    else {
        $query="insert into concat_game(ip, date, name, number, rewords) values('$ip', '$date', '$name', $number, 'no')";
        $result = mysqli_query($conn, $query);

        if ($result == 1) {
        echo "<a href='concat_login.html'>보상 확인</a>";
        }
        else {
            echo "오류";
        }
    }
}
else {
echo "다시 입력해주세요.";
}

?>
