
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>idor</title>
        <link rel="stylesheet" href="idor.css">
    </head>
    <body>
        <div class="wrap">
            <div class="flag">
                <h3>flag를 생각하고 있는 로봇</h3>
                <div class="flag">
                    <img src="https://w.namu.la/s/c9b951140de72f66425f2f5523cd2a4aa0a796a5c67e4c8363782e249d58f9d4fbbd977b1c6fd8d0fcecf5ee70a146619ee15c502a074c547f931384a97d69e545c812a594659981193b546f627eedae" width="400">
                    <br>
                </div>
                <h3>어떤 걸 배우시겠습니까?</h3>
            </div>
                <ul >
                    <li>HTML <br />가격 : 20000000</li>
                    <li>CSS <br />가격 : 30000000</li>
                    <li>JAVASCRIPT <br />가격 : 80000000</li>
                    <li>JAVA       <br />가격 : 90000000</li>
                    <li>JSP        <br />가격 : 70000000</li>
                    <li>ORACLE     <br />가격 : 60000000</li>
                </ul>
        </div>
        <form method="get">
            <div class="input">
                <h4>보유 포인트 : 500 </h4>
                구매할 제품 번호 : <input type="text" name="num">
                <br />
                지불할 포인트 : <input type="text" name="point">
                <input type="submit" value="submit">
            </div>
        </form>
    </body>
</html>

<?php
if (isset($_GET['num']) && $_GET['point']) {
    if (($_GET['num'] == 1) || ($_GET['num'] == 2) || ($_GET['num'] == 3) || ($_GET['num'] == 4)  || ($_GET['num'] == 5)) {
        if ($_GET['point'] > 500) {
            echo "포인트가 부족합니다.";
        }
        else {
            echo "구매자가 많습니다. 50년 이후 예약 가능합니다.";
        }
    }
    else {
        echo "<a href='flag_view.html'>ERROR : FLAG_VIEW</a>";
    }
}
else {
    echo "입력하셔야 구매 가능합니다.";
}
?>
