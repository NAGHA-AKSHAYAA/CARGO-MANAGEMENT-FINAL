<?php
if (isset($_GET['veh_reg'])) {
  include "db.php";
  function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
        $veh_reg=validate($_GET['veh_reg']);

        $sql = "SELECT * FROM trucks WHERE veh_reg='$veh_reg'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result))
        {
          $row=mysqli_fetch_assoc($result);
        }
        else {
          header("Location: read.php");
        }
      }
        else if (isset($_POST['update'])) {

          $sname = "localhost";
          $uname = "root";
          $password = "";

          $db_name = "cargo_management";

          $conn  = mysqli_connect($sname, $uname, $password, $db_name);

          if (!$conn) {
          	echo "Connection failed!";
          }
          function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
          }

          $veh_reg = validate($_POST['vehreg']);
          $veh_type = validate($_POST['vehtype']);
          $driver_id = validate($_POST['driverid']);


          if (empty($veh_reg)) {
            header("Location:update.php?veh_reg=$veh_reg&error=vehreg is required");
          }else if (empty($veh_type)) {
            header("Location: update.php?veh_reg=$veh_reg&error=vehtype is required");
          }else if (empty($driver_id)) {
            header("Location: update.php?veh_reg=$veh_reg&error=driverid is required");
          }else {

               $sql = "UPDATE trucks SET veh_reg='$veh_reg', veh_type='$veh_type',driver_id='$driver_id' where veh_reg='$veh_reg'";
               $result = mysqli_query($conn, $sql);
               if ($result) {
                  header("Location:read.php?success=successfully updated");
               }else {
                  header("Location:index.php?error=unknown error occurred&$user_data");
               }
          }
        }

else {
  header("Location: read.php");
} ?>
