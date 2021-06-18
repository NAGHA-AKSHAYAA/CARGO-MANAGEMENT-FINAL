<?php
if (isset($_GET['booking_id']))
{
    include "db.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $booking_id = validate($_GET['booking_id']);

    $sql = "SELECT * FROM booking WHERE booking_id=$booking_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_assoc($result);
    }
    else
    {
        header("Location: read.php");
    }
}
else if (isset($_POST['update']))
{

    $sname = "localhost";
    $uname = "root";
    $password = "";

    $db_name = "cargo_management";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn)
    {
        echo "Connection failed!";
    }
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $booking_id = validate($_POST['booking_id']);
    $user_id = validate($_POST['user_id']);
    $start_date =validate($_POST['start_date']);
    $end_date = validate($_POST['end_date']);
    $pick_up_location = validate($_POST['pick_up_location']);
    $drop_location = validate($_POST['drop_location']);
    $pick_up_time = validate($_POST['pick_up_time']);
    $drop_time = validate($_POST['drop_time']);
    $driver_id = validate($_POST['driver_id']);
    $goods_type = validate($_POST['goods_type']);
    $truck = validate($_POST['truck']);
    $truck_id = validate($_POST['truck_id']);
    $pick_up_point = validate($_POST['pick_up_point']);
    $drop_point = validate($_POST['drop_point']);
    $amount = validate($_POST['amount']);
    $status = validate($_POST['status']);







    if (empty($status))
    {
        header("Location:update.php?booking_id=$booking_id&error=status is required");
    }
    else
    {

        $sql = "UPDATE booking SET booking_id=$booking_id,user_id='$user_id',start_date='$start_date',end_date='$end_date',pick_up_location='$pick_up_location',drop_location='$drop_location',pick_up_time='$pick_up_time',drop_time='$drop_time',driver_id=$driver_id,goods_type='$goods_type',truck='$truck',truck_id='$truck_no',pick_up_point='$pick_up_point',drop_point='$drop_point',amount=$amount,status='$status' where booking_id=$booking_id";
        $result = mysqli_query($conn, $sql);
        echo $sql;
        if ($result)
        {
            header("Location:read.php?success=successfully updated");
        }
        else
        {
            header("Location:index.php?error=unknown error occurred&$user_data");
        }
    }
}

else
{
    header("Location: read.php");
} ?>
