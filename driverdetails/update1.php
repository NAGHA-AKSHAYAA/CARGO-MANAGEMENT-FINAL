<?php
if (isset($_GET['driver_id']))
{
    include "db.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $driver_id = validate($_GET['driver_id']);

    $sql = "SELECT * FROM driver WHERE driver_id=$driver_id";
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

    $driver_id = validate($_POST['driver_id']);
    $d_name = validate($_POST['d_name']);
    $l_no = validate($_POST['l_no']);
    $e_date = validate($_POST['e_date']);
    $PhoneNumber = validate($_POST['PhoneNumber']);

    if (empty($d_name))
    {
        header("Location:update.php?driver_id=$driver_id&error=driver name is required");
    }
    else if (empty($l_no))
    {
        header("Location: update.php?driver_id=$driver_id&error=lisence number is required");
    }
    else if (empty($e_date))
    {
        header("Location: update.php?driver_id=$driver_id&error=expiry date is required");
    }
    else if (empty($PhoneNumber))
    {
        header("Location: update.php?driver_id=$driver_id&error=phone number is required");
    }
    else
    {

        $sql = "UPDATE driver SET driver_id=$driver_id,name='$d_name',licence_no='$l_no',expiry_date='$e_date',phone_number='$PhoneNumber' where driver_id=$driver_id";
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
