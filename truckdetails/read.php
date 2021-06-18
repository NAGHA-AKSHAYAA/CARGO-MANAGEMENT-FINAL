<?php include "db.php";

$sql = "SELECT * FROM trucks ORDER BY veh_reg DESC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Read</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Registration No</th>
			      <th scope="col">Vehicle Type</th>
			      <th scope="col">Driver Id</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$rows['veh_reg']?></th>
			      <td><?=$rows['veh_type']?></td>
			      <td><?php echo $rows['driver_id']; ?></td>
			      <td><a href="update.php?veh_reg=<?=$rows['veh_reg']?>"
			      	     class="btn btn-success">Update</a>

			      	  <a href="delete.php?veh_reg=<?=$rows['veh_reg']?>"
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="index.php" class="link-primary">Create</a>
				<br>
				<a style="text-decoration:none" href="/project/adminview.php">Admin menu</a>

			</div>
		</div>
	</div>
</body>
</html>
