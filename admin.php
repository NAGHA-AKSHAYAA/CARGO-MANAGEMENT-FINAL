<?php include('adminserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="admin.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Admin_ID</label>
  		<input type="text" name="admin_id" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="admin_user">Login</button>
  	</div>
  </form>
</body>
</html>
