<?php include "db.php";

$sql = "SELECT * FROM driver ORDER BY driver_id";
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
			      <th scope="col">Driver No</th>
			      <th scope="col">Driver Name</th>
			      <th scope="col">Driver licence</th>
						<th scope="col">Licence Expiry Date</th>
						<th scope="col">Phone Number</th>
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
			      <th scope="row"><?=$rows['driver_id']?></th>
			      <td><?=$rows['name']?></td>
			      <td><?php echo $rows['licence_no']; ?></td>
						<td><?php echo $rows['expiry_date']; ?></td>
						<td><?php echo $rows['phone_number']; ?></td>
			      <td><a href="update.php?driver_id=<?=$rows['driver_id']?>"
			      	     class="btn btn-success">Update</a>

			      	  <a href="delete.php?driver_id=<?=$rows['driver_id']?>"
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
