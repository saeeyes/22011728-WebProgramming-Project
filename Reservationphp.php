<?php
// MySQL 데이터베이스 연결
$mysqli = mysqli_connect("localhost", "root", "", "mysql");

// POST 요청으로 전달된 좌석 ID 가져오기
$seatIds = explode(",", $_POST['seat_id']);
$a=count($seatIds);


for ($i = 0; $i < $a; $i++) {
    $updateQuery = "UPDATE seat SET status = '1' WHERE no=$seatIds[$i]";
    mysqli_query($mysqli, $updateQuery);
}


?>
<script>alert('Reservation completed'); location.href="main.php"</script>
