<?php

if(isset($_GET['veh_reg'])){
   include "db.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['veh_reg']);

	$sql = "DELETE FROM trucks
	        WHERE veh_reg='$id'";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location:read.php?success=successfully deleted");
   }else {
      header("Location:read.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location:read.php");
}
