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
				 <label for="name">First Name: </label>
				 <input type="name"
							 class="form-control"
							 id="f_name"
							 name="f_name"
							 value="<?=$row['first_name']?>">
			 </div>

			 <div class="form-group">
				 <label for="name">Last Name: </label>
				 <input type="name"
							 class="form-control"
							 id="l_name"
							 name="l_name"
							 value="<?=$row['last_name']?>">

			 </div>

			 <div class="form-group">
				 <label for="email">Email_ID: </label>
				 <input type="email"
							 class="form-control"
							 id="email"
							 name="email"
							 value="<?=$row['email']?>">

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
              name="user_id"
              value="<?=$row['user_id']?>"
              hidden>


		   <button type="submit"
		          class="btn btn-primary"
		          name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>
