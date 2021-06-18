<?php
if (isset($_GET['user_id']))
{
    include "db.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $user_id = validate($_GET['user_id']);

    $sql = "SELECT * FROM user WHERE user_id='$user_id'";
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

    $user_id = validate($_POST['user_id']);
    $f_name = validate($_POST['f_name']);
    $l_name = validate($_POST['l_name']);
    $email = validate($_POST['email']);
    $phone_number = validate($_POST['PhoneNumber']);

    if (empty($f_name))
    {
        header("Location:update.php?user_id=$user_id&error=first name is required");
    }
    else if (empty($l_name))
    {
        header("Location: update.php?user_id=$user_id&error=last name is required");
    }
    else if (empty($email))
    {
        header("Location: update.php?user_id=$user_id&error=email is required");
    }
    else if (empty($phone_number))
    {
        header("Location: update.php?user_id=$user_id&error=phone number is required");
    }
    else
    {

        $sql = "UPDATE user SET user_id='$user_id',first_name='$f_name',last_name='$l_name',email='$email',phone_number='$phone_number' where user_id='$user_id'";
        $result = mysqli_query($conn, $sql);
        echo $sql;
        if ($result)
        {
            header("Location:read.php?success=successfully updated");
        }
        else
        {
            header("Location:read.php?error=unknown error occurred&$user_data");
        }
    }
}

else
{
    header("Location: read.php");
} ?>
