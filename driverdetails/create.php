<?php

if (isset($_POST['create'])) {
	include "db.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$d_name = validate($_POST['d_name']);
	$l_no = validate($_POST['l_no']);
	$e_date = validate($_POST['e_date']);
  $PhoneNumber = validate($_POST['PhoneNumber']);



	$user_data = 'name='.$d_name. '&licence_no='.$l_no. '&expiry_date='.$e_date. '&phone_number='.$PhoneNumber;
	if (empty($d_name)) {
		header("Location:index.php?error=driver name is required&$user_data");
	}else if (empty($l_no)) {
		header("Location: index.php?error=licence number is required&$user_data");
	}else if (empty($e_date)) {
		header("Location: index.php?error=expiry date is required&$user_data");
	}else if (empty($PhoneNumber)) {
		header("Location: index.php?error=phone number is required&$user_data");
	}else {

       $sql = "INSERT INTO driver(name,licence_no,expiry_date,phone_number)
               VALUES('$d_name','$l_no','$e_date','$PhoneNumber')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location:read.php?success=successfully created");
       }else {
          header("Location:index.php?error=unknown error occurred&$user_data");
       }
	}

}
