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
		     <label for="name">Vehile registration no: </label>
		     <input type="name"
		           class="form-control"
		           id="vehreg"
		           name="vehreg"
		           value="<?=$row['veh_reg']?>">

		   </div>

		   <div class="form-group">
		     <label for="name">Vehile Type</label>
		     <input type="name"
		           class="form-control"
		           id="vehtype"
		           name="vehtype"
		           value="<?=$row['veh_type']?>">

		   </div>

       <div class="form-group">
         <label for="name">Driver ID</label>
         <input type="name"
               class="form-control"
               id="driverid"
               name="driverid"
               value="<?=$row['driver_id']?>">

       </div>

       <input type="text"
              name="vehreg"
              value="<?=$row['veh_reg']?>"
              hidden>


		   <button type="submit"
		          class="btn btn-primary"
		          name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>
