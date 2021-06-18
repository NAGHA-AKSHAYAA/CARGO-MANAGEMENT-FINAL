<?php include('server.php')?>

<?php

        $query = "SELECT * FROM booking WHERE user_id = '$user_id'";
        $result = mysqli_query($db, $query);
        while ($row = mysqli_fetch_array($result)){
            if ($row){
                echo "<p>".$row["user_id"]." ".$row['booking_id']." ".$row['start_date']." ".$row['end_date']." ".$row['pick_up_location']." ".$row['drop_location']." ".$row['pick_up_time']." ".$row['driver_id'];
            }
        }
?>
