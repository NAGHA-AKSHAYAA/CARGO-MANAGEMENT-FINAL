<?php include "db.php";

$sql = "SELECT SUM(amount) FROM booking";
$result = mysqli_query($conn, $sql);
$amount = mysqli_fetch_assoc($result);
$amount = $amount['SUM(amount)'];
// echo($amount);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container d-flex justify-content-center align-items-center" style="margin-top:25vh">
		<div class="box d-flex justify-content-center align-items-center"> 
		<div class="row">
   <div class="col-12">
   <div>
   <h4  class="display-4 text-center">Revenue Generated</h4><br>
   </div>
   </div>
   <div class="col-12 d-flex justify-content-center align-items-center">
			<div style="font-weight:bold;font-size:120px">
			₹  <?php echo $amount ?>
			</div>
		</div>
		<div class="col-12 d-flex justify-content-center align-items-center mt-5">
			<div style="font-weight:bold;font-size:20px">
			<a href="../adminview.php" > <button style="height:50px; width:175px;" class="btn btn-success ">Move back</button></a>
			</div>
		</div>
	</div>
		</div>

	</div>

</body>
</html>
