<?php
include 'server.php';
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cargo_management');

// LOGIN ADMIN
if (isset($_POST['admin_user']))
{
    $admin_id = mysqli_real_escape_string($db, $_POST['admin_id']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($admin_id))
    {
        array_push($errors, "Admin_ID is required");
    }
    if (empty($password))
    {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0)
    {
        $query = "SELECT * FROM admin WHERE admin_id='$admin_id' AND password='$password'";
        $results = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($results);
        if (mysqli_num_rows($results) == 1)
        {
            $_SESSION['admin_id'] = $user['admin_id'];
            $_SESSION['success'] = "You are now logged in";
            header('location: adminview.php');
        }
        else
        {
            array_push($errors, "Wrong username/password combination");
        }
    }
}



//TRUCK Details

?>
