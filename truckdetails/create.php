<?php

if (isset($_POST['create'])) {
	include "db.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$veh_reg = validate($_POST['vehreg']);
	$veh_type = validate($_POST['vehtype']);
  $driver_id = validate($_POST['driverid']);

	$user_data = 'vehreg='.$veh_reg. '&vehtype='.$veh_type. '&driverid='.$driver_id;
	if (empty($veh_reg)) {
		header("Location:index.php?error=vehreg is required&$user_data");
	}else if (empty($veh_type)) {
		header("Location: index.php?error=vehtype is required&$user_data");
	}else if (empty($driver_id)) {
		header("Location: index.php?error=driverid is required&$user_data");
	}else {

       $sql = "INSERT INTO trucks(veh_reg,veh_type,driver_id)
               VALUES('$veh_reg', '$veh_type','$driver_id')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location:read.php?success=successfully created");
       }else {
          header("Location:index.php?error=unknown error occurred&$user_data");
       }
	}

}
