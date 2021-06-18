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
				 <label for="name">Driver Name: </label>
				 <input type="name"
							 class="form-control"
							 id="d_name"
							 name="d_name"
							 value="<?=$row['name']?>">
			 </div>

			 <div class="form-group">
				 <label for="name">Licenece No: </label>
				 <input type="name"
							 class="form-control"
							 id="l_no"
							 name="l_no"
							 value="<?=$row['licence_no']?>">

			 </div>

			 <div class="form-group">
				 <label for="date">Licenece Expiry Date: </label>
				 <input type="date"
							 class="form-control"
							 id="e_date"
							 name="e_date"
							 value="<?=$row['expiry_date']?>">

			 </div>

			 <div class="form-group">
				 <label for="name">Phone Number: </label>
				 <input type="name"
							 class="form-control"
							 id="PhoneNumber"
							 name="PhoneNumber"
							 value="<?=$row['phone_number']?>">

			 </div>

       <input type="text"
              name="driver_id"
              value="<?=$row['driver_id']?>"
              hidden>


		   <button type="submit"
		          class="btn btn-primary"
		          name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>
