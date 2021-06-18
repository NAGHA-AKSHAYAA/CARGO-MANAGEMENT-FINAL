<?php include "db.php";

$sql = "SELECT * FROM booking ORDER BY booking_id";
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
			      <th scope="col">Booking ID</th>
			      <th scope="col">User ID</th>
			      <th scope="col">Start Date</th>
						<th scope="col">End Date</th>
						<th scope="col">Pickup Location</th>
						<th scope="col">Drop Location</th>
						<th scope="col">Pickup Time</th>
						<th scope="col">Drop Time</th>
						<th scope="col">Good type</th>
						<th scope="col">Truck</th>
						<th scope="col">Truck ID</th>
						<th scope="col">Driver ID</th>
						<th scope="col">Pick up point</th>
						<th scope="col">Drop point</th>
						<th scope="col">Price</th>
						<th scope="col">Status</th>
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
			      <th scope="row"><?=$rows['booking_id']?></th>
			      <td><?=$rows['user_id']?></td>
			      <td><?php echo $rows['start_date']; ?></td>
						<td><?php echo $rows['end_date']; ?></td>
						<td><?php echo $rows['pick_up_location']; ?></td>
						<td><?php echo $rows['drop_location']; ?></td>
						<td><?php echo $rows['pick_up_time']; ?></td>
						<td><?php echo $rows['drop_time']; ?></td>
						<td><?php echo $rows['goods_type']; ?></td>
						<td><?php echo $rows['truck']; ?></td>
						<td><?php echo $rows['truck_id']; ?></td>
						<td><?php echo $rows['driver_id']; ?></td>
						<td><?php echo $rows['pick_up_point']; ?></td>
						<td><?php echo $rows['drop_point']; ?></td>
						<td><?php echo $rows['end_date']; ?></td>
						<td><?php echo $rows['amount']; ?></td>
						<td><?php echo $rows['status']; ?></td>
			      <td><a href="update.php?booking_id=<?=$rows['booking_id']?>"
			      	     class="btn btn-success">Update</a>

			      	  <a href="delete.php?booking_id=<?=$rows['booking_id']?>"
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a style="text-decoration:none" href="/project/adminview.php">Admin menu</a>

			</div>
		</div>
	</div>
</body>
</html>
