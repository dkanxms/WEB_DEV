<?php

$conn=mysqli_connect("127.0.0.1","root","1234","2022hacking"); #db 연결

error_reporting(E_ALL);
ini_set("display_errors", 0);

if ( $conn == false ) { #db 연결 실패 시 오류 출력
echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
}

$name=$_POST['login_name']; #입력받은 name POST값 변수에 저장
$num=$_POST['login_number']; #입력받은 number POST값 변수에 저장

if ((isset($name) && $num) && (isset($num) && $name)) {  #isset함수는 설정이 된 변수인지 확인하는 함수 && $num의 값이 있으면 아래가 출력됨!
$name= addslashes($name); #addslashes 함수는 따옴표 등을 구분할 때 오류 안 생기게 문자열로 바꾸어주는 함수. 즉 '/ "/  이런 식
$num=addslashes($num);

$query2="select name, number, rewords from concat_game where name='$name' && number='$num'";
$result=mysqli_query($conn, $query2); #쿼리를 해당 db에 넣어줌, 해당하는 행들 반환
$b=mysqli_fetch_array($result); #mysqli_fetch_array 함수는 배열 형태로 반환해줌

if (isset($b['name']) && $b['name']) {
echo '
<html>  
        <head>
                <meta charset="utf-8">
                <link rel="stylesheet" href="concat_3.css">
                <title>rewords check page</title>
        </head>
        <body>
            <form action="concat_login.php" method="post">
                <div class="wrap">
                    <div class="login">
                        <div class="name">
                            <h1>USER imformation</h1>
                        </div>
                        <div class="text">
                            <div class="login_name">';

echo "name : {$b['name']}";
echo "<br/>";
echo '
                                <br />
                            </div>
                            <div class="login_number">';
                            echo "rewords : {$b['rewords']}";
                            echo "<br />";

echo '
                                <br />
                            </div>
                        </div>
                        <div class="login_submit">';
                        echo "<a href='concat_login.html'>back</a>";

                        if (($b['rewords'] == 'no') || ($b['rewords'] == 'No') || ($b['rewords'] == 'NO') || ($b['rewords'] == 'nO')) {
                                #rewords가 no일 경우에만 실행됨        
                                        echo "<br />";
                                        echo "<h2>SF{C0NcAT_5uRveY_CleaR}<h2>";
                                }

echo '
                        </div>
                    </div>
                </div>
            </form>
        </body>
</html>
';



}
else {
        echo "다시 확인해주세요!";
        echo "<br />";
        echo "<a href='concat_login.html'>back</a>";
}
}
else {
    echo "빈 곳이 있습니다. 다시 입력해주세요!";
    echo "<br />";
    echo "<a href='concat_login.html'>back</a>";
}
?>
