<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
	<div class="container">
		<form action="create.php"
		      method="post">

		   <h4 class="display-4 text-center">Create</h4><hr><br>
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
		           value="<?php if(isset($_GET['d_name']))
		                           echo($_GET['d_name']); ?>"
		           placeholder="Enter driver name ">
		   </div>

		   <div class="form-group">
		     <label for="name">Licenece No: </label>
		     <input type="name"
		           class="form-control"
		           id="l_no"
		           name="l_no"
		           value="<?php if(isset($_GET['l_no']))
		                           echo($_GET['l_no']); ?>"
		           placeholder="Enter licence number">
		   </div>

			 

       <div class="form-group">
         <label for="name">Phone Number: </label>
         <input type="name"
               class="form-control"
               id="PhoneNumber"
               name="PhoneNumber"
               value="<?php if(isset($_GET['PhoneNumber']))
                               echo($_GET['PhoneNumber']); ?>"
               placeholder="Enter phone number">
       </div>

		   <button type="submit"
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>
