
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservation</title>
        <style>
            body{
                background-color: black;
            }
            #top{
                background-color: brown; 
                font-size: 60px;;
                text-align: center;
            }
            .seat{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 500px;

            }
            .seat div{
                color:gainsboro;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100px;
                height: 100px;
                border : 2px solid white; 
                margin : 10px;
            }
        </style>
    </head>
    <body>
        <div id="top">Reservation</div>
        <div class="seat">
            <div onclick="button(this)" id="1">seat1</div>
            <div onclick="button(this)" id="2">seat2</div>        
            <div onclick="button(this)" id="3">seat3</div>
            <div onclick="button(this)" id="4">seat4</div>
            <div onclick="button(this)" id="5">seat5</div>
        </div>
        <form action="/Reservationphp.php" method="post">
            <input type="hidden" name="seat_id" id="selected_seat_id" value="">
            <button type="submit" id="reservation_button" disabled>예매</button>
        </form>
        <?php
        $mysqli = mysqli_connect("localhost", "root", "", "mysql");

        $query = "SELECT * FROM seat WHERE status = '1'";
        $result = mysqli_query($mysqli, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $seatNo = $row['no'];

                echo "<script>document.getElementById('$seatNo').style.backgroundColor = 'red';</script>";
            }
        }
        mysqli_close($mysqli);
        ?>
        <script>
            function button(seat) {
                if (seat.style.backgroundColor == "red") {
                    return; // 이미 예매된 좌석은 선택 불가능
                }

                if (seat.style.backgroundColor !== "green") {
                    seat.style.backgroundColor = "green";
                    seat.classList.add("selected");
                } else {
                    seat.style.backgroundColor = "black";
                    seat.classList.remove("selected");
                }
                
                // 선택한 좌석 ID를 hidden input 필드에 설정
                var selectedSeats = document.getElementsByClassName("selected");
                var selectedSeatIds = [];
                for (var i = 0; i < selectedSeats.length; i++) {
                    selectedSeatIds.push(selectedSeats[i].id);
                }
                document.getElementById("selected_seat_id").value = selectedSeatIds.join(",");
                
                // 예매 버튼 활성화/비활성화 처리
                var reservationButton = document.getElementById("reservation_button");
                if (selectedSeats.length > 0) {
                    reservationButton.disabled = false;
                } else {
                    reservationButton.disabled = true;
                }
            }
            
        </script>
    </body>
</html>
