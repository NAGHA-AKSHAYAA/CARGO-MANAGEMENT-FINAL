<?php

if(isset($_GET['driver_id'])){
    include "db.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        echo $_GET['driver_id'];
	}

	$id = validate($_GET['driver_id']);

	$sql = "DELETE FROM driver
	        WHERE driver_id='$id'";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location:read.php?success=successfully deleted");
   }else {
      header("Location:read.php?error=unknown error occurred&$user_data");
   }

}else
{
	header("Location:read.php");
}
