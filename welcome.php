<?php
  session_start();

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
      <div>
        <br>
            <a class="btn" href="bookorder.php" style="text-decoration:none">NEW ORDER</a>
            <a class="btn" href="previousdetails.php"  style="text-decoration:none" >EXSISTING ORDER</a>
      </div>
      <br><br>
      <p>
        <a href="login.php">Log out</a>
      </p>
    <?php endif ?>
</div>

</body>
</html>
