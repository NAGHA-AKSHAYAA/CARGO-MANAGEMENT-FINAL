<?php include 'update1.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
	<div class="container">
		<form action="update1.php"
		      method="post">

		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
			 <div class="form-group">
				 <label for="name">status: </label>
				 <input type="name"
							 class="form-control"
							 id="status"
							 name="status"
							 value="<?=$row['status']?>">
			 </div>


       <input type="text"  name="booking_id" value="<?=$row['booking_id']?>"  hidden>
			  <input type="text"  name="user_id" value="<?=$row['user_id']?>"  hidden>
				 <input type="text"  name="start_date" value="<?=$row['start_date']?>"  hidden>
				  <input type="text"  name="end_date" value="<?=$row['end_date']?>"  hidden>
					 <input type="text"  name="pick_up_location" value="<?=$row['pick_up_location']?>"  hidden>
					  <input type="text"  name="drop_location" value="<?=$row['drop_location']?>"  hidden>
						 <input type="text"  name="pick_up_time" value="<?=$row['pick_up_time']?>"  hidden>
						  <input type="text"  name="drop_time" value="<?=$row['drop_time']?>"  hidden>
							 <input type="text"  name="goods_type" value="<?=$row['goods_type']?>"  hidden>
							  <input type="text"  name="driver_id" value="<?=$row['driver_id']?>"  hidden>
								<input type="text"  name="truck" value="<?=$row['truck']?>"  hidden>
							 <input type="text"  name="truck_id" value="<?=$row['truck_id']?>"  hidden>
							 <input type="text"  name="pick_up_point" value="<?=$row['pick_up_point']?>"  hidden>
							  <input type="text"  name="drop_point" value="<?=$row['drop_point']?>"  hidden>
								 <input type="text"  name="amount" value="<?=$row['amount']?>"  hidden> 



		   <button type="submit"
		          class="btn btn-primary"
		          name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>
